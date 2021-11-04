@extends('layout.student.app')

@section('content')
<br>
    <div class="row">
        @if(session("success"))
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            </div>
        @elseif(session("fail"))
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    {{session('fail')}}
                </div>
            </div>
        @endif
    </div>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                    ยื่นคำร้องโครงงาน
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('student.RequestTeacher.request')}}" method="post">
                    @csrf
                    <input type="hidden" name="student_login_id" value="{{Auth::user()->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ชื่อโครงงาน<b class="text-danger"> *</b></label>
                                <input type="text" class="form-control" placeholder="กรุณากรอกคำร้อง" name="name">
                            </div>
                            @error('name')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="typeproject_id">ประเภทของโครงงาน<b class="text-danger"> *</b></label>
                                <select class="form-control" name="typeproject_id">
                                    <option value="">กรุณาเลือกประเภทโครงงาน</option>
                                    @foreach($typeproject as $row)
                                        <option value="{{$row->typeproject_id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('typeproject_id')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>นักศึกษาคนที่ 1<b class="text-danger"> *</b></label>
                                <input class="form-control" name="student1_id" placeholder="กรุณาใส่รหัสนักศึกษาคนที่ 1"/>
                            </div>
                            @error('student1_id')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>นักศึกษาคนที่ 2<b class="text-danger"> *</b></label>
                                <input class="form-control" name="student2_id" placeholder="กรุณาใส่รหัสนักศึกษาคนที่ 2"/>
                            </div>
                            @error('student2_id')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>นักศึกษาคนที่ 3<b class="text-danger"> *</b></label>
                                <input class="form-control" name="student3_id" placeholder="กรุณาใส่รหัสนักศึกษาคนที่ 3"/>
                            </div>
                            @error('student3_id')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                        <label>อาจารย์ที่ปรึกษา<b class="text-danger"> *</b></label>
                        <select class="form-control" id="advisor" onChange="Advisor()" name="advisor_id">
                            <option value="">กรุณาเลือกอาจารย์ที่ปรึกษา</option>
                            @foreach($teacher as $row)
                                <option value="{{$row->teacher_id}}">{{$row->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        @error('advisor_id')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>คณะกรรมการท่านที่ 1<b class="text-danger"> *</b></label>
                                <select class="form-control" name="director1_id">
                                    <option value="">กรุณาเลือกคณะกรรมการท่านที่ 1</option>
                                    @foreach($teacher as $row)
                                        <option value="{{$row->teacher_id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('director1_id')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>คณะกรรมการท่านที่ 2<b class="text-danger"> *</b></label>
                                <select class="form-control" name="director2_id">
                                    <option value="">กรุณาเลือกคณะกรรมการท่านที่ 2</option>
                                    @foreach($teacher as $row)
                                        <option value="{{$row->teacher_id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('director2_id')
                            <div class="my-2">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                            <label>ข้อมูลเบื้องต้น<b class="text-danger"> *</b></label>
                            <textarea class="form-control" rows="4" name="description" placeholder="กรุณาเขียนคำร้องข้อมูลเบื้องต้น"></textarea>
                        </div>
                        @error('description')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                        <button type="summit" class="btn btn-success">ส่งคำร้อง</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <script type="text/javascript">
            function Advisor()
            {
                var advisor = document.getElementById("advisor");
                Inputadvisor = advisor.value;
            }
            </script>
@endsection