<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function show() 
    {
        $data=Student::all();
        //return view('record',['students'=>$data]);
        return view('record')->with('data',$data);

        //return $data[0]->fname;
        //return view('record');
    }
}
