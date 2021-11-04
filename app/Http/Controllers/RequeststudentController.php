<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequeststudentController extends Controller
{
    public function index()
    {
        return view('teacher.Requeststudent.index');
    }
}
