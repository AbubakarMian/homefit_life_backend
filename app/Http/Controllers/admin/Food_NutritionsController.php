<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Food_NutritionsController extends Controller
{
    public function index(){

        $food_nutritions = Food_Nutritions::paginate(5,['id','name','details','price']);

        return \View::make('admin.modules.food_nutritions.index',compact('food_nutritions'));
    }

    public function create(){
        $control = 'create';
//        $all_types = Type::pluck('name_en','id');

        return \View::make('admin.modules.package.create',
            compact('control'));
    }

    public function save(Request $request){

        $package = new Food_Nutritions();

        $this->add_or_update($request , $package );
        return redirect('package');

    }
    public function edit($id){

        $control = 'edit';
//        $all_types = Type::pluck('name_en','id');
        $package = Food_Nutritions::find($id);
        return \View::make('admin.modules.package.create',compact('control','package'

        ));
    }
    public function update(Request $request , $id  ){
        $package = Food_Nutritions::find($id);
        $this->add_or_update($request , $package );
        return Redirect('package');
    }


    public function add_or_update(Request $request , $package  ){
//        dd($request->name_en);
        $package->name = $request->name;
        $package->details = $request->details;
        $package->price = $request->price;

        $package->save();
    }
    public function destroy_undestroy($id){

        $package = Food_Nutritions::find($id);
        if($package){
            Food_Nutritions::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Food_Nutritions::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
