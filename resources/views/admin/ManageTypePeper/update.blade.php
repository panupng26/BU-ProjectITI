@extends('layout.admin.app')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">แก้ไขข้อมูลประเภทเอกสาร</h1>
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
                <form action="{{route('admin.ManageTypepeper.update')}}" method="post">
                  @csrf
                  <input type="hidden" name="typepeper_id" value="{{$typepeper->typepeper_id}}">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ประเภทเอกสาร</label>
                        <input type="text" name="nametype" class="form-control" placeholder="กรุณากรอกประเภทเอกสาร" value="{{$typepeper->nametype}}">
                      </div>
                      @error('nametype')
                      <div class="my-2">
                        <span class="text-danger">
                          {{$message}}
                        </span>
                      </div>
                      @enderror
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ชื่อเอกสาร</label>
                        <input type="text" name="description" class="form-control" placeholder="กรุณากรอกรายละเอียดเอกสาร" value="{{$typepeper->description}}">
                      </div>
                      @error('description')
                      <div class="my-2">
                        <span class="text-danger">
                          {{$message}}
                        </span>
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