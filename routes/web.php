<?php

use Illuminate\Support\Facades\Route;

//=================================================
//login

Route::group(['prefix' => 'admin_secure'], function(){
    Route::get('/', 'admin\AdminController@dashboard');
//=================================================
//login
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('login', 'admin\AdminController@index')->name('login');
Route::post('checklogin', 'admin\AdminController@checklogin');
Route::get('dashboard', 'admin\AdminController@dashboard')->name('dashboard');
Route::get('logout', 'admin\AdminController@logout');


// ================================================
// product

//Route::get('user', 'admin\productController@index');
//Route::get('product/index', 'admin\productController@index');
Route::get('product', 'admin\productController@index')->name('product.index');
Route::get('product/create', 'admin\productController@create')->name('product.create');
Route::post('product/save', 'admin\productController@save')->name('product.save');

Route::get('product/edit/{id}','admin\productController@edit')->name('product.edit');
Route::post('product/update/{id}','admin\productController@update')->name('product.update');
Route::post('product/delete/{id}','admin\productController@destroy_undestroy')->name('product.delete');

// ================================================
// Package

//Route::get('user', 'admin\UserController@index');
//Route::get('country', 'admin\CountryController@index');
Route::get('package', 'admin\PackageController@index')->name('package.index');
Route::get('package/create', 'admin\PackageController@create')->name('package.create');
Route::post('package/save', 'admin\PackageController@save')->name('package.save');

Route::get('package/edit/{id}','admin\PackageController@edit')->name('package.edit');
Route::post('package/update/{id}','admin\PackageController@update')->name('package.update');
Route::post('package/delete/{id}','admin\PackageController@destroy_undestroy')->name('package.delete');

// ================================================
// Training_Type

//Route::get('user', 'admin\UserController@index');
//Route::get('country', 'admin\CountryController@index');
Route::get('training_type', 'admin\Training_TypeController@index')->name('training_type.index');
Route::get('training_type/create', 'admin\Training_TypeController@create')->name('training_type.create');
Route::post('training_type/save', 'admin\Training_TypeController@save')->name('training_type.save');

Route::get('training_type/edit/{id}','admin\Training_TypeController@edit')->name('training_type.edit');
Route::post('training_type/update/{id}','admin\Training_TypeController@update')->name('training_type.update');
Route::post('training_type/delete/{id}','admin\Training_TypeController@destroy_undestroy')->name('training_type.delete');


// ================================================
// Users

Route::get('user', 'admin\UserController@index')->name('user.index');
Route::post('user/delete/{id}','admin\UserController.@destroy_undestroy')->name('user.delete');

// ================================================
// Food

//Route::get('user', 'admin\UserController@index');
//Route::get('country', 'admin\CountryController@index');
Route::get('food', 'admin\FoodController@index')->name('food.index');
Route::get('food/create', 'admin\FoodController@create')->name('food.create');
Route::post('food/save', 'admin\FoodController@save')->name('food.save');

Route::get('food/edit/{id}','admin\FoodController@edit')->name('food.edit');
Route::post('food/update/{id}','admin\FoodController@update')->name('food.update');
Route::post('food/delete/{id}','admin\FoodController@destroy_undestroy')->name('food.delete');

// ================================================
// Nutritions

//Route::get('user', 'admin\UserController@index');
//Route::get('country', 'admin\CountryController@index');
Route::get('nutritions', 'admin\NutritionsController@index')->name('nutritions.index');
Route::get('nutritions/create', 'admin\NutritionsController@create')->name('nutritions.create');
Route::post('nutritions/save', 'admin\NutritionsController@save')->name('nutritions.save');

Route::get('nutritions/edit/{id}','admin\NutritionsController@edit')->name('nutritions.edit');
Route::post('nutritions/update/{id}','admin\NutritionsController@update')->name('nutritions.update');
Route::post('nutritions/delete/{id}','admin\NutritionsController@destroy_undestroy')->name('nutritions.delete');

// ================================================
// Trainer

//Route::get('user', 'admin\UserController@index');
//Route::get('country', 'admin\CountryController@index');
Route::get('trainer', 'admin\TrainerController@index')->name('trainer.index');
Route::get('trainer/create', 'admin\TrainerController@create')->name('trainer.create');
Route::post('trainer/save', 'admin\TrainerController@save')->name('trainer.save');

Route::get('trainer/edit/{id}','admin\TrainerController@edit')->name('trainer.edit');
Route::post('trainer/update/{id}','admin\TrainerController@update')->name('trainer.update');
Route::post('trainer/delete/{id}','admin\TrainerController@destroy_undestroy')->name('trainer.delete');

Route::get('reports/leads', 'admin\Reports\LeadsController@index')->name('lead.index');
Route::post('reports/leads', 'admin\Reports\LeadsController@index')->name('lead.index');
Route::post('excel', 'admin\Reports\LeadsController@index_excel')->name('leads.excel');
Route::post('leads/status_update/{id}','admin\Reports\LeadsController@status_update')->name('leads.status_update');

//=============================================================
//orders
Route::get('reports/orders', 'admin\Reports\OrdersController@index')->name('orders.index');
Route::post('reports/orders', 'admin\Reports\OrdersController@index')->name('orders.index');
Route::post('orders/excel', 'admin\Reports\OrdersController@index_excel')->name('orders.excel');
Route::post('reports/orders/status_update/{id}','admin\Reports\OrdersController@status_update')->name('orders.status_update');

//=============================================================
//Regisered students

Route::get('reports/registered_students', 'admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
Route::post('reports/registered_students', 'admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
Route::post('registered_students/excel', 'admin\Reports\RegisterdStudentsController@index_excel')->name('registered_students.excel');
Route::post('reports/registered_students/status_update/{id}','admin\Reports\RegisterdStudentsController@status_update')->name('registered_students.status_update');

//=============================================================
//Group_Session_PaymentsController

Route::get('reports/group_session_payments', 'admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
Route::post('reports/group_session_payments', 'admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
Route::post('group_session_payments/excel', 'admin\Reports\Group_Session_PaymentsController@index_excel')->name('group_session_payments.excel');
Route::post('reports/group_session_payments/status_update/{id}','admin\Reports\Group_Session_PaymentsController@status_update')->name('group_session_payments.status_update');

//=============================================================
//Personal_Session_PaymentsController

Route::get('reports/personal_session_payments', 'admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
Route::post('reports/personal_session_payments', 'admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
Route::post('personal_session_payments/excel', 'admin\Reports\Personal_Session_PaymentsController@index_excel')->name('personal_session_payments.excel');
Route::post('reports/personal_session_payments/status_update/{id}','admin\Reports\Personal_Session_PaymentsController@status_update')
                                                                                                        ->name('personal_session_payments.status_update');

});

//=============================================================
//user area
Route::get('user','userController@user')->name('user');
Route::get('userlogin','userController@userlogin')->name('userlogin');
Route::get('userreset','userController@userreset')->name('userreset');
Route::get('usercreate','userController@usercreate')->name('usercreate');
Route::get('userdashboard','userController@userdashboard')->name('userdashboard');
Route::get('profileedit','userController@profileedit')->name('profileedit');
Route::get('changepass','userController@changepass')->name('changepass');
Route::get('paymentinfo','userController@paymentinfo')->name('paymentinfo');
Route::get('payment','userController@payment')->name('payment');
Route::get('trainerrequest','userController@trainerrequest')->name('trainerrequest');
Route::get('trainer','userController@trainer')->name('trainer');
Route::get('profile','userController@profile')->name('profile');
Route::get('groupclass','userController@groupclass')->name('groupclass');
Route::get('categories','userController@categories')->name('categories');
Route::get('description','userController@description')->name('description');
Route::get('livesession','userController@livesession')->name('livesession');
Route::get('productcart','userController@productcart')->name('productcart');
Route::get('shippingform','userController@shippingform')->name('shippingform');
Route::get('paymentcard','userController@paymentcard')->name('paymentcard');
Route::get('freelivesession','userController@freelivesession')->name('freelivesession');
Route::get('productdetail','userController@productdetail')->name('productdetail');
