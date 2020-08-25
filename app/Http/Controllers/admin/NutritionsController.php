<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nutritions;


class NutritionsController extends Controller
{
    public function index(){

        $nutritions = Nutritions::paginate(5,['id','name']);

        return \View::make('admin.modules.nutritions.index',compact('nutritions'));
    }

    public function create(){
        $control = 'create';

        return \View::make('admin.modules.nutritions.create',
            compact('control'));
    }

    public function save(Request $request){

        $nutritions = new Nutritions();

        $this->add_or_update($request , $nutritions );
        return redirect('admin_secure/nutritions');

    }
    public function edit($id){

        $control = 'edit';
        $nutritions = Nutritions::find($id);
        return \View::make('admin.modules.nutritions.create',compact('control','nutritions'

        ));
    }
    public function update(Request $request , $id  ){
        $nutritions = Nutritions::find($id);
        $this->add_or_update($request , $nutritions );
        return Redirect('nutritions');
    }


    public function add_or_update(Request $request , $nutritions  ){
        $nutritions->name = $request->name;

        $nutritions->save();
    }
    public function destroy_undestroy($id){

        $nutritions = Nutritions::find($id);
        if($nutritions){
            Nutritions::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Nutritions::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
