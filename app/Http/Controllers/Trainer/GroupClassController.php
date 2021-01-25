<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Trainer_slot;
use App\Models\Training_Class;
use App\Models\Training_Type;
use App\Models\Weekday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupClassController extends Controller
{
    public function index()
    {

        return \View('trainer.groupclass.index');
    }


    public function createGroupClass()
    {
        $training_type = Training_Type::get();
        $weekdays = Weekday::get();

        return \View('trainer.groupclass.createclass', compact('training_type', 'weekdays'));
    }
    public function SaveClass(Request $request)
    {

        $start_time = strtotime($request->start_time);
        $end_time = strtotime($request->end_time);
        $slot_duration = $end_time - $start_time;
        $hours = floor($slot_duration / 60 / 60);
        $minutes = floor($slot_duration / 60) - ($hours * 60);
        $second = floor($slot_duration % 60);

        $slot_duration = $hours . ":" . $minutes . ":" . $second;

        $user_id = Auth::id();
        $trainng_class = new Training_Class();
        $trainng_class->trainer_id = $user_id;
        $trainng_class->name = $request->class_name;
        $trainng_class->details = $request->class_desc;
        $trainng_class->type_id = $request->trainingtype;
        $trainng_class->save();


        $training_slot = new Trainer_slot();
        $training_slot->trainer_id = $user_id;
        $training_slot->week_days_id = $request->day;
        $training_slot->slot_start = $start_time;
        $training_slot->slot_end = $end_time;
        $training_slot->training_class_id = $trainng_class->id;
        $training_slot->slot_duration = $slot_duration;
        $training_slot->save();

        return \View('trainer.groupclass.index');
    }
}
