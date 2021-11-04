@extends('layout.admin.app')

@section('content')
<div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">
                ถังขยะข้อมูล
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="py-12">
                <div class="container">
                    <div class="row">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ตำแหน่ง</th>
                                    <th scope="col">ชื่อ-นามสกุล</th>
                                    <th scope="col">อีเมล</th>
                                    <th scope="col">เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <form action="{{route('admin.FormUpdateTeacher')}}" method="get">
                                                @csrf
                                                <input type="hidden" name="teacher_id" value="">
                                                <button type="summit" class="btn btn-warning">กู้คืนข้อมูล</button>
                                            </form>
                                        </div>
                                        <div class="col-6">
                                            <form action="#" method="post">
                                                @csrf
                                                <input type="hidden" name="teacher_id" value="">
                                                <button type="button" class="btn btn-danger">ลบถาวร</button>
                                            </form>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection