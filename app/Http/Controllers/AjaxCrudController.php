<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajax;

class AjaxCrudController extends Controller
{
    public function index()
    {
    //    $ajax =Ajax::get();

    //    dd($ajax);
        return view('ajaxcrud');
    }

    public function store(Request $request){
        // dd($request);
       $ajax = new Ajax();
       $ajax->name = $request->input('name');
       $ajax->email = $request->input('email');
       $ajax->save();
    }
}
