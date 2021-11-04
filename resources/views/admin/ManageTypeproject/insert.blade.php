@extends('layout.admin.app')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">เพิ่มข้อมูลประเภทโครงงาน</h1>
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
                <form action="{{route('admin.ManageTypeproject.insertdata')}}" method="post">
                  @csrf  
                <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>ประเภทโครงงาน</label>
                        <input type="text" name="name" class="form-control" placeholder="กรุณากรอกประเภทโครงงาน">
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