<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeproject;
class ManageTypeprojectController extends Controller 
{
    public function index()
    {
        $typeproject = Typeproject::paginate(6);
        return view('admin.ManageTypeproject.index',compact('typeproject'));
    }
    public function FormAdd()
    {
        return view('admin.ManageTypeproject.insert');
    }
    public function FormUpdate(Request $request)
    {
        $typeproject = Typeproject::find($request->typeproject_id);
        return view('admin.ManageTypeproject.update',compact('typeproject'));
    }
    public function MaageTypeproject_update(Request $request)
    {
        $request->validate([
            'name'=>'required|max:60',
        ],
        [
            'name.required'=>"กรุณาป้อนประเภทโครงงาน",
            'name.max'=>"คุณป้อนข้อมูลเกิน 60",
        ]);
        $checkempty = Typeproject::select("*")
                                ->where("name","=",$request->name)
                                ->get();
        if($checkempty->isEmpty())
        {
            $typeproject = Typeproject::find($request->typeproject_id)->update([
                'name'=>$request->name,
            ]);
            return redirect()->route('admin.ManageTypeproject')->with('success','อัพเดทข้อมูลสำเร็จ');
        }else{
            return redirect()->route('admin.ManageTypeproject')->with('fail','แก้ไขผิดพลาดมีข้อมูลซ้ำ');
        }

    }
    public function ManageTypeproject_insert(Request $request)
    {
        $request->validate([
            'name'=>'required|max:60|unique:typeprojects'
        ],[
            'name.required'=>"กรุณาป้อนประเภทโครงงาน",
            'name.max'=>"คุณป้อนข้อมูลเกิน 60",
            'name.unique'=>"มีข้อมูลนี้อยู่ในระบบแล้ว"
        ]);
        $typeproject = new Typeproject;
        $typeproject->name = $request->name;
        $typeproject->save();
       return redirect()->route('admin.ManageTypeproject')->with('success','เพิ่มข้อมูลสำเร็จ') ;
    }
}
