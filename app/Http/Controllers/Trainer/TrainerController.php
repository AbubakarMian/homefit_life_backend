<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Training_Class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainerController extends Controller
{
    
    // public function login()
    // {
    //     return \View('user.login.index');
    // }

    // public function trainerlogin(Request $request)
    // {

    //     $user_data = $request->all();
    //     if (Auth::attempt($user_data)) {
    //         // return redirect('user/dashboard');
    //         return $this->userdashboard();
    //     } else {
    //         return back()->with('error', 'Wrong Login Details');
    //     }
    //     $user = User::find('email', 'user1@gmail.com');
    //     return \View('user.login.index');
    // }

    // public function checklogin(Request $request)
    // {
    //     try {
    //         $this->validate($request, [
    //             'email' => 'required|email',
    //             'password ' => 'required|alphaNum|min:3'
    //         ]);
    //     } catch (ValidationException $e) {
    //     }

    //     $user_data = array(
    //         'email'  => $request->get('email'),
    //         'password' => $request->get('password')
    //     );

    //     if (Auth::attempt($user_data)) {
    //         return redirect('user/dashboard');
    //     } else {
    //         return back()->with('error', 'Wrong Login Details');
    //     }
    // }

    // public function logout()
    // {
    //     $user = Auth::logout();
    //     return redirect('user/login')->with('success', 'logout sucessfully');
    // }

    // public function save(Request $request)
    // {

    //     $validator = Validator::make($request->all(), User::$rules);
    //     $role_id = Config::get('constants.roles_id.user');
    //     if (!$validator->fails()) {
    //         $users = new User();
    //         $users->name       = $request->name;
    //         $users->email       = $request->email;
    //         $users->role_id       = $role_id;
    //         $users->password    = Hash::make($request->password);
    //         $users->save();
    //         Auth::login($users);
    //         return redirect('user/dashboard');
    //     } else {

    //         return back()->with('error', 'Wrong Login Details');
    //     }
    // }


    // public function userreset()
    // {
    //     return \View('user.reset.index');
    // }

     public function dashboard(Request $request)
    {
        return \View('trainer.dashboard.index');

    }
     public function myClass(Request $request)
    {
        $trainer_id ='2';

        $class_list = Training_Class::where('trainer_id',$trainer_id)->get();
        return \View('trainer.myclasses.index',compact('class_list'));

    }
     public function liveSession(Request $request)
    {

        $video_url = Training_Class::find($request->group_id);

        return \View('trainer.livesessiongroup.index',compact('video_url'));

    }

}
