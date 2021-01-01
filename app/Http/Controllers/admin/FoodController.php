<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){

        $food = Food::paginate(5,['id','name','calories']);

        return \View::make('admin.modules.food.index',compact('food'));
    }

    public function create(){
        $control = 'create';

        return \View::make('admin.modules.food.create',
            compact('control'));
    }

    public function save(Request $request){

        $food = new Food();

        $this->add_or_update($request , $food );
        return redirect('admin/food');

    }
    public function edit($id){

        $control = 'edit';
        $food = Food::find($id);
        return \View::make('admin.modules.food.create',compact('control','food'

        ));
    }
    public function update(Request $request , $id  ){
        $food = Food::find($id);
        $this->add_or_update($request , $food );
        return Redirect('food');
    }


    public function add_or_update(Request $request , $food  ){
        $food->name = $request->name;
        $food->calories = $request->calories;

        $food->save();
    }
    public function destroy_undestroy($id){

        $food = Food::find($id);
        if($food){
            Food::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Food::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
