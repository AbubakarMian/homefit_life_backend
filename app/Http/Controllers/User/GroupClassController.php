<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\trainer_slot;
use Illuminate\Http\Request;

class GroupClassController extends Controller
{
    

    public function index(){
        $items_list = trainer_slot::get(['id','name_en','name_ur','type_id','image','is_featured','company_id']);
        $per_page = 6;
        $product = $this->get_items_per_page($items_list,$per_page);
        return \View('user.products',compact('product'));
    }
    
    public function get_items_per_page($items_list,$per_page){
        $items_count = $items_list->count();
        $items_split_count = $items_count / $per_page;
        $items_split_count = is_float($items_split_count) ? floor($items_split_count)+1 : $items_split_count;
        // dd($product->count());
        $items_list = $items_list->split($items_split_count);
        return $items_list;
    }
}
