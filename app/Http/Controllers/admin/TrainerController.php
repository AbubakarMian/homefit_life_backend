<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(){

        $trainer = Trainer::paginate(5,['id','user_id','name','gender','rating','is_featured']);

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

        $control = 'edit';
        $trainer = Trainer::find($id);
        return \View::make('admin.modules.trainer.create',compact('control','trainer'

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
        $trainer->is_featured = $request->is_featured;

        $trainer->save();
    }
    public function destroy_undestroy($id){

        $trainer = Trainer::find($id);
        if($trainer){
            Trainer::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Trainer::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
