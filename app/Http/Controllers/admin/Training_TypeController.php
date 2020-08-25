<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training_Type;

class Training_TypeController extends Controller
{
    public function index(){

        $training_type = Training_Type::paginate(5,['id','name']);

        return \View::make('admin.modules.training_type.index',compact('training_type'));
    }

    public function create(){
        $control = 'create';
//        $all_types = Type::pluck('name_en','id');

        return \View::make('admin.modules.training_type.create',
            compact('control'));
    }

    public function save(Request $request){

        $training_type = new training_type();

        $this->add_or_update($request , $training_type );
        return redirect('training_type');

    }
    public function edit($id){

        $control = 'edit';
//        $all_types = Type::pluck('name_en','id');
        $training_type = Training_Type::find($id);
        return \View::make('admin.modules.training_type.create',compact('control','training_type'

        ));
    }
    public function update(Request $request , $id  ){
        $training_type = Training_Type::find($id);
        $this->add_or_update($request , $training_type );
        return Redirect('admin_secure/training_type');
    }


    public function add_or_update(Request $request , $training_type  ){
//        dd($request->name_en);
        $training_type->name = $request->name;
        $training_type->save();
    }
    public function destroy_undestroy($id){

        $training_type = Training_Type::find($id);
        if($training_type){
            Training_Type::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Training_Type::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
