<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListprojectController extends Controller
{
    public function index()
    {
        return view('teacher.Listproject.index');
    }
}
