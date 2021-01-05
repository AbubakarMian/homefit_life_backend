<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

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

    
}
