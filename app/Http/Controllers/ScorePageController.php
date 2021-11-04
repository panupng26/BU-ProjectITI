<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Auth;

class ScorePageController extends Controller
{
    public function index()
    {
        $student = Student::select("*")
                            ->where('users_id','=',Auth::user()->id)
                            ->get();
        return view('student.ScorePage.index',compact('student'));
    }
}
