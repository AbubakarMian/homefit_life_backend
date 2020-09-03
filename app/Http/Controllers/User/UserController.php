<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
       
        // $user_data = array(
        //     'email'  => 'user1@gmail.com',// $request->get('email'),
        //     'password' => 'abc123',//$request->get('password')
        // );
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
        dd($request);
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
            return redirect('admin_secure/dashboard');
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
        dd($request);
        return;
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
