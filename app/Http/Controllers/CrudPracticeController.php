<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajax;
use Illuminate\Support\Facades\Validator;
class CrudPracticeController extends Controller
{
    //

    public function index()
    {
        return view('practice');
    }

    public function fetchPractice()
    {
        $ajaxGet = Ajax::latest()->get();
        return response()->json([
            'ajax'=>$ajaxGet,
        ]);
    }

    public function store(Request $request)
     {  //dd(789);
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:50',
            'email'=>'required|max:50',
        ],[
            'name.required'=>'Name is Required',
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
            $ajax = Ajax::create($request->all());
            if($ajax)
            {
                return response()->json([
                    'status'=>200,
                    'message'=>'Data Saved'
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

    public function delete($id)
    {
       $ajax =Ajax::find($id);
       $ajax->delete();

       return response()->json([
           'status'=>200,
           'message'=>'Data Removed'
       ]);
    }

    public function edit($id)
    {
        $ajax = Ajax::find($id);
        if(!empty($ajax))
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
                'message'=>'Data Not Found',
            ]);
        }
    }

    public function update(Request $request,$id)
    {   
        $validator = Validator::make($request->all(),[
            'edit_name'=>'required|max:50',
            'edit_email'=>'required|max:50',
        ],[
            'edit_name.required'=>'Name is required',
            'edit_email.required'=>"Email is required",
        ]);


        if($validator->fails())
        { //dd(123);
            return response()->json([
                'status'=>400,
                'message'=>$validator->messages(),
            ]);
        }
        else
        {
            $all =$request->all();
            $ajax =  Ajax::find($id);

            if($ajax)
            {
                $ajax->name = $request->edit_name;
                $ajax->email = $request->edit_email;
                $ajax->save();

                return response()->json([
                    'status'=>200,
                    'message'=>"done",
                ]);
            }
            else
            {   
                return response()->json([
                    'status'=>404,
                    'message'=>"fail",
                ]);
            }

        }
        
        // dd($ajax);

        
    }
}
