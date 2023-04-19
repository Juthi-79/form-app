<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    

    function emp(){
        $data=DB::table('EMP_PERSONAL')
        ->select('EMPNO', 'FIRST_NAME', 'DOB', 'AGE', 'WORKER_TYPE')
        ->get();
        return view('emp',['data'=>$data]);
    }

    public function edit($id){
         
    }

    public function add()
    {
        return view('add');
    }

    public function insert(Request $request)
    {
        $student = new Student();
        $student->id = $request->input('id');
        $student->name = $request->input('name');
        $student->father_name = $request->input('father_name');
        $student->mother_name = $request->input('mother_name');
        $student->location = $request->input('location');
        $student->save();
        return redirect('/')->with('status', "Inserted Successfully");
    }
    
}
