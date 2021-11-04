@extends('layout.private-teacher.app')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ตรวจสอบเอกสารนักศึกษา</h1>
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
            รายการตรวจสอบเอกสาร
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
                                    <th scope="col">ชื่อ-สกุล</th>
                                    <th scope="col">ชื่อเอกสาร</th>
                                    <th scope="col">ข้อมูลเพิ่มเติ่ม</th>
                                    <th scope="col">แนปลิงค์ Google Drive</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>นาย พศวีร์ คงอ่อน</td>
                                    <td>คง.ทน.01</td>
                                    <td><a href="" target="_blank" class="btn btn-info">คลิกเพื่ออ่าน</a></td>
                                    <td><a href="https://drive.google.com/drive/folders/1fKKUhZUy5IvUDnGuux62atNh1ad39nMe?fbclid=IwAR0t9ibHdjUQtv5tzaL0_prWzJ_9g-JQvwwaJWFWUJBfHg_-cOk0oVFQA60" target="_blank" class="btn btn-warning">ลิงค์เอกสาร</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>นาย ภาณุพงศ์ คงเสน่ห์</td>
                                    <td>คง.ทน.01</td>
                                    <td><a href="" target="_blank" class="btn btn-info">คลิกเพื่ออ่าน</a></td>
                                    <td><a href="https://drive.google.com/drive/folders/1fKKUhZUy5IvUDnGuux62atNh1ad39nMe?fbclid=IwAR0t9ibHdjUQtv5tzaL0_prWzJ_9g-JQvwwaJWFWUJBfHg_-cOk0oVFQA60" target="_blank" class="btn btn-warning">ลิงค์เอกสาร</a></td>
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