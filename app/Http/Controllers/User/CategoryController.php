<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Training_Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $training_category = Training_Type::get();
        // $per_page = 6;
        // $training_category = $this->get_items_per_page($items_list,$per_page);
        // dd($training_category);
        return \View('user.categories.index',compact('training_category'));
    }

    public function get_items_per_page($items_list,$per_page){
        $items_count = $items_list->count();
        $items_split_count = $items_count / $per_page;
        $items_split_count = is_float($items_split_count) ? floor($items_split_count)+1 : $items_split_count;
        $items_list = $items_list->split($items_split_count);
        return $items_list;
    }
}
