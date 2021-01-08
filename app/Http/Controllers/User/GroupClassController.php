<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Trainer_slot;
use App\Models\Training_Class;
use App\Models\Training_Class_Users;
use App\Models\Training_Session;
use App\Models\Training_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GroupClassController extends Controller
{


    public function index(Request $request)
    {
        
        $category = Training_Type::where('id', $request->cat_id)->get();
        
        $items_list = Training_Class::where('type_id', $request->cat_id)->get();
        // $items_list_free = Training_Class::where('type_id', $request->cat_id)
        //     ->whereHas('training_session', function ($t) {
        //         $t->where('training_session.is_free', 1);
        //     })
        //     ->with('training_session')->get();

        $items_list_free = Training_Class::where('type_id', $request->cat_id)->get();
            
        dd($items_list_free);
        $per_page = 6;
        $training_class = $this->get_items_per_page($items_list, $per_page);
        $free_live_session = $this->get_items_per_page($items_list_free, $per_page);
        return \View('user.groupclass.index', compact('training_class', 'free_live_session', 'category'));
    }

    public function get_items_per_page($items_list, $per_page)
    {
        $items_count = $items_list->count();
        $items_split_count = $items_count / $per_page;
        $items_split_count = is_float($items_split_count) ? floor($items_split_count) + 1 : $items_split_count;
        $items_list = $items_list->split($items_split_count);
        return $items_list;
    }

    public function group_desc(Request $request)
    {
        $class_detail = Training_Class::with('trainer')->where('id', $request->class_id)->first();


        $group_member = Training_Class_Users::with(['user', 'trainingclass' => function ($g) use ($request) {
            $g->where('id', $request->class_id);
        }])->get();


        return \View('user.description.index', compact('class_detail', 'group_member'));
    }
}
