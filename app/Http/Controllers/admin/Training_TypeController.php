<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training_Type;
use Response;
use Config;

class Training_TypeController extends Controller
{
    public function index(){

        $training_type = Training_Type::paginate(5,['id','name','avatar']);

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
        return redirect('admin/training_type');

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
        return Redirect('admin/training_type');
    }


    public function add_or_update(Request $request , $training_type  ){
    //    dd($request->all());
        $training_type->name = $request->name;
        if($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $root = $request->root();

            $training_type->avatar =$this->move_img_get_path($avatar, $root, 'training_type');
        }
        else if($request->image_visible){
            $training_type->avatar = $request->image_visible;
        }
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

    public function get_training_type(){

        $training_type_arr = Training_Type::get();

        $response = Response::json(["status"=>true,
        'action'=>'Sucess',
        'data'=>$training_type_arr
    ]);
    return $response;
    }

    public function update_trainer_training_type(Request $request){

        dd($request->all());
        $trainer_training_type = new Training_Type;
        $trainer_training_type_arr->trainer = $request->trainer_id;
        $trainer_training_type_arr->training_type = $request->trainer_id;

    }
}
