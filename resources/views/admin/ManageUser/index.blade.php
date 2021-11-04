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
        @endif
    </div>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">
                ข้อมูลผู้ใช้งานระบบ
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="py-12">
                <div class="container">
                    <div class="row">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ตำแหน่ง</th>
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">อีเมล</th>
                                    <th scope="col">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $row)
                                @if($row->login_level != 0)
                                    <tr>           
                                    <td>{{$user->firstItem()+$loop->index}}</td>
                                    <td>
                                    @if($row->login_level == 1)
                                        นักศึกษา
                                    @elseif($row->login_level == 2)
                                        อาจารย์
                                    @elseif($row->login_level == 3)
                                        อาจารย์ผู้ประสานงาน
                                    @endif
                                    </td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        <form action="{{route('admin.ManageUser.reset')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="login_level" value="{{$row->login_level}}">
                                        <input type="hidden" name="users_id" value="{{$row->id}}">
                                        <button type="summit" class="btn btn-danger">รีเซ็ตรหัสผ่าน</button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$user->links('vendor.pagination.custom')}}
                </div>
            </div>
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
@endsection