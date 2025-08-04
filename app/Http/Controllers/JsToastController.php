<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsToastController extends Controller
{
    public function viewPage(){       
        return view('notification');
    }
    public function store(Request $request){
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
