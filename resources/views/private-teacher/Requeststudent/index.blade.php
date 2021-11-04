@extends('layout.private-teacher.app')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">คำร้องของนักศึกษา</h1>
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
            คำร้องนัดสอบของนักศึกษา
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
                                    <th scope="col">ปีการศึกษา</th>
                                    <th scope="col">วันที่/เดือน/ปี</th>
                                    <th scope="col">ข้อมูลเพิ่มเติ่ม</th>
                                    <th scope="col">ตอบกลับนักศึกษา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>หัวข้อโครงงาน 1</td>
                                    <td>1610701995</td>
                                    <td>นาย พศวีร์ คงอ่อน</td>
                                    <td>3/2563</td>
                                    <td>03/08/64</td>
                                    <td><a href="" class="btn btn-warning">คลิกเพื่ออ่าน</a></td>
                                    <td><a href="" class="btn btn-success">ตอบกลับ</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>สอบให้เกรดโครงงาน 1</td>
                                    <td>1610701334</td>
                                    <td>นาย ภาณุพงศ์ คงเสน่ห์</td>
                                    <td>1/2564</td>
                                    <td>03/08/64</td>
                                    <td><a href="" class="btn btn-warning">คลิกเพื่ออ่าน</a></td>
                                    <td><a href="" class="btn btn-success">ตอบกลับ</a></td>
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