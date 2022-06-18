<?php
use illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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
    Route::view("view2","laravel-temp.view2");
    Route::view("view1","laravel-temp.view1");

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

// test map api
Route::view('coordinate','coordinate');
// 

// 
Route::view('bold','bold-searched');
// 

// 
Route::view('header','header-sidebar.header');
Route::view('header2','header-sidebar.dropdown-button');
Route::view('side','header-sidebar.side-bar');
Route::view('content','header-sidebar.content');
Route::view('content2','header-sidebar.content2');
Route::view('table','header-sidebar.table');
Route::view('form','header-sidebar.form-ui');

//

// helper testing
Route::get('test','TestController@index');

// 

// email mailtrap
Route::get('mail', function()
{
    $data = ['name'=>'the test coder'];
    Mail::send('mail',$data , function ($msg){
        $msg->to('rahulpay006@gmail.com','Adavnce laravel feature')
            ->subject("Advance laravel Series");
    });
    echo "Mail Sent";
});
// 

// send email via gmail

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

// 


// test markdown
    // use App\Mail\SampleMail;
    // Route::get('markdown', function(){
    //     return new SampleMail();
    // });
// 

// simple mail without smtp
// Route::get('simple-mail', function(){
//     return Mail::to('rahulvermat006@gmail.com')->send('mail','text');
// });
// 

Route::view('wel-come','welcome')->name('jj');

// DOM PDF Start
Route::get('generate-pdf','PDFController@generatePDF');
// DOM PDF End
