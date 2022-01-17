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
    
   Route::get('ajax','AjaxCrudController@index');
   Route::get('fetch-ajax','AjaxCrudController@fetchajax');
   Route::post('/ajaxadd','AjaxCrudController@store');
   Route::get('edit-ajax/{id}','AjaxCrudController@edit');
   Route::put('/update-ajax/{id}','AjaxCrudController@update');
   Route::delete('delete-ajax/{id}','AjaxCrudController@delete');