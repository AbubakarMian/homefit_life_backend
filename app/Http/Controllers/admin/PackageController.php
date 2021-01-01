<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){

        $package = Package::paginate(5,['id','name','details','price']);

        return \View::make('admin.modules.package.index',compact('package'));
    }

    public function create(){
        $control = 'create';
//        $all_types = Type::pluck('name_en','id');

        return \View::make('admin.modules.package.create',
            compact('control'));
    }

    public function save(Request $request){

        $package = new Package();

        $this->add_or_update($request , $package );
        return redirect('admin/package');

    }
    public function edit($id){

        $control = 'edit';
//        $all_types = Type::pluck('name_en','id');
        $package = Package::find($id);
        return \View::make('admin.modules.package.create',compact('control','package'

        ));
    }
    public function update(Request $request , $id  ){
        $package = Package::find($id);
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

        $package = Package::find($id);
        if($package){
            Package::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Package::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}
