<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Googledrivepeper;
class ManagePeperprojectController extends Controller
{
    public function index(){
        $googlelink = Googledrivepeper::paginate(6);
        return view('admin.ManagePeperproject.index',compact('googlelink'));
    }
    public function FormUpdate(Request $request){
        $googlelink = Googledrivepeper::find($request->googledrive_id);
        return view('admin.ManagePeperproject.update',compact('googlelink'));
    }
    public function ManagePeperproject_update(Request $request)
    {
        $request->validate([
            'linkweb'=> 'required|max:255'
        ],[
            'linkweb.required' => 'กรุณาป้อนข้อมูล',
            'linkweb.max'=> 'กรุณาอย่ากรอกข้อมูลเกิน 255'
        ]);
        $googledrivelink = Googledrivepeper::find(1)->update([
            'linkweb'=>$request->linkweb,
        ]);
        return redirect()->route('admin.ManagePeperproject')->with('success','แก้ไขข้อมูลสำเร็จ');
    }
    
    public function FormAdd(Request $request)
    {
        return view('admin.ManagePeperproject.add');
    }
    public function ManagePeperproject_add(Request $request)
    {
        dd($request->file,$request->peper_name);
        return "Success";
    }
}
