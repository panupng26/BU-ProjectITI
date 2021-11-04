<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckpeperController extends Controller
{
    public function index()
    {
        return view('teacher.Checkpeperstudent.index');
    }
}
