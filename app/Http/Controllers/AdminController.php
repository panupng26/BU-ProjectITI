<?php

namespace App\Http\Controllers;
use App\Models\Schoolterm;
use App\Models\Schoolyear;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Imports\StudentImport;
use App\Imports\StudentCollectionImport;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    //indexAdmin
    public function ManageUser_index()
    {
        $user = User::paginate(6);
        return view('admin.ManageUser.index',compact('user'));
    }

    public function ManageUser_reset(Request $request)
    {
        if($request->login_level == 1)
        {
            $user = User::find($request->users_id)->update([
                'password' => bcrypt('S61PasswordReset')
            ]);
        }elseif($request->login_level ==2){
            $user = User::find($request->users_id)->update([
                'password' => bcrypt('T_1234ResetPassword')
            ]);
        }elseif($request->login_level ==3)
        {
            $user = User::find($request->users_id)->update([
                'password' => bcrypt('PT_1234ResetPassword')
            ]);
        }
        return redirect()->route('admin.ManageUser')->with('success','อัพเดทข้อมูลเรียบร้อย');
    }
    //endindexadmin
    // ManageStudent
    public function ManageStudent_index()
    {
        $student = Student::paginate(6);
        $schoolterm = Schoolterm::all();
        $schoolyear = Schoolyear::all();
        return view('admin.ManageStudent.index',compact('student','schoolterm','schoolyear'));
    }
    public function ManageStudent_FormAdd()
    {
        $schoolterms = Schoolterm::all();
        $schoolyears = Schoolyear::all();
        return view('admin.ManageStudent.insert')
        ->with('schoolterms',$schoolterms)
        ->with('schoolyears',$schoolyears);
    }
    public function ManageStudent_FormUpdate(Request $request)
    {
        $student = Student::select("*")
                            ->where("student_id","=",$request->studentid)
                            ->get();
        return view('admin.ManageStudent.update',compact('student'));
    }
    public function ManageStudent_Updatenow(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|max:60',
                'id_student'=>'required|max:10',
                'email'=>'required|max:60',
            ],
            [
                'name.required'=>"กรุณาป้อนชื่อและนามสกุล",
                'name.max' =>"ห้ามป้อนเกิน 60 ตัวอักษร",
                'id_student.required'=>"กรุณาป้อนข้อมูลรหัสนักศึกษา",
                'id_student.max'=>"ห้ามป้อนรหัสนักศึกษาเกิน 10 ตัวอักษร",
                'email.required'=>"กรุณาป้อนอีเมล",
                'email.max' =>"ห้ามป้อนเกิน 60 ตัวอักษร",
            ]);



        $user = User::find($request->users_id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        $student = Student::find($request->student_id)->update([
            'email'=>$request->email,
            'name' => $request->name,
            'id_student' => $request->id_student
        ]);

        return redirect()->route('admin.ManageStudent')->with('success','อัพเดทข้อมูลเรียบร้อย');
    }

    public function ManageStudent_AddStudent(Request $request)
    {
        // validate data from path=/admin/ManageStudent/insert.blade.php

        $request->validate([
            'name'=>'required|max:60',
            'id_student'=>'required|unique:students|max:10',
            'email'=>'required|max:60',
            'project_inside'=>'required',
            'schoolterm_id'=>'required',
            'schoolyear_id'=>'required'
        ],
        [
            'name.required'=>"กรุณาป้อนชื่อและนามสกุล",
            'name.max' =>"ห้ามป้อนเกิน 60 ตัวอักษร",
            'id_student.required'=>"กรุณาป้อนข้อมูลรหัสนักศึกษา",
            'id_student.unique'=>"คุณป้อนข้อมูลซ้ำ ผิดพลาด มีนักศึกษาในระบบแล้ว",
            'id_student.max'=>"ห้ามป้อนรหัสนักศึกษาเกิน 10 ตัวอักษร",
            'email.required'=>"กรุณาป้อนข้อมูลอีเมล",
            'email.max'=>"ห้ามป้อนอีเมลเกิน 60 ตัวอักษร",
            'schoolterm_id.required'=>"คุณไม่ได้เลือกข้อมูลภาคการศึกษา",
            'schoolyear_id.required'=>"คุณไม่ได้เลือกข้อมูลปีการศึกษา",
            'project_inside.required'=>"คุณไม่ได้เลือกข้อมูลวิชาโครงงาน"
        ]
        );
        $user = new User;
        $student = new Student;
        $student->status_project1_id = 1;
        $student->status_project2_id = 1;
        $student->project_id = null;
        $student->id_student = $request->id_student;
        $student->name = $request->name;
        $data = Student::select("*")
                            ->where("id_student","=",$request->id_student)
                            ->get();
        if($request->project_inside == 1)
        {
            // เช็ค error ในกรณีที่มี รายชื่อนักศึกษาลงไว้แล้ว เช็คด้วยรหัสนักศึกษา
            foreach($data as $datacheck)
            {
                if($request->id_student == $datacheck->id_student)
                {
                    $student = $data ;
                }
            }
            //endcheck

            $student->project1_schoolyear_id = $request->schoolyear_id;
            $student->project1_schoolterm_id = $request->schoolterm_id;

            $student->project2_schoolyear_id = null;
            $student->project2_schoolterm_id = null;
        }else{
            // เช็ค error ในกรณีที่มี รายชื่อนักศึกษาลงไว้แล้ว เช็คด้วยรหัสนักศึกษา
            foreach($data as $datacheck)
            {
                if($request->id_student == $datacheck->id_student)
                {
                    $student = $data ;
                }
            }
            //endcheck

            $student->project2_schoolyear_id = $request->schoolyear_id;
            $student->project2_schoolterm_id = $request->schoolterm_id;
        }
        $datausercheck = User::select("*")
                                ->where("email","=",$request->email)
                                ->get();

        if($datausercheck->isEmpty())
        {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->login_level = 1 ;
            $user->password = bcrypt('S61PasswordReset');
            $user->save();
        }

        $datausercheck = null;
        $datausercheck = User::select("*")
                                ->where("email","=",$request->email)
                                ->get();

        $useridtext = '';
        foreach($datausercheck as $data)
        {
            $useridtext = $data->id;
        }

        $student->users_id = $useridtext ;
        $student->email = $request->email;
        $student->save();
        return redirect()->route('admin.ManageStudent')->with('success','บันทึกข้อมูลเรียบร้อย');
        //endinsert
    }
    public function ManageStudent_SoftDelete(Request $request)
    {
        // $delete = Student::find($request->student_id)->delete();
        return redirect()->route('admin.ManageStudent')->with('success','ลบข้อมูลเรียบร้อย');
    }
    public function Import_excel_student()
    {
        $schoolterms = Schoolterm::all();
        $schoolyears = Schoolyear::all();
        return view('admin.ManageStudent.insertwithexcel',compact('schoolterms','schoolyears'));
    }
    public function importdataexcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ],[
            'file.required' => "กรุณาเลือกไฟล์ข้อมูล",
            'file.mimes' =>"นามสกุลไฟล์ไม่ถูกต้องจะต้องเป็น xls และ xlsx"
        ]);
        $path = $request->file('file')->getRealPath();

        if($request->list_check == 1)
        {
            $data = Excel::import(new StudentImport($request->schoolyear_id,$request->schoolterm_id,$request->list_check),$path);
        }else{
            $data = Excel::import(new StudentCollectionImport($request->schoolyear_id,$request->schoolterm_id),$path);
        }
        return redirect()->route('admin.ManageStudent')->with('success','เพิ่มข้อมูลจาก Excel สำเร็จ');
    }
    public function Dashboardall_insert()
    {
        return view('admin.ManageStudent.dashinsert');
    }
    // EndManageStudent
    //ManageTypeproject

    //EndManageTypeproject
}
