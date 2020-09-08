<?php

use Illuminate\Support\Facades\Route;

//=================================================
//login

Route::get('admin_secure/login', 'Admin\AdminController@index')->name('login');
Route::post('admin_secure/checklogin', 'Admin\AdminController@checklogin');

Route::group(['middleware'=>'adminAuth','prefix' => 'admin_secure'], function(){
                Route::get('/', 'Admin\AdminController@dashboard');
            //=================================================
            //login
            Route::get('/uploadfile', 'UploadfileController@index');
            Route::post('/uploadfile', 'UploadfileController@upload');
           
           
            Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
            Route::get('logout', 'Admin\AdminController@logout');


            // ================================================
            // product

            //Route::get('user', 'Admin\productController@index');
            //Route::get('product/index', 'Admin\productController@index');
            Route::group(['prefix' => 'product'], function(){
                Route::get('/', 'Admin\productController@index')->name('product.index');
                Route::get('/create', 'Admin\productController@create')->name('product.create');
                Route::post('/save', 'Admin\productController@save')->name('product.save');
            });


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
            Route::get('get_training_type', 'Admin\Training_TypeController@get_training_type')->name('get_training_type.index');
            Route::post('update_trainer_training_type', 'Admin\Training_TypeController@update_trainer_training_type')->name('update_trainer_training_type.index');
            Route::get('training_type', 'Admin\Training_TypeController@index')->name('training_type.index');
            Route::get('training_type/create', 'Admin\Training_TypeController@create')->name('training_type.create');
            Route::post('training_type/save', 'Admin\Training_TypeController@save')->name('training_type.save');

            Route::get('training_type/edit/{id}','Admin\Training_TypeController@edit')->name('training_type.edit');
            Route::post('training_type/update/{id}','Admin\Training_TypeController@update')->name('training_type.update');
            Route::post('training_type/delete/{id}','Admin\Training_TypeController@destroy_undestroy')->name('training_type.delete');


            // ================================================
            // Users

            Route::get('user', 'Admin\UserController@index')->name('user.index');
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

            Route::get('reports/leads', 'Admin\Reports\LeadsController@index')->name('lead.index');
            Route::post('reports/leads', 'Admin\Reports\LeadsController@index')->name('lead.index');
            Route::post('excel', 'Admin\Reports\LeadsController@index_excel')->name('leads.excel');
            Route::post('leads/status_update/{id}','Admin\Reports\LeadsController@status_update')->name('leads.status_update');

            //=============================================================
            //orders
            Route::get('reports/orders', 'Admin\Reports\OrdersController@index')->name('orders.index');
            Route::post('reports/orders', 'Admin\Reports\OrdersController@index')->name('orders.index');
            Route::get('orders/excel', 'Admin\Reports\OrdersController@index_excel')->name('orders.excel');
            Route::post('reports/orders/status_update/{id}','Admin\Reports\OrdersController@status_update')->name('orders.status_update');

            //=============================================================
            //Regisered students

            Route::get('reports/registered_students', 'Admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
            Route::post('reports/registered_students', 'Admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
            Route::get('registered_students/excel', 'Admin\Reports\RegisterdStudentsController@index_excel')->name('registered_students.excel');
            Route::post('reports/registered_students/status_update/{id}','Admin\Reports\RegisterdStudentsController@status_update')->name('registered_students.status_update');


            Route::get('registered_students/export_excel', 'Admin\Reports\RegisterdStudentsController@excel')->name('registered_students.export_excel');

            //=============================================================
            //Group_Session_PaymentsController

            Route::get('reports/group_session_payments', 'Admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
            Route::post('reports/group_session_payments', 'Admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
            Route::get('group_session_payments/excel', 'Admin\Reports\Group_Session_PaymentsController@index_excel')->name('group_session_payments.excel');
            Route::post('reports/group_session_payments/status_update/{id}','Admin\Reports\Group_Session_PaymentsController@status_update')->name('group_session_payments.status_update');

            //=============================================================
            //Personal_Session_PaymentsController

            Route::get('reports/personal_session_payments', 'Admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
            Route::post('reports/personal_session_payments', 'Admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
            Route::get('personal_session_payments/excel', 'Admin\Reports\Personal_Session_PaymentsController@index_excel')->name('personal_session_payments.excel');
            Route::post('reports/personal_session_payments/status_update/{id}','Admin\Reports\Personal_Session_PaymentsController@status_update')
                                                                                                                    ->name('personal_session_payments.status_update');

});

//=============================================================
//user area



Route::get('user/login','User\UserController@login')->name('userlogin');
Route::get('user/register','User\userController@usercreate')->name('usercreate');
Route::get('userreset','User\userController@userreset')->name('userreset');
Route::post('user/checklogin','User\userController@checklogin')->name('checklogin');

Route::get('user/logout','User\UserController@logout')->name('logout');
Route::post('user/save','User\UserController@save')->name('save');



Route::group(['middleware'=>'userAuth','prefix'=>'user'],function(){

    Route::get('user','User\UserController@index')->name('user');
    Route::get('dashboard','User\UserController@userdashboard')->name('userdashboard');
    Route::get('profileedit','User\UserController@profileedit')->name('profileedit');
    Route::get('changepass','User\UserController@changepass')->name('changepass');
    Route::get('paymentinfo','User\UserController@paymentinfo')->name('paymentinfo');
    Route::get('payment','User\UserController@payment')->name('payment');
    Route::get('trainerrequest','User\UserController@trainerrequest')->name('trainerrequest');
    Route::get('trainer','User\UserController@trainer')->name('trainer');
    Route::get('profile','User\UserController@profile')->name('profile');
    Route::get('groupclass','User\UserController@groupclass')->name('groupclass');
    Route::get('categories','User\UserController@categories')->name('categories');
    Route::get('description','User\UserController@description')->name('description');
    Route::get('livesession','User\UserController@livesession')->name('livesession');
    Route::get('productcart','User\UserController@productcart')->name('productcart');
    Route::get('shippingform','User\UserController@shippingform')->name('shippingform');
    Route::get('paymentcard','User\UserController@paymentcard')->name('paymentcard');
    Route::get('freelivesession','User\UserController@freelivesession')->name('freelivesession');
    Route::get('productdetail','User\UserController@productdetail')->name('productdetail');
    Route::post('trainer_permission','User\UserController@trainer_permission')->name('trainer_permission');
    
});