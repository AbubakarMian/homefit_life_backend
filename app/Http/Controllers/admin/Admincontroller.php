<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Product;
use App\Models\Trainer;
use App\Models\Training_Type;
use App\Models\Nutritions;
use App\Models\Users;
use App\Models\Food;
use App\Models\Food_Nutritions;
use App\Models\Food_Parameters;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class Admincontroller extends Controller
{
    function index()
    {
        return view('admin.login.login');
    }
    function checklogin(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password ' => 'required|alphaNum|min:3'
            ]);
        } catch (ValidationException $e) {
        }

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('admin_secure/dashboard');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function successlogin()
    {
        return view('dashboard');
    }

    function logout()
    {
        Auth::logout();
        return redirect('admin_secure/main');
    }
    function dashboard (){

        $admin_common = new \stdClass();
        $admin_dashboard = $this->admin_dashboard();

        $modules = $admin_dashboard['modules'];
        $reports = $admin_dashboard['reports'];

        $admin_common->id = '1';
        $admin_common->modules = $modules;
        $admin_common->reports = $reports;
        $admin_common->name = 'Admin';

//        dd($admin_common->modules);
        $chart = $admin_dashboard['chart'];

        session(['admin_common' => $admin_common]);
        return \View('layouts.default_dashboard',compact(
            'chart'));
    }
    public function admin_dashboard()
    {
        $count = Users::where('role_id',Config::get('constants.roles_id.user'))
                        ->count('id');

        $modules[] = [
            'url' => 'admin_secure/user',
            'title' => 'User',
            'count' => $count
        ];


        $count = Product::count('id');

        $modules[] = [
            'url' => 'admin_secure/product',
            'title' => 'Products',
            'count' => $count
        ];
        // $count = Package::count('id');

        // $modules[] = [
        //     'url' => 'package',
        //     'title' => 'Packages',
        //     'count' => $count
        // ];

        $count = Training_Type::count('id');

        $modules[] = [
            'url' => 'admin_secure/training_type',
            'title' => 'Training Type',
            'count' => $count
        ];
        $count = Nutritions::count('id');

        // $modules[] = [
        //     'url' => 'nutritions',
        //     'title' => 'Nutritions',
        //     'count' => $count
        // ];
        // $count = Trainer::count('id');

        $modules[] = [
            'url' => 'admin_secure/trainer',
            'title' => 'Trainer',
            'count' => $count
        ];

        $reports[] = [
            'url' => 'admin_secure/reports/leads',
            'title' => 'Leads',
        ];

        $reports[] = [
            'url' => 'admin_secure/reports/orders',
            'title' => 'Orders',
        ];

        $reports[] = [
            'url' => 'admin_secure/reports/registered_students',
            'title' => 'Registered Students',
        ];
$reports[] = [
            'url' => 'admin_secure/reports/group_session_payments',
            'title' => 'Group Session Payments',
        ];
$reports[] = [
            'url' => 'admin_secure/reports/personal_session_payments',
            'title' => 'Personal Session Payments',
        ];

        $myvar = [];
        $myvar['modules'] = $modules;
        $myvar['reports'] = $reports;
        $myvar['chart'] = [];

        return $myvar;
    }
}
