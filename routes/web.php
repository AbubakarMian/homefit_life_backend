<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//=================================================
//login

Route::group(['prefix' => '/'], function(){
    Route::get('/', 'Admin\AdminController@dashboard');

    Route::group(['prefix' => 'product'], function() {
        Route::get('/', 'Admin\UsersController@view');

    });
});
//=================================================
//login
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('login', 'Admin\AdminController@index')->name('login');
Route::post('checklogin', 'Admin\AdminController@checklogin');
Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
Route::get('logout', 'Admin\AdminController@logout');


// ================================================
// product

//Route::get('user', 'Admin\productController@index');
//Route::get('product/index', 'Admin\productController@index');
Route::get('product', 'Admin\productController@index')->name('product.index');
Route::get('product/create', 'Admin\productController@create')->name('product.create');
Route::post('product/save', 'Admin\productController@save')->name('product.save');

Route::get('product/edit/{id}','Admin\productController@edit')->name('product.edit');
Route::post('product/update/{id}','Admin\productController@update')->name('product.update');
Route::post('product/delete/{id}','Admin\productController@destroy_undestroy')->name('product.delete');

// ================================================
// Package

//Route::get('user', 'Admin\UserController@index');
//Route::get('country', 'Admin\CountryController@index');
Route::get('package', 'Admin\PackageController@index')->name('package.index');
Route::get('package/create', 'Admin\PackageController@create')->name('package.create');
Route::post('package/save', 'Admin\PackageController@save')->name('package.save');

Route::get('package/edit/{id}','Admin\PackageController@edit')->name('package.edit');
Route::post('package/update/{id}','Admin\PackageController@update')->name('package.update');
Route::post('package/delete/{id}','Admin\PackageController@destroy_undestroy')->name('package.delete');

// ================================================
// Training_Type

//Route::get('user', 'Admin\UserController@index');
//Route::get('country', 'Admin\CountryController@index');
Route::get('training_type', 'Admin\Training_TypeController@index')->name('training_type.index');
Route::get('training_type/create', 'Admin\Training_TypeController@create')->name('training_type.create');
Route::post('training_type/save', 'Admin\Training_TypeController@save')->name('training_type.save');

Route::get('training_type/edit/{id}','Admin\Training_TypeController@edit')->name('training_type.edit');
Route::post('training_type/update/{id}','Admin\Training_TypeController@update')->name('training_type.update');
Route::post('training_type/delete/{id}','Admin\Training_TypeController@destroy_undestroy')->name('training_type.delete');


// ================================================
// Users


Route::get('user', 'Admin\UserController@index')->name('user.index');
// Route::get('user/create', 'Admin\UserController@create')->name('user.create');
// Route::post('user/save', 'Admin\UserController@save')->name('user.save');

// Route::get('user/edit/{id}','Admin\UserController@edit')->name('user.edit');
// Route::post('user/update/{id}','Admin\UserController@update')->name('user.update');
Route::post('user/delete/{id}','Admin\UserController.@destroy_undestroy')->name('user.delete');

// ================================================
// Food

//Route::get('user', 'Admin\UserController@index');
//Route::get('country', 'Admin\CountryController@index');
Route::get('food', 'Admin\FoodController@index')->name('food.index');
Route::get('food/create', 'Admin\FoodController@create')->name('food.create');
Route::post('food/save', 'Admin\FoodController@save')->name('food.save');

Route::get('food/edit/{id}','Admin\FoodController@edit')->name('food.edit');
Route::post('food/update/{id}','Admin\FoodController@update')->name('food.update');
Route::post('food/delete/{id}','Admin\FoodController@destroy_undestroy')->name('food.delete');



// ================================================
// Nutritions

//Route::get('user', 'Admin\UserController@index');
//Route::get('country', 'Admin\CountryController@index');
Route::get('nutritions', 'Admin\NutritionsController@index')->name('nutritions.index');
Route::get('nutritions/create', 'Admin\NutritionsController@create')->name('nutritions.create');
Route::post('nutritions/save', 'Admin\NutritionsController@save')->name('nutritions.save');

Route::get('nutritions/edit/{id}','Admin\NutritionsController@edit')->name('nutritions.edit');
Route::post('nutritions/update/{id}','Admin\NutritionsController@update')->name('nutritions.update');
Route::post('nutritions/delete/{id}','Admin\NutritionsController@destroy_undestroy')->name('nutritions.delete');


// ================================================
// Trainer

//Route::get('user', 'Admin\UserController@index');
//Route::get('country', 'Admin\CountryController@index');
Route::get('trainer', 'Admin\TrainerController@index')->name('trainer.index');
Route::get('trainer/create', 'Admin\TrainerController@create')->name('trainer.create');
Route::post('trainer/save', 'Admin\TrainerController@save')->name('trainer.save');

Route::get('trainer/edit/{id}','Admin\TrainerController@edit')->name('trainer.edit');
Route::post('trainer/update/{id}','Admin\TrainerController@update')->name('trainer.update');
Route::post('trainer/delete/{id}','Admin\TrainerController@destroy_undestroy')->name('trainer.delete');



//=============================================================
//Reports
//=============================================================

//=============================================================
//lead


Route::get('admin/reports/leads', 'Admin\Reports\LeadsController@index')->name('lead.index');
Route::post('admin/reports/leads', 'Admin\Reports\LeadsController@index')->name('lead.index');
Route::post('excel', 'Admin\Reports\LeadsController@index_excel')->name('leads.excel');
Route::post('leads/status_update/{id}','Admin\Reports\LeadsController@status_update')->name('leads.status_update');


//=============================================================
//orders
Route::get('admin/reports/orders', 'Admin\Reports\OrdersController@index')->name('orders.index');
Route::post('admin/reports/orders', 'Admin\Reports\OrdersController@index')->name('orders.index');
Route::post('orders/excel', 'Admin\Reports\OrdersController@index_excel')->name('orders.excel');
Route::post('admin/reports/orders/status_update/{id}','Admin\Reports\OrdersController@status_update')->name('orders.status_update');

//=============================================================
//Regisered students

Route::get('admin/reports/registered_students', 'Admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
Route::post('admin/reports/registered_students', 'Admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
Route::post('registered_students/excel', 'Admin\Reports\RegisterdStudentsController@index_excel')->name('registered_students.excel');
Route::post('admin/reports/registered_students/status_update/{id}','Admin\Reports\RegisterdStudentsController@status_update')->name('registered_students.status_update');




//=============================================================
//Group_Session_PaymentsController

Route::get('admin/reports/group_session_payments', 'Admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
Route::post('admin/reports/group_session_payments', 'Admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
Route::post('group_session_payments/excel', 'Admin\Reports\Group_Session_PaymentsController@index_excel')->name('group_session_payments.excel');
Route::post('admin/reports/group_session_payments/status_update/{id}','Admin\Reports\Group_Session_PaymentsController@status_update')->name('group_session_payments.status_update');





//=============================================================
//Personal_Session_PaymentsController

Route::get('admin/reports/personal_session_payments', 'Admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
Route::post('admin/reports/personal_session_payments', 'Admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
Route::post('personal_session_payments/excel', 'Admin\Reports\Personal_Session_PaymentsController@index_excel')->name('personal_session_payments.excel');
Route::post('admin/reports/personal_session_payments/status_update/{id}','Admin\Reports\Personal_Session_PaymentsController@status_update')->name('personal_session_payments.status_update');

