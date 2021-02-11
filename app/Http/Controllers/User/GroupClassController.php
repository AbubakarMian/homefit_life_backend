<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Recommended_Product;
use App\Models\Trainer_slot;
use App\Models\Training_Class;
use App\Models\Training_Class_Users;
use App\Models\Training_Session;
use App\Models\Training_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class GroupClassController extends Controller
{


    public function index(Request $request)
    {

        $category = Training_Type::where('id', $request->cat_id)->get();

        $items_list = Training_Class::where('type_id', $request->cat_id)->get();

        // $items_list_free = Training_Class::where('type_id', $request->cat_id)
        //     ->with('training_slot.training_session')
        //     ->whereHas('training_slot', function ($t) {
        //         $t->whereHas('training_session', function ($ts) {
        //             $ts->where('is_free', 1);
        //         });
        //     })->get();

        $items_list_free = Training_Session::whereHas('training_class',function($q) use ($request){
            $q->where('type_id',$request->cat_id);
        })->with('training_class')->get();
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

    public function groupClassLiveSession(Request $request)
    {

        // dd($request->session_id);
        $session = Training_Session::with('training_class')->find($request->session_id);

        //get recomended item according to trainer id 
        $recomended_product = Recommended_Product::with('products')->where('trainer_id',$session->training_class->trainer_id)->get();

        return \View('user.livesession.index',compact('session','recomended_product'));
    }

    // crown job  function
    public function addSessions()
    {


        $group_class = Training_Class::with('training_slot.weekday')->get();


        // dd($group_class);
        foreach ($group_class as $gc) {
       
            foreach ($gc->training_slot as $ts) {
                $randomString = Str::random(10);
                $live_url = 'https://appr.tc/r/' . $randomString;
                $timestapmDate =  strtotime("next " . $ts->weekday->name);  //strtotime('next'+$ts->weekday->name);
                $nextDate = date('y/m/d', $timestapmDate);

                $tran_session = Training_Session::where('class_Day',$nextDate)->where('training_class_id',$ts->training_class_id)->get();
                if(!sizeof( $tran_session) ){
                    $training_session = new Training_Session();
                    $training_session->live_url = $live_url;
                    $training_session->training_class_id = $gc->id;
                    $training_session->slot_start = $ts->slot_start;
                    $training_session->slot_end = $ts->slot_end;
                    $training_session->class_day = $nextDate;
                    // $training_session->status = 'pending';
                    $training_session->training_slot_id = 0;
                    $training_session->save();
                }
                
            }
        }
        return true;
    }
}
