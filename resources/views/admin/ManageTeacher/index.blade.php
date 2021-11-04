@extends('layout.admin.app')

@section('content')
<br>
    <div class="row">
        @if(session("success"))
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            </div>
        @elseif(session("fail"))
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    {{session('fail')}}
                </div>
            </div>
        @endif
    </div>
    <!-- <div class="row">
        <div class="col-sm-12">
            <form action="{{route('admin.ManageTeacher.trash')}}" method="get">
            <button type="summit" class="btn btn-danger "><i class="fas fa-trash-alt"></i></button>
            </form>
        </div>
    </div> -->
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">
                ข้อมูลอาจารย์
            </h3>
            <a href="{{route('admin.FormAddTeacher')}}" class="float-right">เพิ่มข้อมูล</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="py-12">
                <div class="container">
                    <div class="row">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ตำแหน่ง</th>
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">อีเมล</th>
                                    <th scope="col">แก้สถานะ</th>
                                    <th scope="col">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($teacher as $row)
                                <tr>
                                    <th>{{$teacher->firstItem()+$loop->index}}</th>
                                    <td>{{$row->role->name}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        <form action="{{route('admin.assign')}}" method="get">
                                                @csrf
                                                <input type="hidden" name="teacher_id" value="{{$row->teacher_id}}">
                                                <input type="hidden" name="role_id" value="{{$row->role_id}}">
                                                <input type="hidden" name="users_id" value="{{$row->users_id}}">
                                                <button type="summit" class="btn btn-primary">เปลี่ยนสถานะ</button>
                                        </form>
                                    </td>
                                    <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <form action="{{route('admin.FormUpdateTeacher')}}" method="get">
                                                @csrf
                                                <input type="hidden" name="teacher_id" value="{{$row->teacher_id}}">
                                                <button type="summit" class="btn btn-warning">แก้ไข</button>
                                            </form>
                                        </div>
                                        <div class="col-6">
                                            <form action="#" method="post">
                                                @csrf
                                                <input type="hidden" name="teacher_id" value="{{$row->teacher_id}}">
                                                <button type="button" class="btn btn-danger">ลบ</button>
                                            </form>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$teacher->links('vendor.pagination.custom')}}
                </div>
            </div>
        </div>
    </div>
@endsection