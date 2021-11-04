@extends('layout.student.app')

@section('content')
    <br>
    <div class="row ">
        @if(session("success"))
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            </div>
        @endif
    </div>
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  ส่งเอกสารให้อาจารย์ที่ปรึกษา
                </h3>
              </div>
              <div class="card-body">
                <form action="{{route('student.SendPeper.request')}}" method="post" autocomplete="off">
                  @csrf
                  <input type="hidden" name="student_login_id" value="{{Auth::user()->id}}">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>เลือกแบบฟอร์มเอกสาร</label>
                        <select class="form-control" name="typepeper_id">
                          <option value="">กรุณาเลือกเอกสาร</option>
                          @foreach($typepeper as $row)
                          <option value="{{$row->typepeper_id}}">{{$row->nametype}} ({{$row->description}})</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>แนปลิงค์ Google Drive</label>
                        <input type="text" name="linkweb" class="form-control" placeholder="กรุณากรอกลิงค์ Google Drive" require>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>ข้อมูลเพิ่มเติ่ม</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <button type="summit" class="btn btn-success">ส่งข้อมูล</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
@endsection