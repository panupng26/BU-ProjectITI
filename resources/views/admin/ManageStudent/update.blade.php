@extends('layout.admin.app')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">แก้ไขข้อมูลนักศึกษา</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Welcome</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @foreach($student as $student)
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">
                  แก้ไขข้อมูล
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('admin.ManageStudent.update')}}" method="post">
                  @csrf
                  <input type="hidden" name="users_id" value="{{$student->users_id}}">
                  <input type="hidden" name="student_id" value="{{$student->student_id}}">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>อีเมล<b class="text-danger"> *</b></label>
                        <input type="email" class="form-control" name="email" placeholder="กรุณากรอกอีเมล" value="{{$student->email}}">
                      </div>
                      @error('email')
                      <div class="my-2">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                      @enderror
                    </div>
                  </div>
                  <!-- input states -->
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="form-group">
                        <label>ชื่อ-นามสกุล<b class="text-danger"> *</b></label>
                        <input type="text" class="form-control" name="name" placeholder="กรุณากรอกชื่อ-นามสกุล" value="{{$student->name}}">
                      </div>
                      @error('name')
                      <div class="my-2">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                      @enderror
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>รหัสนักศึกษา<b class="text-danger"> *</b></label>
                        <input type="text" class="form-control" name="id_student" placeholder="กรุณากรอกรหัสนักศึกษา" value="{{$student->id_student}}">
                      </div>
                      @error('id_student')
                      <div class="my-2">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <button type="summit" class="btn btn-success">บันทึกข้อมูล</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
    @endforeach
    
@endsection