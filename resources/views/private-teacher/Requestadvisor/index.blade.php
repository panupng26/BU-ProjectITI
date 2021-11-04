@extends('layout.private-teacher.app')

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
            คำร้องขออาจารย์ที่ปรึกษาและคณะกรรมการ
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
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">วันที่/เดือน/ปี</th>
                                    <th scope="col">ข้อมูลเพิ่มเติ่ม</th>
                                    <th scope="col">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($requestteacher as $row)
                              @if($row->status_id == 3)
                                <tr>
                                    <td>{{$requestteacher->firstItem()+$loop->index}}</td>   
                                    <td>{{$row->studentrequest->name}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    อ่านรายละเอียด
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ชื่อโครงงาน:{{$row->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                          {{$row->description}}
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <form action="{{route('private.summitrequest')}}" method="post">
                                      @csrf
                                      <input type="hidden" name="request_teacher_id" value="{{$row->request_teacher_id}}">
                                      <input type="hidden" name="student1_id" value="{{$row->student1_id}}">
                                      <input type="hidden" name="student2_id" value="{{$row->student2_id}}">
                                      <input type="hidden" name="student3_id" value="{{$row->student3_id}}">
                                      <button type="submit" class="btn btn-success">ยืนยัน</button>
                                    </form>
                                    </div>
                                    <div class="col-sm-6">
                                    <form action="#" method="post">
                                      @csrf
                                      <input type="hidden" name="request_teacher_id" value="{{$row->request_teacher_id}}">
                                      <button type="submit" class="btn btn-danger">ยกเลิก</button>
                                    </form>
                                    </div>
                                    </div>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
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