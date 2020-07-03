<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Product;
use App\Models\Training_Type;
use App\Models\Users;
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
            'url' => 'users',
            'title' => 'USERS',
            'count' => $count
        ];


        $count = Product::count('id');

        $modules[] = [
            'url' => 'product',
            'title' => 'PRODUCTS',
            'count' => $count
        ];
        $count = Package::count('id');

        $modules[] = [
            'url' => 'package',
            'title' => 'PACKAGES',
            'count' => $count
        ];

        $count = Training_Type::count('id');

        $modules[] = [
            'url' => 'trainingtype',
            'title' => 'Training Type',
            'count' => $count
        ];

        $myvar = [];
        $myvar['modules'] = $modules;
        $myvar['reports'] = [];
        $myvar['chart'] = [];

        return $myvar;
    }
}
