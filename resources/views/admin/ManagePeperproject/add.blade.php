@extends('layout.admin.app')

@section('content')
<br>
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">
                เพิ่มข้อมูลเอกสาร
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="py-12">
            <form action="{{route('admin.ManagePeperproject.add')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>ชื่อเอกสาร</label>
                        <input type="text" name="peper_name" class="form-control" placeholder="กรุณากรอกชื่อเอกสาร">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="linkweb">ลิงค์เอกสาร</label>
                            <input type="text" name="linkweb" class="form-control" placeholder="กรุณากรอกลิงค์เอกสาร">
                        </div>
                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <button type="summit" class="btn btn-success">เพิ่มข้อมูล</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
@endsection