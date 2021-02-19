<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Product;
use App\Models\Recommended_Product;
use App\Models\Trainer;
use App\Models\Trainer_Gallery;
use App\Models\Trainer_Training_Type;
use App\Models\Training_Class;
use App\Models\Training_Type;
use App\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class TrainerController extends Controller
{

    public function login()
    {
        return \View('trainer.login.index');
    }

    public function trainerlogin(Request $request)
    {

        dd($request->all());
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
            'password' => $request->get('password'),
            'role_id' => 3
        );
        if (Auth::attempt($user_data)) {

            return redirect('trainer/dashboard');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function logout()
    {
        $user = Auth::logout();
        return redirect('trainer/login')->with('success', 'logout sucessfully');
    }

    public function forgetpwd(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if (!$validation->fails()) {
            $email = $request->email;
            $user = new User();
            $responseArray = $user->resetPassword($email);

            return back()->with('success', 'New password send to your Email .');
        } else {
            return back()->with('error', 'Wrong Email Details .');
        }
    }
    public function userreset()
    {
        return \View('user.reset.index');
    }

    public function dashboard(Request $request)
    {
        return \View('trainer.dashboard.index');
    }
    public function myClass(Request $request)
    {
        $trainer_id = '2';

        $class_list = Training_Class::where('trainer_id', $trainer_id)->get();
        return \View('trainer.myclasses.index', compact('class_list'));
    }
    public function liveSession(Request $request)
    {

        $video_url = Training_Class::find($request->group_id);

        return \View('trainer.livesessiongroup.index', compact('video_url'));
    }

    public function recomendedProduct(Request $request)
    {

        $trainer_id = Auth::id();
        $rec_product = new Recommended_Product();
        $rec_product->product_id = $request->prod_id;
        $rec_product->trainer_id = $trainer_id;
        $rec_product->save();

        $response = Response::json([
            "status" => true,
            "msg" => $rec_product
        ]);
        return $response;
    }
    public function profile()
    {

        $user_id = Auth::id();
        $per_page = 6;
        $trainer = Trainer::with('user', 'gallery')->where('user_id', $user_id)->first();
        $trainer_types = Training_Type::get();
        $trainer_gallery = $this->get_items_per_page( $trainer->gallery,$per_page);
        $tariner_training_type = Trainer_Training_Type::with('type')->where('trainer',$trainer->id)->get();
        // dd($tariner_training_type);
        return \View('trainer.profile.index', compact('trainer_types', 'trainer','trainer_gallery','tariner_training_type'));
    }

    public function saveProfile(Request $request)
    {

        $user_id = Auth::id();

        $user = User::find($user_id);
        if (isset($request->profile_avatar)) {
            if ($request->hasFile('profile_avatar')) {
                $image = $request->profile_avatar;
                $root = $request->root();
                $data = $this->move_img_get_path($image, $root, 'property');
            }
            $user->avatar  = $data;
            $user->save();
        }

        $trainer = Trainer::where('user_id', $user_id)->first();
        $trainer->details = $request->description;
        $trainer->name = $request->name;
        if (isset($request->speciality)) {
            foreach ($request->speciality as $speci) {
                $speciality[] = $speci;
            }
            $trainer->specialities = json_encode($speciality);

            $trainer->save();
        }


        if (isset($request->training_types)) {
            foreach ($request->training_types as $types) {

                $trainer_type = Trainer_Training_Type::where('trainer', $trainer->id)->where('training_type', $types)->first();
                if (!$trainer_type) {
                    $trainer_type = new Trainer_Training_Type();
                    $trainer_type->trainer = $trainer->id;
                    $trainer_type->training_type = $types;
                    $trainer_type->save();
                }
            }
        }
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                // dd($file->getClientMimeType());
                $image = $file;
                $root = $request->root();
                $data = $this->move_img_get_path($image, $root, 'trainer_gallery');
                $trainer_gallery = new Trainer_Gallery();
                $trainer_gallery->url = $data;
                $trainer_gallery->trainer_id = $trainer->id;
                $trainer_gallery->type = $file->getClientMimeType();
                $trainer_gallery->save();
            }
        }
        // dd($request->all());
        if (isset($request->total_package_name[0])) {
            foreach ($request->total_package_name as $key => $t_package) {

                $package = new Package();
                $package->name = $t_package;
                $package->price = $request->total_price[$key];
                $package->trainer_id = $trainer->id;
                $package->total_sessions = $request->total_sessions[$key];
                $package->save();
            }
        }


        return redirect('trainer/dashboard');
    }

    public function get_items_per_page($items_list, $per_page)
    {
        $items_count = $items_list->count();
        $items_split_count = $items_count / $per_page;
        $items_split_count = is_float($items_split_count) ? floor($items_split_count) + 1 : $items_split_count;
        $items_list = $items_list->split($items_split_count);
        return $items_list;
    }

    
}
