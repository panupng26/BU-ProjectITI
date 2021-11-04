<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typepeper;

class SendPeperController extends Controller
{
    public function index()
    {
        $typepeper = Typepeper::all();
        return view('student.SendPeper.index',compact('typepeper'));
    }
    public function getRequestSendpeper(Request $request)
    {
        
    }
}
