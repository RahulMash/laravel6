<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajax;
use Illuminate\Support\Facades\Validator;

class AjaxCrudController extends Controller
{
    public function index()
    {
    //   

    //    dd($ajax);
        return view('ajaxcrud');
    }

    public function fetchajax()
    {
        $ajax =Ajax::latest()->get();
        return response()->json([
            'ajax'=>$ajax,
        ]);
    }

    public function edit($id)
    {
        $ajax = Ajax::find($id);

        if($ajax)
        {
            return response()->json([
                'status'=>200,
                'ajax'=>$ajax,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>"Data not found",
            ]);
        }
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:50',
            'email'=>'required|max:50',
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'message'=>$validator->messages(),
            ]);
        }
        else
        {   
            // $ajax = Ajax::find($id);
            $ajax =  Ajax::find($id);
            if($ajax)
            {
                $ajax->name = $request->input('name');
                $ajax->email = $request->input('email');
                $ajax->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Data Updated123',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'Data not found',
                ]);
            }
                
                
           
        }
    }

    public function store(Request $request){
        // dd($request);
       $ajax = new Ajax();
       $ajax->name = $request->input('name');
       $ajax->email = $request->input('email');
       $ajax->save();
    }

    public function delete($id)
    {  // dd(123);
        $ajax = Ajax::find($id);
        // dd($id);
        $ajax->delete();

        return response()->json([
            'status'=>200,
            'message'=>"Ajax deleted",
        ]);
    }
}
