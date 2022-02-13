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
    Route::view("layout","layout");
    Route::view("view1","view1");

    // ajax code
   Route::get('ajax','AjaxCrudController@index');
   Route::get('fetch-ajax','AjaxCrudController@fetchajax');
   Route::post('/ajaxadd','AjaxCrudController@store');
   Route::get('edit-ajax/{id}','AjaxCrudController@edit');
   Route::put('/update-ajax/{id}','AjaxCrudController@update');
   Route::delete('delete-ajax/{id}','AjaxCrudController@delete');
// ajax code
// autocomplete rnd
//    Route::get('autocomplete','JqueryController@index');
   Route::view('j-q','jquery2');
   Route::view('font','font');
   Route::view('border-bottom','border-bottom');
   Route::view('aj','auto-jq');
   Route::view('auto2','autocomplete2');
   Route::view('jq3','jq3');
// autocomplete rnd

// jquery ajax crud practice
Route::get('practice','CrudPracticeController@index');
Route::post('/addpractice','CrudPracticeController@store');
Route::get('fetch-practice','CrudPracticeController@fetchPractice');
Route::delete('delete-practice/{id}','CrudPracticeController@delete');
Route::get('edit-practice/{id}','CrudPracticeController@edit');
Route::put('/update-practice/{id}','CrudPracticeController@update');
// 

// autocomplete
Route::get('/autocomplete', 'AutocompleteController@index');
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');


// 

// live search trial
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

// live search trial

// search practice
Route::get('/search','SearchController@index');
Route::post('/search_result','SearchController@search_result'); 
// 


