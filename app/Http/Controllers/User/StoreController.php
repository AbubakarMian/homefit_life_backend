<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {

        $items_list = Product::get();
        $per_page = 16;
        $products = $this->get_items_per_page($items_list, $per_page);
        return \View('user.store.index', compact('products'));
    }

    public function get_items_per_page($items_list, $per_page)
    {
        $items_count = $items_list->count();
        $items_split_count = $items_count / $per_page;
        $items_split_count = is_float($items_split_count) ? floor($items_split_count) + 1 : $items_split_count;
        $items_list = $items_list->split($items_split_count);
        return $items_list;
    }

    public function searchProduct(Request $request)
    {


        $items_list = Product::where('name', 'like', '%' . $request->prod_name . '%')->get();
        $per_page = 16;
        $products = $this->get_items_per_page($items_list, $per_page);
        return \View('user.store.index', compact('products'));
    }

    public function productdetail(Request $request)
    {

        $product = Product::find($request->prod_id);

        return \View('user.productdetail.index', compact('product'));
    }

    public function addCart(Request $request)
    {

        $user = Auth::user();

        $product = Product::find($request->product_id);
        if ($product->quantity < $request->qty) {
            return redirect()->back()->with('error', 'Sorry max quantity avalible is : ' . $product->quantity);
        }
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->user_id = $user->id;
        $cart->quantity  = $request->qty;
        $cart->save();
        return redirect()->back()->with('success', 'successfully add to cart');
    }

    public function remove_cart_product(Request $request)
    {

        // dd($request->all());
        cart::destroy($request->cart_id);
        return back();
    }

    public function productcart(Request $request)
    {

        $user = Auth::user();
        $product_cart = Cart::with('product')->where('user_id', $user->id)->get();

        return \View('user.productcart.index',compact('product_cart'));
    }

    public function shippingInfo(){

        $user = Auth::user();
        $product_cart = Cart::with('product')->where('user_id', $user->id)->get();

        return \View('user.shippingform.index',compact('product_cart'));
    }

    public function saveshippingInfo(Request $request){
    
        $user = Auth::user();
        $user_request = new ModelsRequest();
        $user_request->address =$request->address;
        $user_request->city =$request->city;
        $user_request->phone_no =$request->number;
        $user_request->email =$request->email;
        $user_request->shipping_method =$request->method;
        $user_request->country =$request->country;
        $user_request->name =$request->name;
        $user_request->user_id =$user->id;
        $user_request->save();


        return \View('user.payment.index', compact('user_request'));


    }
}
