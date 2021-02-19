<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

//=================================================
//login




Route::get('admin/login', 'admin\Admincontroller@index')->name('login');
Route::post('admin/checklogin', 'admin\Admincontroller@checklogin');

Route::group(['middleware' => 'adminAuth', 'prefix' => 'admin'], function () {
    Route::get('/', 'admin\Admincontroller@dashboard');
    //=================================================
    //login
    Route::get('/uploadfile', 'UploadfileController@index');
    Route::post('/uploadfile', 'UploadfileController@upload');


    Route::get('dashboard', 'admin\Admincontroller@dashboard')->name('dashboard');
    Route::get('logout', 'admin\Admincontroller@logout');


    // ================================================
    // product

    //Route::get('user', 'admin\ProductController@index');
    //Route::get('product/index', 'admin\ProductController@index');
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'admin\ProductController@index')->name('product.index');
        Route::get('/create', 'admin\ProductController@create')->name('product.create');
        Route::post('/save', 'admin\ProductController@save')->name('product.save');
    });


    Route::get('product/edit/{id}', 'admin\ProductController@edit')->name('product.edit');
    Route::post('product/update/{id}', 'admin\ProductController@update')->name('product.update');
    Route::post('product/delete/{id}', 'admin\ProductController@destroy_undestroy')->name('product.delete');

    // ================================================
    // Package

    //Route::get('user', 'admin\UserController@index');
    //Route::get('country', 'admin\CountryController@index');
    Route::get('package', 'admin\PackageController@index')->name('package.index');
    Route::get('package/create', 'admin\PackageController@create')->name('package.create');
    Route::post('package/save', 'admin\PackageController@save')->name('package.save');

    Route::get('package/edit/{id}', 'admin\PackageController@edit')->name('package.edit');
    Route::post('package/update/{id}', 'admin\PackageController@update')->name('package.update');
    Route::post('package/delete/{id}', 'admin\PackageController@destroy_undestroy')->name('package.delete');

    // ================================================
    // Training_Type

    //Route::get('user', 'admin\UserController@index');
    //Route::get('country', 'admin\CountryController@index');
    Route::get('get_training_type', 'admin\Training_TypeController@get_training_type')->name('get_training_type.index');
    Route::post('update_trainer_training_type', 'admin\Training_TypeController@update_trainer_training_type')->name('update_trainer_training_type.index');
    Route::get('training_type', 'admin\Training_TypeController@index')->name('training_type.index');
    Route::get('training_type/create', 'admin\Training_TypeController@create')->name('training_type.create');
    Route::post('training_type/save', 'admin\Training_TypeController@save')->name('training_type.save');

    Route::get('training_type/edit/{id}', 'admin\Training_TypeController@edit')->name('training_type.edit');
    Route::post('training_type/update/{id}', 'admin\Training_TypeController@update')->name('training_type.update');
    Route::post('training_type/delete/{id}', 'admin\Training_TypeController@destroy_undestroy')->name('training_type.delete');


    // ================================================
    // Users

    Route::get('user', 'admin\UserController@index')->name('user.index');
    Route::post('user/delete/{id}', 'admin\UserController.@destroy_undestroy')->name('user.delete');


    // ================================================
    // Food

    //Route::get('user', 'admin\UserController@index');
    //Route::get('country', 'admin\CountryController@index');
    Route::get('food', 'admin\FoodController@index')->name('food.index');
    Route::get('food/create', 'admin\FoodController@create')->name('food.create');
    Route::post('food/save', 'admin\FoodController@save')->name('food.save');

    Route::get('food/edit/{id}', 'admin\FoodController@edit')->name('food.edit');
    Route::post('food/update/{id}', 'admin\FoodController@update')->name('food.update');
    Route::post('food/delete/{id}', 'admin\FoodController@destroy_undestroy')->name('food.delete');

    // ================================================
    // Nutritions

    //Route::get('user', 'admin\UserController@index');
    //Route::get('country', 'admin\CountryController@index');
    Route::get('nutritions', 'admin\NutritionsController@index')->name('nutritions.index');
    Route::get('nutritions/create', 'admin\NutritionsController@create')->name('nutritions.create');
    Route::post('nutritions/save', 'admin\NutritionsController@save')->name('nutritions.save');

    Route::get('nutritions/edit/{id}', 'admin\NutritionsController@edit')->name('nutritions.edit');
    Route::post('nutritions/update/{id}', 'admin\NutritionsController@update')->name('nutritions.update');
    Route::post('nutritions/delete/{id}', 'admin\NutritionsController@destroy_undestroy')->name('nutritions.delete');

    // ================================================
    // Trainer

    //Route::get('user', 'admin\UserController@index');
    //Route::get('country', 'admin\CountryController@index');
    Route::get('trainer', 'admin\TrainerController@index')->name('trainer.index');
    Route::get('trainer/create', 'admin\TrainerController@create')->name('trainer.create');
    Route::post('trainer/save', 'admin\TrainerController@save')->name('trainer.save');

    Route::get('trainer/edit/{id}', 'admin\TrainerController@edit')->name('trainer.edit');
    Route::post('trainer/update/{id}', 'admin\TrainerController@update')->name('trainer.update');
    Route::post('trainer/delete/{id}', 'admin\TrainerController@destroy_undestroy')->name('trainer.delete');

    Route::get('reports/leads', 'admin\Reports\LeadsController@index')->name('lead.index');
    Route::post('reports/leads', 'admin\Reports\LeadsController@index')->name('lead.index');
    Route::post('excel', 'admin\Reports\LeadsController@index_excel')->name('leads.excel');
    Route::post('leads/status_update/{id}', 'admin\Reports\LeadsController@status_update')->name('leads.status_update');

    //=============================================================
    //orders
    Route::get('reports/orders', 'admin\Reports\OrdersController@index')->name('orders.index');
    Route::post('reports/orders', 'admin\Reports\OrdersController@index')->name('orders.index');
    Route::get('orders/excel', 'admin\Reports\OrdersController@index_excel')->name('orders.excel');
    Route::post('reports/orders/status_update/{id}', 'admin\Reports\OrdersController@status_update')->name('orders.status_update');

    //=============================================================
    //Regisered students

    Route::get('reports/registered_students', 'admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
    Route::post('reports/registered_students', 'admin\Reports\RegisterdStudentsController@index')->name('registered_students.index');
    Route::get('registered_students/excel', 'admin\Reports\RegisterdStudentsController@index_excel')->name('registered_students.excel');
    Route::post('reports/registered_students/status_update/{id}', 'admin\Reports\RegisterdStudentsController@status_update')->name('registered_students.status_update');


    Route::get('registered_students/export_excel', 'admin\Reports\RegisterdStudentsController@excel')->name('registered_students.export_excel');

    //=============================================================
    //Group_Session_PaymentsController

    Route::get('reports/group_session_payments', 'admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
    Route::post('reports/group_session_payments', 'admin\Reports\Group_Session_PaymentsController@index')->name('group_session_payments.index');
    Route::get('group_session_payments/excel', 'admin\Reports\Group_Session_PaymentsController@index_excel')->name('group_session_payments.excel');
    Route::post('reports/group_session_payments/status_update/{id}', 'admin\Reports\Group_Session_PaymentsController@status_update')->name('group_session_payments.status_update');

    //=============================================================
    //Personal_Session_PaymentsController

    Route::get('reports/personal_session_payments', 'admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
    Route::post('reports/personal_session_payments', 'admin\Reports\Personal_Session_PaymentsController@index')->name('personal_session_payments.index');
    Route::get('personal_session_payments/excel', 'admin\Reports\Personal_Session_PaymentsController@index_excel')->name('personal_session_payments.excel');
    Route::post('reports/personal_session_payments/status_update/{id}', 'admin\Reports\Personal_Session_PaymentsController@status_update')
        ->name('personal_session_payments.status_update');
});

//=============================================================
//user route

Route::get('user/login', 'User\UserController@login')->name('userlogin');
Route::get('user/register', 'User\UserController@usercreate')->name('usercreate');
Route::get('userreset', 'User\UserController@userreset')->name('userreset');
Route::post('user/checklogin', 'User\UserController@checklogin')->name('checklogin');

Route::get('user/logout', 'User\UserController@logout')->name('logout');
Route::post('user/save', 'User\UserController@save')->name('save');
// Route::get('/user/shedulereport', 'User\UserController@shedulereport');
// ------------User Route start----------------- 

Route::group(['middleware' => 'userAuth', 'prefix' => 'user'], function () {

    //=============================================================
    // payment route 
    Route::get('stripe', 'User\PaymentController@stripe');
    Route::post('stripe', 'User\PaymentController@stripePost')->name('stripe.post');


    Route::get('user', 'User\UserController@index')->name('user');

    Route::match(['get', 'post'], 'dashboard', 'User\UserController@userdashboard')->name('userdashboard');

    Route::get('profileedit', 'User\UserController@profileedit')->name('profileedit');
    Route::get('changepass', 'User\UserController@changepass')->name('changepass');

    Route::get('paymentinfo', 'User\UserController@paymentinfo')->name('paymentinfo');
    // Route::get('payment', 'User\UserController@payment')->name('payment');
    Route::get('trainerrequest', 'User\UserController@trainerrequest')->name('trainerrequest');
    // Route::get('trainer', 'User\TrainerController@trainer')->name('trainer');


    Route::get('description', 'User\UserController@description')->name('description');
    Route::get('livesession', 'User\UserController@livesession')->name('livesession');

    Route::get('shippingform', 'User\UserController@shippingform')->name('shippingform');
    Route::get('paymentcard', 'User\UserController@paymentcard')->name('paymentcard');
    Route::get('freelivesession', 'User\UserController@freelivesession')->name('freelivesession');

    Route::post('trainer_permission', 'User\UserController@trainer_permission')->name('trainer_permission');



    //=============================================================
    //user trainer module route

    Route::match(['get', 'post'], 'trainer', 'User\TrainerController@index')->name('index');
    Route::post('trainer/advanceSearch', 'User\TrainerController@advanceSearch')->name('trainer.advanceSearch');
    Route::post('trainer/sortByGroupClass', 'User\TrainerController@sortByGroupClass')->name('trainer.sortByGroupClass');

    Route::get('trainerclassprofile', 'User\TrainerController@trainerclassprofile')->name('trainerclassprofile'); //trainer class detail  

    Route::post('update_profile', 'User\UserController@update_profile')->name('update_profile');

    Route::get('trainer/profile/{id}', 'User\UserController@trainerprofile')->name('trainer.profile');

    //=============================================================
    // training category 


    Route::get('categories', 'User\CategoryController@index')->name('categories');

    //=============================================================
    // Store route  

    Route::get('store', 'User\StoreController@index')->name('store');
    Route::post('searchProduct', 'User\StoreController@searchProduct')->name('searchProduct');
    Route::get('productdetail', 'User\StoreController@productdetail')->name('productdetail');
    Route::post('addCart', 'User\StoreController@addCart')->name('addCart');
    Route::get('remove_cart_product', 'User\StoreController@remove_cart_product')->name('remove_cart_product');
    Route::get('productcart', 'User\StoreController@productcart')->name('productcart');
    Route::post('saveshippingInfo', 'User\StoreController@saveshippingInfo')->name('saveshippingInfo');
    Route::get('shippingInfo', 'User\StoreController@shippingInfo')->name('shoppingInfo');

    // ============================================================
    // Group classes

    Route::get('grouplivesession', 'User\GroupClassController@groupClassLiveSession')->name('grouplivesession');
    Route::get('groupclass', 'User\GroupClassController@index')->name('groupclass');
    Route::get('groupclass/group_desc', 'User\GroupClassController@group_desc')->name('groupclass.full_desc');

    // ============================================================
    // payment route 

    Route::get('payment', 'User\PaymentController@index')->name('payment');
    // ============================================================
    // nutrition calculator route 

    Route::get('nutrition', 'User\NutritionController@index')->name('nutrition');
    Route::post('addgoal', 'User\NutritionController@addgoal')->name('addgoal');
    Route::post('addmeal', 'User\NutritionController@addmeal')->name('addmeal');
    Route::post('nutritionCal', 'User\NutritionController@nutritionCalculator')->name('nutritionCal');

    Route::get('nutritiondailygoalmonthly/{month_id}', 'User\UserController@nutritionDailyGoalMonthly')->name('nutritionDailyGoalMonthly');
    Route::get('gettotalconsumenutritions', 'User\UserController@getTotalConsumeNutritions')->name('gettotalconsumenutritions');


    // ============================================================
    // user Scheduler route 

    Route::get('myshedule', 'User\ScheduleController@index')->name('myshedule');
    Route::post('searchshedule', 'User\ScheduleController@index')->name('searchshedule');

    // ============================================================
    // update user Session route 

    Route::post('updateUserSession', 'User\ScheduleController@updateUserSession')->name('updateUserSession');
});

// add session 
Route::get('user/addsession', 'User\GroupClassController@addSessions')->name('user.addsession');



// ------------Trainer Route start----------------- 

Route::get('trainer/login', 'Trainer\TrainerController@login')->name('trainerlogin');
Route::get('trainerreset', 'Trainer\TrainerController@userreset')->name('userreset');
Route::post('trainer/checklogin', 'Trainer\TrainerController@checklogin')->name('trainer.checklogin');
Route::post('forgetpwd', 'Trainer\TrainerController@forgetpwd')->name('forgetpwd');
Route::get('trainer/logout', 'Trainer\TrainerController@logout')->name('logout');


Route::group(['middleware' => 'trainerAuth', 'prefix' => 'trainer'], function () {

    // trainer profile route
    Route::get('profile', 'Trainer\TrainerController@profile')->name('trainer.profile');
    Route::post('updateprofile', 'Trainer\TrainerController@saveProfile')->name('trainer.updateprofile');

    Route::get('dashboard', 'Trainer\TrainerController@dashboard')->name('trainer.dashboard');
    Route::get('myclass', 'Trainer\TrainerController@myClass')->name('trainer.myclass');
    // Route::get('trainer/livesession', 'Trainer\TrainerController@liveSession')->name('trainer.myclass');

    Route::get('groupclass', 'Trainer\GroupClassController@index')->name('trainer.groupclass');
    Route::get('createclass', 'Trainer\GroupClassController@createGroupClass')->name('trainer.createclass');
    Route::post('saveclass', 'Trainer\GroupClassController@SaveClass')->name('trainer.saveclass');
    Route::post('searchgroupclass', 'Trainer\GroupClassController@index')->name('trainer.searchgroupclass');

    Route::get('liveSession', 'Trainer\GroupClassController@liveSession')->name('trainer.liveSession');
    Route::get('classdetail', 'Trainer\GroupClassController@classDetail')->name('trainer.classdetail');
    Route::get('recomproduct', 'Trainer\TrainerController@recomendedProduct')->name('trainer.recomproduct');


    Route::get('createpersonalclass', 'Trainer\PersonalGroupClassController@createClass')->name('trainer.createpersonalclass');
    Route::post('savepersonalclass', 'Trainer\PersonalGroupClassController@saveClass')->name('trainer.savepersonalclass');

    //payment session
    Route::get('paymentSession', 'Trainer\SessionController@paymentSession')->name('trainer.paymentSession');
    Route::post('searchsessionpayment', 'Trainer\SessionController@paymentSession')->name('trainer.searchsessionpayment');
});
