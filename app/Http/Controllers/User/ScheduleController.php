<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Training_Class;
use App\Models\Training_Class_Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{


    public function index(Request $request)
    {
        // dd($request->all());
        $user_id = Auth::id();
        $trainingclass_user = Training_Class_Users::whereHas('trainingclass', function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->class_name . '%');
            if ($request->is_personal) {
                $q->where('is_personal', $request->is_personal );
            }
        })
            ->with('trainingclass.trainer', 'package')->where('user_id', $user_id)->get();

        // dd($trainingclass_user);

        return \View('user.schedulereports.index', compact('trainingclass_user'));
    }

   
}
