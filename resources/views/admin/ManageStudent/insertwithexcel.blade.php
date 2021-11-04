@extends('layout.admin.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">เพิ่มข้อมูลนักศึกษาด้วย Excel</h1>
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
                  เพิ่มข้อมูลด้วย Excel
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('admin.ManageStudent.importexcel.add')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                        <label>วิชาโครงงาน<b class="text-danger"> *</b></label>
                        <select class="form-control" name="list_check">
                            <option value="">กรุณาเลือกโครงงาน</option>
                            <option value="1">โครงงานที่ 1</option>
                            <option value="2">โครงงานที่ 2</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                        <label>ภาคการศึกษา<b class="text-danger"> *</b></label>
                          <select class="form-control" name="schoolterm_id">
                            <option value="">กรุณาเลือกภาคการศึกษา</option>
                            @foreach ($schoolterms as $terms)
                            <option value="{{$terms->schoolterm_id}}">{{$terms->term}}</option>
                            @endforeach
                          </select>
                        </div>
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
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="form-group">
                      <label>กรุณาเลือกไฟล์ Excel<b class="text-danger"> *</b></label>
                      <input type="file" name="file" class="form-control" />
                      </div>
                      @error('file')
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