<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Trainer_slot;
use App\Models\Training_Class;
use App\Models\Training_Type;
use App\Models\Weekday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GroupClassController extends Controller
{
    public function index(Request $request)
    {
        //trainer_type
        $title = $request->title ?? '';
        $category_id = $request->type_id ?? 0;
        $week_day_id = $request->day_id ?? 0;

        // $training_slot = Trainer_slot::whereHas('training_class', function ($query) use ($title, $category_id) {
        //     $query->with('trainer_type');
        //     $query->where('name', 'like', '%' . $title . '%');
        //     if ($category_id) {
        //         $query = $query->where('type_id', $category_id);
        //     }
        // })->with('training_class.trainer_type');
        // if ($week_day_id) {
        //     $training_slot = $training_slot->where('week_days_id', $week_day_id);
        // }
        // $training_slot = $training_slot->get();

        $trainng_classs = Training_Class::with(['training_slot'], function ($query) use ($week_day_id) {
            // if ($week_day_id) {
            //     $query->where('week_days_id', $week_day_id);
            // }
        })->with('trainer_type');
        $trainng_classs = $trainng_classs->where('name', 'like', '%' . $title . '%');
        if ($category_id) {
            $trainng_classs = $trainng_classs->where('type_id', $category_id);
        }
        $trainng_class = $trainng_classs->get();
        $weekdays = Weekday::get(['name','id']);
        
        $training_type = Training_Type::get();
        return \View('trainer.groupclass.index', compact('weekdays', 'training_type', 'trainng_class'));
    }


    public function createGroupClass()
    {
        $training_type = Training_Type::get();
        $weekdays = Weekday::get();

        return \View('trainer.groupclass.createclass', compact('training_type', 'weekdays'));
    }
    public function SaveClass(Request $request)
    {
        // dd($request->all());
        $randomString = Str::random(10);
        // $start_time = strtotime($request->start_time);
        // $end_time = strtotime($request->end_time);
        // $slot_duration = $end_time - $start_time;
        // $hours = floor($slot_duration / 60 / 60);
        // $minutes = floor($slot_duration / 60) - ($hours * 60);
        // $second = floor($slot_duration % 60);
        $class_url = 'https://appr.tc/r/' . $randomString;
        // $slot_duration = $hours . ":" . $minutes . ":" . $second;

        $user_id = Auth::id();
        $trainng_class = new Training_Class();
        $trainng_class->trainer_id = $user_id;
        $trainng_class->name = $request->class_name;
        $trainng_class->details = $request->class_desc;
        $trainng_class->type_id = $request->trainingtype;
        $trainng_class->live_url = $class_url;
        $trainng_class->save();


        foreach ($request->day as $key => $d) {
            $start_time = strtotime($request->start_time[$key]);
            $end_time = strtotime($request->end_time[$key]);
            $slot_duration = $end_time - $start_time;
            $hours = floor($slot_duration / 60 / 60);
            $minutes = floor($slot_duration / 60) - ($hours * 60);
            $second = floor($slot_duration % 60);
            $slot_duration = $hours . ":" . $minutes . ":" . $second;

            $training_slot = new Trainer_slot();
            $training_slot->trainer_id = $user_id;
            $training_slot->week_days_id = $d;
            $training_slot->slot_start = $start_time;
            $training_slot->slot_end = $end_time;
            $training_slot->training_class_id = $trainng_class->id;
            $training_slot->slot_duration = $slot_duration;
            $training_slot->save();
        }

        return \View('trainer.groupclass.index');
    }

    public function liveSession()
    {

        return \View('trainer.livesessiongroup.index');
    }
}
