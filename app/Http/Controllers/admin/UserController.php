<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){

        $users = Users::paginate(5,['id','name','email','role_id','user']);

        return \View::make('admin.modules.users.index',compact('users'));
    }

    public function create(){
        $control = 'create';
//        $all_types = Type::pluck('name_en','id');

        return \View::make('admin.modules.users.create',
            compact('control'));
    }

    public function save(Request $request){

        $users = new users();

        $this->add_or_update($request , $users );
        return redirect('users');

    }
    public function edit($id){

        $users = 'edit';
//        $all_types = Type::pluck('name_en','id');
        $users = Users::find($id);
        return \View::make('admin.modules.users.create',compact('control','users'

        ));
    }
    public function update(Request $request , $id  ){
        $users = Users::find($id);
        $this->add_or_update($request , $users );
        return Redirect('users');
    }


    public function add_or_update(Request $request , $users  ){
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role_id = $request->role_id;
        $users->user = $request->user;

        $user->save();
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
