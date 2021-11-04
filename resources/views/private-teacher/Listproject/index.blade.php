@extends('layout.private-teacher.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">รายชื่อโครงงาน</h1>
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
            รายชื่อโครงงาน
            </h3>
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
                                    <th scope="col">ชื่อโครงงาน</th>
                                    <th scope="col">ประเภทโครงงาน</th>
                                    <th scope="col">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>สกายไลน์ ดิ้พ โฮไรซอน</td>
                                    <td>Games</td>
                                    <td><a href="" class="btn btn-info">อ่านรายละเอียด</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>การพัฒนา Application สำหรับการสแกนป้ายทะเบียนรถ</td>
                                    <td>Mobile App</td>
                                    <td><a href="" class="btn btn-info">อ่านรายละเอียด</a></td>
                                </tr>
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