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
//Route::get('product/create', 'Admin\productController@create')->name('product.create');
//Route::post('product/save', 'Admin\productController@save')->name('product.save');
//
//Route::get('product/edit/{id}','Admin\productController@edit')->name('product.edit');
//Route::post('product/update/{id}','Admin\productController@update')->name('product.update');
//Route::post('product/delete/{id}','Admin\productController@destroy_undestroy')->name('product.delete');