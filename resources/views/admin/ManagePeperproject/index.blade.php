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
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">
                เอกสารวิชาโครงงาน
            </h3>
            <a href="{{route('admin.FormAddManagePeperproject')}}" class="float-right">เพิ่มข้อมูล</a>
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
                                    <th scope="col">ชื่อเรื่อง</th>
                                    <th scope="col">ลิงค์เข้าสู่เอกสาร</th>
                                    <th scope="col">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($googlelink as $row)
                                
                                        
                                <tr>
                                   
                                    <th>{{$googlelink->firstItem()+$loop->index}}</th>
                                    <td>ลิงค์เอกสารวิชาโครงงานล่าสุด</td>
                                    <td>
                                    <a href="{{$row->linkweb}}" target="_blank">ลิงค์เข้าสู่เอกสาร</a>
                                    </td>
                                    <td>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <form action="{{route('admin.FormUpdateManagePeperproject')}}" method="get">
                                            <input type="hidden" name="googledrive_id" value="{{$row->googledrive_id}}">
                                            <button class="btn btn-success" type="summit">แก้ไข</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-3">
                                            <form action="#" method="get">
                                            <input type="hidden" name="googledrive_id" value="{{$row->googledrive_id}}">
                                            <button class="btn btn-danger" type="summit">ลบ</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div>
                                    </td>
                                  
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
@endsection