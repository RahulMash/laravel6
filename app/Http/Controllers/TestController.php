<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        dd(123);
    }

    public function show(){
        return redirect()->route('tested');
    }
}
