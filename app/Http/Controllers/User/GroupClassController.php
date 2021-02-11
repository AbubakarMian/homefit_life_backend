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

        $items_list_free = Training_Class::where('type_id', $request->cat_id)
            ->with('training_slot.training_session')
            ->whereHas('training_slot', function ($t) {
                $t->whereHas('training_session', function ($ts) {
                    $ts->where('is_free', 1);
                });
            })->get();

        $per_page = 6;
        $training_class = $this->get_items_per_page($items_list, $per_page);
        $free_live_session = $this->get_items_per_page($items_list_free, $per_page);
        // dd($free_live_session);
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

    public function groupClassLiveSession(Request $request)
    {

        dd($request->groupclass_id);

        return \View('user.livesession.index');
    }
}
