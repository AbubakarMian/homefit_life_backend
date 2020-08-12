<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){

        $users = Users::paginate(5,['id','name','email','role_id']);

        return \View::make('admin.modules.users.index',compact('users'));
    }



    public function destroy_undestroy($id){

        $users = Users::find($id);
        if($users){
            Users::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Users::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
