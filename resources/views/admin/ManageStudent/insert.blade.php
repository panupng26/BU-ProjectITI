@extends('layout.admin.app')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">เพิ่มข้อมูลนักศึกษา</h1>
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
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  เพิ่มข้อมูล
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('admin.ManageStudent.add')}}" method="post" autocomplete="off">
                  @csrf

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>วิชาโครงงานที่<b class="text-danger"> *</b></label>
                          <select class="form-control" name="project_inside">
                            <option value="">กรุณาเลือกวิชาโครงงาน</option>
                            <option value="1">โครงงาน 1</option>
                            <option value="2">โครงงาน 2</option>
                          </select>
                      </div>
                      @error('project_inside')
                      <div class="my-2">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>อีเมล<b class="text-danger"> *</b></label>
                        <input type="email" class="form-control" placeholder="กรุณากรอกอีเมล" name="email">
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
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ชื่อ-นามสกุล<b class="text-danger"> *</b></label>
                        <input type="text" class="form-control" placeholder="กรุณากรอกชื่อ-นามสกุล" name="name">
                      </div>

                      @error('name')
                      <div class="my-2">
                        <span class="text-danger">
                          {{$message}}
                        </span>
                      </div>
                      @enderror

                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>รหัสนักศึกษา<b class="text-danger"> *</b></label>
                        <input type="text" class="form-control" placeholder="กรุณากรอกรหัสนักศึกษา" name="id_student">
                      </div>

                      @error('id_student')
                      <div class="my-2">
                        <span class="text-danger">
                          {{$message}}
                        </span>
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <label>ภาคการศึกษา<b class="text-danger"> *</b></label>
                        <select class="form-control" name="schoolterm_id">
                          <option value="">กรุณาเลือกภาคการศึกษา</option>
                          @foreach ($schoolterms as $terms)
                          <option value="{{$terms->schoolterm_id}}">{{$terms->term}}</option>
                          @endforeach
                        </select>
                      </div>

                      @error('schoolterm_id')
                      <div class="my-2">
                        <span class="text-danger">
                          {{$message}}
                        </span>
                      </div>
                      @enderror
                      
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>ปีการศึกษา<b class="text-danger"> *</b></label>
                        <select class="form-control" name="schoolyear_id">
                          <option value="">กรุณาเลือกปีการศึกษา</option>
                          @foreach ($schoolyears as $years)
                          <option value="{{$years->schoolyear_id}}">{{$years->year}}</option>
                          @endforeach
                        </select>
                      </div>

                      @error('schoolyear_id')
                      <div class="my-2">
                        <span class="text-danger">
                          {{$message}}
                        </span>
                      </div>
                      @enderror

                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <button type="summit" class="btn btn-success">เพิ่มข้อมูล</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
@endsection