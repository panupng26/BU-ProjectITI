<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Googledrivepeper;
class ExamprojectController extends Controller
{
    public function index()
    {
        $linkgoogle = Googledrivepeper::all();
        return view('student.Examproject.index',compact('linkgoogle'));
    }
}
