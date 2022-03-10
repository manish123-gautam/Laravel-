<?php

namespace App\Http\Controllers;
use\App\Models\StateModel;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function state()
    {
        return view('state');
    }

    public function addstate(Request $request)
    {
        $req =new State;
        $req->state = $request->input('state');
        $req.save();
        return redirect("state");
    }
}
