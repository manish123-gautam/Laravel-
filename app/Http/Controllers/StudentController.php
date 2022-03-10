<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;    

class StudentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function student(Request $request)
    {      
            $stu = new Student;

            $stu->fname=$request->input('fname');
            $stu->lname=$request->input('lname');
            $stu->email=$request->input('email');
            $stu->dob=$request->input('dob');
            $stu->username=$request->input('username');
            $stu->password=$request->input('password');
            $stu->gender=$request->input('gender');
            $stu->age=$request->input('age');
            $stu->state=$request->input('state');
            $stu->city=$request->input('city');
            $stu->fee=$request->input('fee');
            $stu->branch=$request->input('branch');
            $stu->address=$request->input('address');
            $stu->save();
            return view("index");
    }
}
