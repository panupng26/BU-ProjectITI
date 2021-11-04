@extends('layout.admin.app')

@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">
                Dashboard
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="py-12">
              <div class="container-fluid">
              <div class="row">
                  <div class="col-xl-4 col-xs-4 ">
                    <div class="info-box">
                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">ตั้งค่ารหัสผ่าน</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-xl-4 col-xs-4">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">แก้ไขโปรไฟล์</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->

                  <!-- fix for small devices only -->
                  <div class="clearfix hidden-md-up"></div>

                  <div class="col-xl-4 col-xs-4">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">test</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
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