<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typepeper;

class ManageTypePeperController extends Controller
{
    public function index(){
        $typepeper = Typepeper::paginate(6);
        return view('admin.ManageTypePeper.index',compact('typepeper'));
    }
    public function FormAdd(){
        return view('admin.ManageTypePeper.insert');
    }
    public function ManageTypepeper_add(Request $request)
    {
        $request->validate([
            'nametype'=>'required|max:60',
            'description'=>'required|max:100',
        ],
        [
            'nametype.required'=>"กรุณาป้อนประเภทโครงงาน",
            'nametype.max'=>"คุณป้อนข้อมูลเกิน 60",
            'description.required' =>"กรุณาป้อนชื่อเอกสาร",
            'description.max'=>"คุณป้อนข้อมูลเกิน 100",  
        ]);
        $type = new Typepeper ;
        $type->nametype = $request->nametype;
        $type->description = $request->description;
        $type->save();
        return redirect()->route('admin.ManageTypePeper')->with('success','แก้ไขข้อมูลสำเร็จ');
    }
    public function FormUpdate(Request $request){
        $typepeper = Typepeper::find($request->typepeper_id);
        return view('admin.ManageTypePeper.update',compact('typepeper'));
    }
    public function ManageTypepeper_update(Request $request)    
    {
        $request->validate([
            'nametype'=>'required|max:60',
            'description'=>'required|max:100',
        ],
        [
            'nametype.required'=>"กรุณาป้อนประเภทโครงงาน",
            'nametype.max'=>"คุณป้อนข้อมูลเกิน 60",
            'description.required' =>"กรุณาป้อนชื่อเอกสาร",
            'description.max'=>"คุณป้อนข้อมูลเกิน 100",
        ]);
        $checkempty = Typepeper::select("*")
                                ->where("nametype","=",$request->nametype)
                                ->get();
        $checkdes = Typepeper::select("*")
                                ->where("description","=",$request->description)
                                ->get();
        if($checkempty->isEmpty() | $checkdes->isEmpty())
        {
            $typepeper = Typepeper::find($request->typepeper_id)->update([
                'nametype'=>$request->nametype,
                'description'=>$request->description 
            ]);
            return redirect()->route('admin.ManageTypePeper')->with('success','แก้ไขข้อมูลสำเร็จ');
        }else{
            return redirect()->route('admin.ManageTypePeper')->with('fail','อัพเดทข้อมูลไม่สำเร็จมีข้อมูลซ้ำในระบบ');
        }
    }
}
