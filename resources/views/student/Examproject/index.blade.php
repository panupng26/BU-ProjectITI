@extends('layout.student.app')

@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">เอกสารวิชาโครงงาน</h1>
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
                เอกสารวิชาโครงงาน
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
                                    <th scope="col">เรื่อง</th>
                                    <th scope="col">ลิงค์เอกสารล่าสุด</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($linkgoogle as $row)
                                <tr>
                                    <td>1</td>
                                    <td>ลิงค์เอกสารวิชาโครงงานล่าสุด</td>
                                    <td>
                                    <a href="{{$row->linkweb}}" target="_blank">Googledrive</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
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