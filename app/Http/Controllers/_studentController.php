<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _studentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

}
