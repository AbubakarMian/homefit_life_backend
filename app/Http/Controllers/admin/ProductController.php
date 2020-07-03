<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $product = Product::paginate(5,['id','name','avatar','price','details','rating']);
        return \View::make('admin.modules.product.index',compact('product'));
//        dd('sadsa');
//        $company = Company::pluck('name_en','id');
    }
    public function create(){
        $control = 'create';
//        $all_companies = Product::pluck('name_en','id');
//        $all_types = Type::pluck('name_en','id');
        return \View::make('admin.modules.product.create',
            compact('control'));
    }

    public function save(Request $request){
//        dd($request->all());
        $package = new Product();

        $this->add_or_update($request , $package );

        return redirect('product');

    }
    public function edit($id){

        $control = 'edit';
        $all_companies = Company::pluck('name_en','id');
        $all_types = Type::pluck('name_en','id');

        $product = Product::find($id);
        return \View::make('admin.modules.product.create',compact(
            'all_companies','control','product','all_types'
        ));
    }
    public function update(Request $request , $id  ){
        $product = Product::find($id);
        $this->add_or_update($request , $product );
        return Redirect('product');
    }


    public function add_or_update(Request $request , $product  ){

        $product->name = $request->name;
        $product->avatar = $request->avatar;
        $product->price=$request->price;
        $product->details =$request->details;
        $product->rating =$request->rating;
        $product->save();
    }
    public function destroy_undestroy($id){

        $product = Product::find($id);
        if($product){
            Product::destroy($id);
            $new_value = 'Activate';
        }
        else{
            Product::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }
}