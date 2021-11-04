<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestTeacher;
use App\Models\Student;
use App\Models\ProjectStudent;

class PrivateteacherController extends Controller
{
    public function index()
    {
        return view('private-teacher.dashboard');
    }
    public function Checkpeperstudent()
    {
        return view('private-teacher.Checkpeperstudent.index');
    }
    public function Listproject()
    {
        return view('private-teacher.Listproject.index');
    }
    public function Listprojectall()
    {
        return view('private-teacher.Listprojectall.index');  
    }
    public function Requeststudent()
    {
        return view('private-teacher.Requeststudent.index');
    }
    public function Requestadvisor()
    {
        $requestteacher = RequestTeacher::paginate(6);
        return view('private-teacher.Requestadvisor.index',compact('requestteacher'));
    }
    public function Summit_request_student(Request $request)
    {
        $requestteacher = RequestTeacher::find($request->request_teacher_id);
        $student1   = Student::select("*")
                                ->where('id_student','=',$request->student1_id)
                                ->get();
        $student2   = Student::select("*")
                                ->where('id_student','=',$request->student2_id)
                                ->get();
        $student3   = Student::select("*")
                                ->where('id_student','=',$request->student3_id)
                                ->get();
        
        $getid_std1 = NULL ;
        $getid_std2 = NULL ;
        $getid_std3 = NULL ;
        
        foreach($student1 as $row)
        {
            $getid_std1 = $row->student_id;
        }
        foreach($student2 as $row)
        {
            $getid_std2 = $row->student_id;
        }
        foreach($student3 as $row)
        {
            $getid_std3 = $row->student_id;
        }
        
        $projectsuccess = new ProjectStudent;
        $projectsuccess->name_project = $requestteacher->name;
        $projectsuccess->student1_id = $getid_std1;
        $projectsuccess->student2_id = $getid_std2;
        $projectsuccess->student3_id = $getid_std3;
        $projectsuccess->advisor_id = $requestteacher->advisor_id;
        $projectsuccess->director1_id = $requestteacher->director1_id;
        $projectsuccess->director2_id = $requestteacher->director2_id;
        $projectsuccess->typeproject_id = $requestteacher->typeproject_id;
        $projectsuccess->save();
        
        $get_projectsuccess = ProjectStudent::select("*")
                                ->where([
                                    ['student1_id','=',$getid_std1],
                                    ['student2_id','=',$getid_std2],
                                    ['student3_id','=',$getid_std3],      
                                ])
                                ->get();
        $getidproject;
        foreach($get_projectsuccess as $row)
        {
            $getidproject = $row->project_id;
        }

        if(!$student1->isEmpty())
        {
            foreach($student1 as $row)
            {
               if($row->project_id == NULL)
               {
                    $update = Student::find($getid_std1)->update([
                        'project_id' => $getidproject 
                    ]);
               }
            }
        }
        if(!$student2->isEmpty())
        {
            foreach($student2 as $row)
            {
                if($row->project_id == NULL)
                {
                    $update = Student::find($getid_std2)->update([
                        'project_id' => $getidproject 
                    ]);
                }
            }
        }
        if(!$student3->isEmpty())
        {
            foreach($student3 as $row)
            {
                if($row->project_id == NULL)
                {
                    $update = Student::find($getid_std3)->update([
                        'project_id' => $getidproject 
                    ]);
                }
            }
        }

        $updatestatusrequest = RequestTeacher::find($request->request_teacher_id)->update([
            'status_id' => 4
        ]);

        return redirect()->back()->with('success','ยืนยันคำร้องสำเร็จ');
    }
    public function Postgradestudent()
    {
        return view('private-teacher.Postgradestudent.index');
    }

}
