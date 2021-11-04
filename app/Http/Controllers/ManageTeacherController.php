<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleTeacher;
use App\Models\Teacher;
use App\Models\User;

class ManageTeacherController extends Controller
{
    
    public function index()
    {
        $roleteacher = RoleTeacher::all();
        $teacher = Teacher::paginate(6);
        return view('admin.ManageTeacher.index',compact('teacher','roleteacher'));
    }
    public function FormAdd()
    {
        $roleteacher = RoleTeacher::all();
        return view('admin.ManageTeacher.insert',compact('roleteacher'));
    }
    public function FormUpdate(Request $request)
    {
        $teacher = Teacher::find($request->teacher_id);
        $roleteacher = RoleTeacher::all();
        return view('admin.ManageTeacher.update',compact('teacher','roleteacher'));
    }
    public function Update_ManageTeacher(Request $request)
    {
        $teacher = Teacher::find($request->teacher_id);

        $user = User::find($teacher->users_id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        
        $student = Teacher::find($request->teacher_id)->update([
            'email'=>$request->email,
            'name' => $request->name
        ]);

        return redirect()->route('admin.ManageTeacher')->with('success','อัพเดทข้อมูลเรียบร้อย');
    }
    public function Add_data_teacher(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|max:60',
                'email'=>'required|max:60',
                'role_id'=>'required'
            ],
            [
                'name.required'=>"กรุณาป้อนชื่อและนามสกุล",
                'name.max' =>"ห้ามป้อนเกิน 60 ตัวอักษร",
                'role_id.required'=>"กรุณาเลือกตำแหน่ง",
                'email.required'=>"กรุณาป้อนอีเมล",
                'email.max' =>"ห้ามป้อนเกิน 60 ตัวอักษร",
            ]);
        $teacher = new Teacher;
        $teacher->role_id = $request->role_id;
        $teacher->name = $request->name;
        $datausercheck = User::select("*")
                                ->where("email","=",$request->email)
                                ->get();
        if($request->role_id == 1)
        {
            if($datausercheck->isEmpty()|| $datausercheck == null)
            {
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->login_level = 2;
                $user->password = bcrypt('T_1234ResetPassword');
                $user->save();
            }else{
                return redirect()->route('admin.ManageTeacher')->with('fail','เพิ่มข้อมูลผิดพลาดมีอีเมลนี้ในระบบแล้ว');
            }
        }else{
            if($datausercheck->isEmpty()|| $datausercheck == null)
            {
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->login_level = 3;
                $user->password = bcrypt('PT_4321ResetPassword');
                $user->save();
            }else{
                return redirect()->route('admin.ManageTeacher')->with('fail','เพิ่มข้อมูลผิดพลาดมีอีเมลนี้ในระบบแล้ว');
            }
        }
        $gotiduser = User::select("*")
                                ->where("email","=",$request->email)
                                ->get();
        $userid;
        foreach($gotiduser as $row)
        {
            $userid = $row->id;
        }

        $teacher->users_id = $userid;
        

        $teacher->email = $request->email;

        $emailcheck = Teacher::select("*")
                                ->where("email","=",$request->email)
                                ->get();
        if($emailcheck->isEmpty())
        {
            $teacher->save();
            return redirect()->route('admin.ManageTeacher')->with('success','เพิ่มข้อมูลสำเร็จ');
        }else{
            return redirect()->route('admin.ManageTeacher')->with('fail','เพิ่มข้อมูลผิดพลาดมีอีเมลนี้ในระบบแล้ว');
        }
        
         
    }
    public function Assign_role(Request $request)
    {
        if($request->role_id == 1)
        {
            $teacher= Teacher::find($request->teacher_id)->update([
                'role_id'=> 2,
            ]);
            $user = User::find($request->users_id)->update([
                'login_level'=>3
            ]);
        }else{
            $teacher= Teacher::find($request->teacher_id)->update([
                'role_id'=> 1
            ]);
            $user = User::find($request->users_id)->update([
                'login_level' =>2
            ]);
        }
        return redirect()->route('admin.ManageTeacher')->with('success','เปลี่ยนสถานะสำเร็จ');
    }
    public function Trash_ManageTeacher()
    {
        return view('admin.ManageTeacher.trash');
    }
}
