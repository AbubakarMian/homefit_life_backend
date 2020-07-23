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
            return redirect('dashboard');
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
        return redirect('main');
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
        $count = Users::count('id');

        $modules[] = [
            'url' => 'user',
            'title' => 'User',
            'count' => $count
        ];


        $count = Product::count('id');

        $modules[] = [
            'url' => 'product',
            'title' => 'Products',
            'count' => $count
        ];
        $count = Package::count('id');

        $modules[] = [
            'url' => 'package',
            'title' => 'Packages',
            'count' => $count
        ];

        $count = Training_Type::count('id');

        $modules[] = [
            'url' => 'training_type',
            'title' => 'Training Type',
            'count' => $count
        ];
        $count = Nutritions::count('id');

        $modules[] = [
            'url' => 'nutritions',
            'title' => 'Nutritions',
            'count' => $count
        ];
        $count = Trainer::count('id');

        $modules[] = [
            'url' => 'trainer',
            'title' => 'Trainer',
            'count' => $count
        ];
//        $count = Food::count('id');
//
//        $modules[] = [
//            'url' => 'food',
//            'title' => 'Food',
//            'count' => $count
//        ];
//
//        $count = Food_Nutritions::count('id');
//
//        $modules[] = [
//            'url' => 'Food_Nutritions',
//            'title' => 'Food Nutritions',
//            'count' => $count
//        ];
//
//        $count = Food_Parameters::count('id');
//
//        $modules[] = [
//            'url' => 'food_parameters',
//            'title' => 'Food Parameters',
//            'count' => $count
//        ];

        $reports[] = [
            'url' => 'admin/reports/leads',
            'title' => 'Leads',
        ];

        $reports[] = [
            'url' => 'admin/reports/orders',
            'title' => 'Orders',
        ];

        $reports[] = [
            'url' => 'admin/reports/registered_students',
            'title' => 'Registered Students',
        ];

        $myvar = [];
        $myvar['modules'] = $modules;
        $myvar['reports'] = $reports;
        $myvar['chart'] = [];

        return $myvar;
    }
}
