<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageStudentController extends Controller
{
    public function index() {
        return view('admin.ManageStudent.index');
    }
    public function FormAdd() {
        return view('admin.ManageStudent.insert');
    }
    public function FormUpdate() {
        return view('admin.ManageStudent.update');
    }
}
