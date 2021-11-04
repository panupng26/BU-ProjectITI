<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTestController extends Controller
{
    public function index(){
        return view('student.RequestTest.index');
    }
}
