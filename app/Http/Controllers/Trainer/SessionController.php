<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Training_Type;
use App\Models\Users_Booking;
use App\Models\Weekday;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function paymentSession(Request $request)
    {
        // dd($request->all());
        $weekdays = Weekday::get(['name', 'id']);
        $training_type = Training_Type::get();
        $user_booking = Users_Booking::whereHas('trainingclass.trainer_type')
            ->with('trainingclass.trainer_type', 'payment', 'package', 'user')
            ->paginate(10);

        return \View('trainer.sessionpayment.index', compact('training_type', 'weekdays', 'user_booking'));
    }
}
