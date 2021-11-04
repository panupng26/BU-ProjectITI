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
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">
                ข้อมูลประเภทโครงงาน
            </h3>
            <a href="{{route('admin.FormAddManageTypeproject')}}" class="float-right">เพิ่มข้อมูล</a>
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
                                    <th scope="col">ประเภทโครงงาน</th>
                                    <th scope="col">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($typeproject as $row)
                                <tr>
                                    <td>{{$typeproject->firstItem()+$loop->index}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <form action="{{route('admin.FormUpdateManageTypeproject')}}" method="get">
                                                @csrf
                                                <input type="hidden" name="typeproject_id" value="{{$row->typeproject_id}}">
                                                <button type="summit" class="btn btn-warning">แก้ไข</button>
                                            </form>
                                        </div>
                                        <div class="col-6">
                                            <form action="#" method="post">
                                                @csrf
                                                <input type="hidden" name="typeproject_id" value="{{$row->typeproject_id}}">
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
                    {{$typeproject->links('vendor.pagination.custom')}}
                </div>
            </div>
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
@endsection