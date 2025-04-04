<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationTestController extends Controller
{
    public function index()
    {
        return view('index');    
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email', 'tel1','tel2','tel3', 'address','building','select','content']);
        return view('confirm', compact('contact'));
    }

    public function thanks()
    {
        return view('thanks');    
    }

    public function admin()
    {
        return view('admin');    
    }

    
}
