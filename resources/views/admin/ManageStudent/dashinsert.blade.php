@extends('layout.admin.app')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">เมนูเพิ่มข้อมูล</h1>
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
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">
                เมนูเพิ่มข้อมูล
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="py-12">
              <div class="container-fluid">
              <div class="row">
                  <!-- /.col -->
                  <div class="col-xl-6 col-xs-6">
                    <a href="{{route('admin.ManageStudent.importexcel')}}" class="">
                        <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file-excel"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">เพิ่มข้อมูลด้วย Excel</span>
                        </div>
                        <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->

                  <!-- fix for small devices only -->
                  <div class="clearfix hidden-md-up"></div>
                  
                  <div class="col-xl-6 col-xs-6">
                    <a href="{{route('admin.FormAddManageStudent')}}" class="">
                        <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-edit"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">เพิ่มข้อมูลด้วยการกรอก</span>
                        </div>
                        <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                  </div>
                  
                </div>
              </div>
            </div>
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
@endsection