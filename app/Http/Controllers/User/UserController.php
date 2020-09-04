<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return \View('user.home.index');
    }

    public function login(){
        return \View('user.login.index');
    }

    public function userlogin(Request $request){
       
            $user_data =$request->all();
        if(Auth::attempt($user_data))
        {
            return redirect('user/dashboard');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
        $user = User::find('email','user1@gmail.com');
        return \View('user.login.index');
    }

    public function checklogin(Request $request){
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

        if(Auth::attempt($user_data))
        {
            return redirect('user/dashboard');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    
    public function logout(){
        $user = Auth::logout();
        return 'logout sucessfully';
    }

    public function save (Request $request){

        $validator = Validator::make($request->all(),User::$rules);
        $role_id = Config::get('constants.roles_id.user');
        if(!$validator->fails()){
        $users = new User();
        $users->name	   = $request->name;
        $users->email       = $request->email;
        $users->role_id       = $role_id;
        $users->password    = Hash::make($request->password);
        $users->save();
      
        return redirect('user/dashboard');
        }
        else
        {
           
            return back()->with('error', 'Wrong Login Details');
        }
    }


    public function userreset(){
        return \View('user.reset.index');

    }
    public function usercreate(){
        return \View('user.create.index');

    }
    public function userdashboard(){
        return \View('user.dashboard.index');

    }
    public function profileedit(){
        return \View('user.profileedit.index');

    }
    public function changepass(){
        return \View('user.changepass.index');

    }
    public function paymentinfo(){
        return \View('user.paymentinfo.index');

    }
    public function payment(){
        return \View('user.payment.index');

    }
    public function trainerrequest(){
        return \View('user.trainerrequest.index');

    }
    public function trainer(){
        return \View('user.trainer.index');

    }
    public function profile(){
        return \View('user.profile.index');

    }
    public function groupclass(){
        return \View('user.groupclass.index');

    }
    public function categories(){
        return \View('user.categories.index');

    }
    public function description(){
        return \View('user.description.index');

    }
    public function livesession(){
        return \View('user.livesession.index');

    }
    public function productcart(){
        return \View('user.productcart.index');

    }
    public function shippingform(){
        return \View('user.shippingform.index');

    }
    public function paymentcard(){
        return \View('user.paymentcard.index');

    }
    public function freelivesession(){
        return \View('user.freelivesession.index');

    }
    public function productdetail(){
        return \View('user.productdetail.index');

    }
}
