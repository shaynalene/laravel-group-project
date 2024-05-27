<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _studentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    #another function in controller for create
    public function create()
    {
        return view('student.create');
    }

    #another function in controller for saveRecord 
    public function saveRecord(Request $request) 
    {
        #data out for dd 
        dd($request);
    }
}
