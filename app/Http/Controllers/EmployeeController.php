<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function displayForm()
    {
        return view('employee.form');
    }

//     public function save(Request $request)
//     {
//         $emp_id=$request->input('id'),
//         $emp_name=$request->input('name'),
//         $emp_email=$request->input('email'),
//         $emp_designation=$request->input('designation'),
//         $emp_location=$request->input('location'),

        
//     }
 }
