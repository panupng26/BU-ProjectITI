@extends('layout.admin.app')

@section('content')

     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">แก้ไขข้อมูลอาจารย์</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  แก้ไขข้อมูล
                </h3>
              </div>
              <div class="card-body">
                <form action="{{route('admin.Teacher.update')}}" method="post" autocomplete="off">
                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>อีเมล</label>
                        <input type="email" name="email" class="form-control" placeholder="กรุณากรอกอีเมล" value="{{$teacher->email}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" name="name" placeholder="กรุณากรอกชื่อ-นามสกุล" value="{{$teacher->name}}">
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="teacher_id" value="{{$teacher->teacher_id}}">
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <button type="summit" class="btn btn-success">แก้ไขข้อมูล</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
    
@endsection