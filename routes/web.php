<?php

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
// Route::group( ['prefix' => 'zcas'] , function(){

    Route::get('/', function () {
        return view('welcome');
    });
    
    // Route::get('test','TestController@index')->name('tested');
    // Route::view('user','users');
    // Route::view('company','company');
    // Route::get('company-show','TestController@show');



Route::resource('ajax-crud','AjaxesCrudController');