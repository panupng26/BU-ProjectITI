@extends('layout.student.app')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">นัดวันสอบอาจารย์ที่ปรึกษา</h1>
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
                  นัดวันสอบ
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>วันที่</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="กรุณาเลือกวันที่"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>หัวข้อเรื่องสอบ</label>
                                <select class="form-control">
                                    <option>กรุณาเลือกหัวข้อเรื่อง</option>
                                    <option>หัวข้อโครงงาน 1 </option>
                                    <option>สอบให้เกรดโครงงาน 1</option>
                                </select>
                      </div>
                    </div>
                  </div>
                  <!-- input states -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>ข้อมูลเพิ่มเติ่ม</label>
                        <textarea class="form-control" rows="20" placeholder="กรุณากรอกข้อมูลเพิ่มเติม"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <button type="button" class="btn btn-success">นัดวันสอบ</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
@endsection