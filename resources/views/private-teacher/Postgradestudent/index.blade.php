@extends('layout.private-teacher.app')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ให้คะแนนผลการสอบนักศึกษา</h1>
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
            คะแนนผลการสอบนักศึกษา
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="py-12">
               
                    <div class="row">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ชื่อเรื่อง</th>
                                    <th scope="col">รหัสนักศึกษา</th>
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">วันที่/เดือน/ปี</th>
                                    <th scope="col">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>หัวข้อโครงงาน 1</td>
                                    <td>1610701995</td>
                                    <td>นาย พศวีร์ คงอ่อน</td>
                                    <td>03/08/64</td>
                                    <td><a href="" class="btn btn-success">ผ่าน</a>
                                    <a href="" class="btn btn-danger">ไม่ผ่าน</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>สอบให้เกรดโครงงาน 1</td>
                                    <td>1610701334</td>
                                    <td>นาย ภาณุพงศ์ คงเสน่ห์</td>
                                    <td>03/08/64</td>
                                    <td><a href="" class="btn btn-success">ผ่าน</a>
                                    <a href="" class="btn btn-danger">ไม่ผ่าน</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
            </div>
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
@endsection