<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ClassConduct;
use App\Models\Trainer_slot;
use App\Models\Training_Class;
use App\Models\Training_Class_Users;
use App\Models\Weekday;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{


    public function index(Request $request)
    {
        $today = Carbon::today()->format('l');

        $user_id = Auth::id();
        $week_day = Weekday::where('name', 'like', '%' . $today . '%')->first();
        $user_slot = Trainer_slot::where('week_days_id', $week_day->id)->with('training_class.training_class_user')->get();

        dd($user_slot);
        $trainingclass_user = Training_Class_Users::whereHas('trainingclass', function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->class_name . '%');
            if ($request->is_personal) {
                $q->where('is_personal', $request->is_personal);
            }
        })
            ->with('trainingclass.trainer', 'package')->where('user_id', $user_id)->get();

        return \View('user.schedulereports.index', compact('trainingclass_user'));
    }

    public function updateUserSession(Request $request)
    {

        $user_session = Training_Class_Users::where('user_id', $request->user_id)
            ->where('package_id', $request->package_id)
            ->where('training_class_id', $request->training_class_id)
            ->first();
        $user_session->session_left = $user_session->session_left - 1;
        $user_session->save();

        $class_conduct = new ClassConduct();
        $class_conduct->training_class_user_id = $user_session;
        $class_conduct->training_class_user_id = $user_session;
        $class_conduct->save();

        return response()->json([
            'status' =>  true,
            'data' => $user_session,
        ]);
    }
}
