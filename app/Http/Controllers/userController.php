<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        return \View('user.home.index');
    }
    public function userlogin(){
        return \View('user.login.index');
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
