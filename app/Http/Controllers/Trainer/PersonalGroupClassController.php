<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Training_Class;
use App\Models\Training_Type;
use App\Models\Weekday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PersonalGroupClassController extends Controller
{
    public function createClass(){

        $training_type = Training_Type::get();
        $weekdays = Weekday::get();

        return \View('trainer.personalgroupclass.createclass',compact('training_type','weekdays'));
    }
    public function saveClass(Request $request){

        $randomString = Str::random(10);
        $class_url = 'https://appr.tc/r/' . $randomString;
        $trainer_id = Auth::id();
        $trainng_class = new Training_Class();
        $trainng_class->name = $request->class_name;
        $trainng_class->details = $request->class_desc;
        $trainng_class->live_url = $class_url;
        $trainng_class->is_personal = $request->personal_session;
        $trainng_class->trainer_id = $trainer_id;
        $trainng_class->save();
                                            
        return redirect('trainer/dashboard') ;
    }
}
