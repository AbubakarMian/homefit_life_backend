<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\Training_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;



class TrainerController extends Controller
{
    public function index(){

        $trainer = Trainer::paginate(5,['id','user_id','name','gender','rating','specialities','training_type_id','is_featured']);

        return \View::make('admin.modules.trainer.index',compact('trainer'));
    }

    public function create(){
        $control = 'create';

        return \View::make('admin.modules.trainer.create',
            compact('control'));
    }

    public function save(Request $request){

        $trainer = new Trainer();

        $this->add_or_update($request , $trainer );
        return redirect('trainer');

    }
    public function edit($id){
        $all_training_type = Training_Type::pluck('name','id');

        $control = 'edit';
        $trainer = Trainer::find($id);
        return \View::make('admin.modules.trainer.create',compact('control','all_training_type','trainer'

        ));
    }
    public function update(Request $request , $id  ){
        $trainer = Trainer::find($id);
        $this->add_or_update($request , $trainer );
        return Redirect('trainer');
    }


    public function add_or_update(Request $request , $trainer  ){
//        $trainer->user_id = $request->user_id;
        $trainer->name = $request->name;
        $trainer->gender= $request->gender;
        $trainer->rating= $request->rating;
        $trainer->specialities= $request->specialities;
        $trainer->is_featured = $request->is_featured;
        $trainer->training_type_id = $request->training_type_id;

        $trainer->save();
    }
    public function destroy_undestroy($id){

        $trainer = Trainer::find($id);
        if($trainer){
            Trainer::destroy($id);
            $new_value = 'enable';
        }
        else{
            Trainer::withTrashed()->find($id)->restore();
            $new_value = 'disable';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
