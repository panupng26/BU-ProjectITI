@extends('layout.admin.app')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">แก้ไขข้อมูลประเภทโครงงาน</h1>
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
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">
                  แก้ไขข้อมูล
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('admin.ManageTypeproject.update')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                      <input type="hidden" name="typeproject_id" value="{{$typeproject->typeproject_id}}">
                      <div class="form-group">
                        <label>ประเภทโครงงาน</label>
                        <input type="text" name="name" class="form-control" placeholder="กรุณากรอกประเภทโครงงาน" value="{{$typeproject->name}}">
                      </div>
                      @error('name')
                      <div class="my-2">
                        <span class="text-danger">{{$message}}</span>
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <button type="summit" class="btn btn-success">แก้ไขข้อมูล</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
    
@endsection