<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Request as ModelsRequest;
use App\Models\Users_Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Stripe;

use function GuzzleHttp\Promise\all;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->package_id) {
            $package = Package::find($request->package_id)->toArray();
        } else {
            $package = collect([
                'price' => $request->price,
                'name' => 'Personal training'
            ]);
        }

        return \View('user.payment.index', compact('package'));
    }

    public function stripePost(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();

        if ($request->user_request_id) {
            $user_request = ModelsRequest::find($request->user_request_id);
        }
        Stripe\Stripe::setApiKey(Config::get('services.stripe.STRIPE_SECRET'));
        try {
            $stripe =  Stripe\Charge::create([
                "amount" => $request->ammount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Home fit life."
            ]);
            $payment = new Payment();
            $payment->user_id = $user->id;
            $payment->payment_id = $stripe->id;
            $payment->payment_response = $stripe->status;
            $payment->card_type = $stripe->payment_method_details->card->brand;
            $payment->save();

                

            if (isset($request->user_request_id)) {
                // product request 
                $user_request = ModelsRequest::find($request->user_request_id);
                $user_request->payment_id = $payment->id;
                $user_request->status = $stripe->status;
                $user_request->save();

                return redirect('user/payment')->with('success','Payment successful!');
            } else {
                $user_request = "";
                // user package booking 
                $user_booking = new Users_Booking();
                $user_booking->user_id = $user->id;
                $user_booking->package_id = $request->package_id;
                $user_booking->payment_id = $payment->id;
                $user_booking->save();
                return back()->with('success','Payment successful!');
            }
            Session::flash('success', 'Payment successful!');
            // return \View('user.payment.index', compact('user_request'));
            // return back()->with('success','Payment successful!');
        } catch (\Exception $e) {
            Session::flash('error', "Error! Please Try again.");
            return redirect('user/payment')->with('success','Payment successful!');
            // return back()->with('error', "Error! Please Try again.");
        }
    }
}
