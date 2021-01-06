<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Payment;
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
            $package = Package::find($request->package_id);
        } else {
            
        }

        return \View('user.payment.index', compact('package'));
    }

    public function stripePost(Request $request)
    {
        $user = Auth::user();

        // dd($request->ammount);
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
            Session::flash('success', 'Payment successful!');
            return Redirect::back();
        } catch (\Exception $e) {
            Session::flash('error', "Error! Please Try again.");
            return Redirect::back();
        }
    }

    
}
