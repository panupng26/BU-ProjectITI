@extends('layout.admin.app')
@section('content')
<br>
    <div class="row ">
        @if(session("success"))
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            </div>
        @endif
    </div>
    <!-- //!start card -->
    <div class="card ">
        <div class="card-success ">
            <div class="card-header">
                <h3 class="card-title">ข้อมูลนักศึกษา</h3>
                <a href="{{route('admin.ManageStudent.dashboardinsert')}}" class="float-right">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">รหัสนักศึกษา</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">อีเมล</th>
                        <th scope="col">ปีการศึกษาวิชาโครงงาน 1</th>
                        <th scope="col">ปีการศึกษาวิชาโครงงาน 2</th>
                        <th scope="col">เครื่องมือ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $row)
                    <tr>
                        <th>{{$student->firstItem()+$loop->index}}</th>
                        <td>{{$row->id_student}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td class="text-center">
                            @if($row->project1_schoolterm_id != "" && $row->project1_schoolyear_id != "")
                                {{$row->project1_schoolterm->term}}/{{$row->project1_schoolyear->year}}
                            @else
                                ไม่ได้ลงทะเบียน
                            @endif
                        </td>
                        <td class="text-center">
                            @if($row->project2_schoolterm_id != "" && $row->project2_schoolyear_id != "")
                            {{$row->project2_schoolterm->term}}/{{$row->project2_schoolyear->year}}
                            @else
                                ไม่ได้ลงทะเบียน
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <form action="{{route('admin.FormUpdateManageStudent')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="studentid" value="{{$row->student_id}}">
                                        <button type="summit" class="btn btn-warning">แก้ไข</button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <form action="{{route('admin.ManageStudent.softdelete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{$row->student_id}}">
                                        <button type="button" class="btn btn-danger">ลบ</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $student->links('vendor.pagination.custom') }}
        </div>
    </div>
    <!-- //!end card -->
@endsection

 