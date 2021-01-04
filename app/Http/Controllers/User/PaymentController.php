<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        if ($request->package_id) {
            $package = Package::find($request->package_id);
        } else {
        }
        
        return \View('user.payment.index', compact('package'));
    }

}
