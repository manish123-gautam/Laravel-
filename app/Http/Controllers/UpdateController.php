<?php

namespace App\Http\Controllers;
 use App\Models\Student;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update($id)
    {
        $data=Student::find($id);
        return view('update')->with('data',$data);
        //return "Hello";
    }
    public function edit(Request $req)
    {
        $data=Student::find($req->id);
        //dd($req);
        $data->fname = $req->fname;
        $data->lname = $req->lname;
        $data->email = $req->email;
        $data->username = $req->username;
        $data->dob = $req->dob;
        $data->gender = $req->gender;
        $data->age = $req->age;
        $data->state = $req->state;
        $data->city = $req->city;
        $data->fee = $req->fee;
        $data->branch = $req->branch;
        $data->address = $req->address;
        $data->save();
        return redirect('record');   
        //$req->input();
    }
    public function delete($id)
    {
        $data=Student::find($id);
        $data->delete();
        return redirect('record');
    }
}
