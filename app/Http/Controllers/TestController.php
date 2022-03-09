<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        test();
        
    }

    public function show(){
        return redirect()->route('tested');
    }

    
}
