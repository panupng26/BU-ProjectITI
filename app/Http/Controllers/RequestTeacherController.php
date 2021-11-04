<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\RequestTeacher;
use App\Models\Student;
use App\Models\Typeproject;
use Auth;

class RequestTeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        $typeproject = Typeproject::all();
        return view('student.RequestTeacher.index',compact('teacher','typeproject'));
    }
    public function Request_to_privateteacher(Request $request)
    {
        $request->validate([
            'name'          =>  'required|max:255',
            'student1_id'   =>  'max:10',
            'student2_id'   =>  'max:10',
            'student3_id'   =>  'max:10',
            'advisor_id'    =>  'required',
            'director1_id'  =>  'required',
            'director2_id'  =>  'required',
            'description'   =>  'required', 
            'typeproject_id' => 'required',
        ],[
            'name.required'      =>  "กรุณากรอกชื่อโครงงาน",
            'name.max'          =>  "ห้ามกรอกข้อมูลเกิน 255 ตัวอักษร",
            'student1_id.max'   =>  "ห้ามกรอกรหัสนักศึกษาเกิน 10 ตัวอักษร",
            'student2_id.max'   =>  "ห้ามกรอกรหัสนักศึกษาเกิน 10 ตัวอักษร",
            'student3_id.max'   =>  "ห้ามกรอกรหัสนักศึกษาเกิน 10 ตัวอักษร",
            'advisor_id.required'=>  "กรุณาเลือกอาจารย์ที่ปรึกษา",
            'director1_id.required'=>"กรุณาเลือกคณะกรรมการท่านที่ 1",
            'director2_id.required'=>"กรุณาเลือกคณะกรรมการท่านที่ 2",
            'description.required'       =>  "กรุณากรอกข้อมูลเบื้องต้น",
            'typeproject_id.required' => "กรุณาเลือกข้อมูลประเภทโครงงาน"
        ]);
        if($request->student1_id != NULL)
        {
            $checkstudent = Student::select("*")
                                    ->where("id_student","=",$request->student1_id)
                                    ->get();
            if($checkstudent->isEmpty())
            {
                return redirect()->back()->with('fail',"ไม่มีรหัสนักศึกษาคนที่ 1 ในระบบกรุณาตรวจสอบรหัสนักศึกษา");
            }
        }
        if($request->student2_id != NULL)
        {
            $checkstudent = Student::select("*")
                                    ->where("id_student","=",$request->student2_id)
                                    ->get();
            if($checkstudent->isEmpty())
            {
                return redirect()->back()->with('fail',"ไม่มีรหัสนักศึกษาคนที่ 2 ในระบบกรุณาตรวจสอบรหัสนักศึกษา");
            } 
        }        
        if($request->student3_id != NULL)
        {
            $checkstudent = Student::select("*")
                                    ->where("id_student","=",$request->student3_id)
                                    ->get();
            if($checkstudent->isEmpty())
            {
                return redirect()->back()->with('fail',"ไม่มีรหัสนักศึกษาคนที่ 3 ในระบบกรุณาตรวจสอบรหัสนักศึกษา");
            } 
        }

        $studentrequest = new RequestTeacher;
        $studentrequest->student_login_id = $request->student_login_id;
        $studentrequest->name = $request->name;
        $studentrequest->typeproject_id = $request->typeproject_id;
        $studentrequest->student1_id = $request->student1_id;
        $studentrequest->student2_id = $request->student2_id;
        $studentrequest->student3_id = $request->student3_id;
        $studentrequest->advisor_id = $request->advisor_id;
        $studentrequest->director1_id = $request->director1_id;
        $studentrequest->director2_id = $request->director2_id;
        $studentrequest->description = $request->description;
        $studentrequest->status_id = 3 ;
        $studentrequest->save();    
        return redirect()->back()->with('success',"ส่งคำร้องสำเร็จรอการอนุมัติ");    
    }
    public function Check_request_Project()
    {
        $checkstudent = RequestTeacher::select("*")
                                    ->where("student_login_id","=",Auth::user()->id)
                                    ->get();
        dd($checkstudent); //ยังไม่ได้ทำหน้า design request เพราะข้ามไปทำ เพิ่มโครงงานในส่วนของ อาจารย์ผู้ประสานงาน
        return view('student.RequestTeacher.request',compact('checkstudent'));
    }
}
