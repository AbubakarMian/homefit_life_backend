<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Recommended_Product;
use App\Models\Training_Class;
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

        $response = Response::json([
            "status" => true,
            "msg" => $rec_product
        ]);
        return $response;
    }
    public function profile(){

        return \View('trainer.profile.index');   
    }
}
