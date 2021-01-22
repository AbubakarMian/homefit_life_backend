<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Leads;
use App\Models\NutritionDailyGoal;
use App\Models\Trainer;
use App\Models\Training_Class;
use App\Models\Training_Session;
use App\Models\Training_Type;
use App\Models\User_Nutritions;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function index()
    {

        return \View('user.home.index');
    }

    public function login()
    {
        return \View('user.login.index');
    }

    public function userlogin(Request $request)
    {

        $user_data = $request->all();
        if (Auth::attempt($user_data)) {
            // return redirect('user/dashboard');
            return $this->userdashboard();
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
        $user = User::find('email', 'user1@gmail.com');
        return \View('user.login.index');
    }

    public function checklogin(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password ' => 'required|alphaNum|min:3'
            ]);
        } catch (ValidationException $e) {
        }

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('user/dashboard');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function logout()
    {
        $user = Auth::logout();
        return redirect('user/login')->with('success', 'logout sucessfully');
    }

    public function save(Request $request)
    {

        $validator = Validator::make($request->all(), User::$rules);
        $role_id = Config::get('constants.roles_id.user');
        if (!$validator->fails()) {
            $users = new User();
            $users->name       = $request->name;
            $users->email       = $request->email;
            $users->role_id       = $role_id;
            $users->password    = Hash::make($request->password);
            $users->save();
            Auth::login($users);
            return redirect('user/dashboard');
        } else {

            return back()->with('error', 'Wrong Login Details');
        }
    }


    public function userreset()
    {
        return \View('user.reset.index');
    }
    public function usercreate()
    {
        return \View('user.create.index');
    }
    public function userdashboard(Request $request)
    {

        $search_text = $request->trainer ?? '';
        $user = Auth::user();
        $training_categories = Training_Type::get();
        $featured_trainer = $this->trainer_query($search_text, 'featured');
        $sessions = Training_Class::with('training_slot.training_session')
            ->whereHas('training_slot', function ($t) {
                $t->whereHas('training_session', function ($ts) {
                    $ts->where('is_free', 1);
                });
            })->get();
        $trainer_by_raiting = $this->trainer_query($search_text, 'rating');
        $user_header = $this->user_header();

        // $user_nutritions=NutritionDailyGoal::where('user_id',$user->id)->get();
        // dd($user_nutritions);
        session(['user_common' => $user_header]);
        return \View('user.dashboard.index', compact(
            'training_categories',
            'featured_trainer',
            'sessions',
            'user',
            'trainer_by_raiting'
        ));
    }


    public function nutritionDailyGoalMonthly(Request $request, $month)
    {
        $year = date("Y");
        $starttime = strtotime('1-' . $month . '-' . $year);   // d/m/y

        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $endtime = strtotime($days . '-' . $month . '-' . $year);   // d/m/y
        $user_nutritions = NutritionDailyGoal::where('user_id', $request->user_id)
            ->where('date', '>=', $starttime)
            ->where('date', '<=', $endtime)
            ->groupBy('user_id')
            ->select([
                'user_id',
                DB::Raw('avg(proteins) as avg_proteins'),
                DB::Raw('avg(carbohydrates) as avg_carbohydrates'),
                DB::Raw('avg(fats) as avg_fats'),
                DB::Raw('avg(total_carbs) as total_carbohydrates'),
                DB::Raw('avg(total_protein) as total_proteins'),
                DB::Raw('avg(total_fats) as total_fats'),
            ])
            ->get()->toArray();

            if(!$user_nutritions){
                $user_nutritions = [
                    'avg_proteins'=>00,
                    'avg_carbohydrates'=>00,
                    'avg_fats'=>00,
                    'total_carbohydrates'=>00,
                    'total_proteins'=>00,
                    'total_fats'=>00,
                ];
            }

        $res = new \stdClass();
        $res->status = true;
        $res->response = $user_nutritions;
        return json_encode($res);
    }


    public function getTotalConsumeNutritions(Request $request)
    {
        $year = date("Y");
        $startyeardate = strtotime('1-1-' . $year);

        $endyeardate = strtotime(date('Y-m-d', strtotime('12/31')));

        $dateE = Carbon::now()->startOfMonth();

        $user_nutritions_data = NutritionDailyGoal::where('user_id', $request->user_id)
            ->whereBetween('date', [$startyeardate, $endyeardate])
            ->orderBy('date', 'asc')
            ->get();



        $months = [];

        for ($i = 0; $i < 12; $i++) {

            $days = cal_days_in_month(CAL_GREGORIAN, $i+1, $year);
            $month_last_date = strtotime($days . '-' . $i . '-' . $year); // d/m/y
            $month_start_date = strtotime('1-' . $i . '-' . $year);
            $months[$i] = [];
            $months[$i]['protein'] = 0;
            $months[$i]['carbs'] = 0;
            $months[$i]['fats'] = 0;
            foreach ($user_nutritions_data as $data) {
                if ($data->date < $month_start_date) {
                    continue;
                }

                if ($data->date <= $endyeardate) {
                    $months[$i]['protein'] = $months[$i]['protein'] + $data->total_protein;
                    $months[$i]['carbs'] = $months[$i]['carbs'] + $data->total_carbs;
                    $months[$i]['fats'] = $months[$i]['fats'] + $data->total_fats;
                } else {
                    break;
                }
            }
        }
        $res = new \stdClass();
        $res->status = true;
        $res->response = $months;
        return json_encode($res);
    }




    public function trainer_query($search_text, $type)
    {

        if ($type == 'rating') {
            $report = Trainer::where('name', 'like', '%' . $search_text . '%')->orderBy('rating');
            return $report->get();
        } else {
            $report = Trainer::where('name', 'like', '%' . $search_text . '%')->where('is_featured', 1);
            return $report->get();
        }
    }

    public function update_profile(Request $request)
    {

        $user_profile = User::find($request->user_id);
        $user_profile->name = $request->name;
        $user_profile->email = $request->email;
        $user_profile->description = $request->description;
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();
            $user_profile->avatar = $this->move_img_get_path($avatar, $root, 'product');
        }

        $user_profile->save();

        return back()->with('success', 'Profile Update Successfully');
    }
    public function profileedit()
    {
        $user = Auth::user();
        return \View('user.profileedit.index', compact('user'));
    }
    public function changepass()
    {
        return \View('user.changepass.index');
    }
    public function paymentinfo()
    {
        return \View('user.paymentinfo.index');
    }
    public function payment()
    {
        return \View('user.payment.index');
    }
    public function trainerrequest()
    {
        return \View('user.trainerrequest.index');
    }
    public function trainer_permission(Request $request)
    {

        $user = Auth::user();
        $lead = new Leads();
        $lead->user_id = $user->id;
        $lead->message = $request->message;
        $lead->save();
        return back()->with('success', 'Request send successfully');
    }
    public function trainer()
    {
        return \View('user.trainer.index');
    }
    public function trainerprofile($id)
    {

        $trainer = Trainer::with('training_type')->find($id);
        $group_class = Training_Class::where('trainer_id', $id)->get();
        return \View('user.profile.index', compact('trainer', 'group_class'));
    }
    public function groupclass()
    {
        return \View('user.groupclass.index');
    }
    public function categories()
    {
        return \View('user.categories.index');
    }
    public function description()
    {
        return \View('user.description.index');
    }
    public function livesession()
    {
        return \View('user.livesession.index');
    }
    public function productcart()
    {
        return \View('user.productcart.index');
    }
    public function shippingform()
    {
        return \View('user.shippingform.index');
    }
    public function paymentcard()
    {
        return \View('user.paymentcard.index');
    }
    public function freelivesession()
    {
        return \View('user.freelivesession.index');
    }

    public function user_header()
    {

        $modules[] = [
            'url' => 'user/dashboard',
            'title' => 'Home'
        ];

        $modules[] = [
            'url' => 'user/categories',
            'title' => 'Categories',
        ];

        $modules[] = [
            'url' => 'user/trainer',
            'title' => 'Trainers',
        ];
        $modules[] = [
            'url' => 'user/store',
            'title' => 'Store',
        ];
        // $modules[] = [
        //     'url' => 'user/liveSession',
        //     'title' => 'Live Session',
        // ];


        $myvar = [];
        $myvar['header'] = $modules;

        return $myvar;
    }
}
