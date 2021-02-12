<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Training_Class_Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{


    public function index(Request $request)
    {

        $trainer_id = '';
        
        $user_id = Auth::id();
        $trainingclass_user = Training_Class_Users::with('trainingclass.trainer', 'package')->where('user_id', $user_id)->get();

        // dd($trainingclass_user);

        return \View('user.myschedule.index', compact('trainingclass_user'));
    }
}
