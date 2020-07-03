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

//Route::get('user', 'Admin\UserController@index');
//Route::get('country', 'Admin\CountryController@index');
Route::get('user', 'Admin\UserController@index')->name('user.index');
//Route::get('user/create', 'Admin\UserController@create')->name('training_type.create');
//Route::post('user/save', 'Admin\UserController@save')->name('training_type.save');

//Route::get('user/edit/{id}','Admin\UserController@edit')->name('training_type.edit');
//Route::post('traiuserning_type/update/{id}','Admin\Training_TypeController@update')->name('training_type.update');
Route::post('user/delete/{id}','Admin\UserController@destroy_undestroy')->name('user.delete');

