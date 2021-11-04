@extends('layout.student.app')

@section('content')
     <br>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">
                ผลการนัดสอบวิชาโครงงาน
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
                                    <th scope="col">ผลการสอบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student as $row)
                                <tr>
                                    <td>1</td>
                                    <td>หัวข้อโครงงาน 1</td>
                                    <td>
                                        @if($row->status_test1_project1 != NULL)
                                            <div class="badge bg-success text-wrap" style="width: 6rem;">
                                            ผ่าน
                                            </div>
                                        @else
                                            <div class="badge bg-danger text-wrap" style="width: 6rem;">
                                            ไม่ผ่าน
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>สอบให้เกรดโครงงาน 1</td>
                                    <td>
                                        @if($row->status_test2_project1 != NULL)
                                            <div class="badge bg-success text-wrap" style="width: 6rem;">
                                            ผ่าน
                                            </div>
                                        @else
                                            <div class="badge bg-danger text-wrap" style="width: 6rem;">
                                            ไม่ผ่าน
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>สอบ 70%</td>
                                    <td>
                                        @if($row->status_test1_project2 != NULL)
                                            <div class="badge bg-success text-wrap" style="width: 6rem;">
                                            ผ่าน
                                            </div>
                                        @else
                                            <div class="badge bg-danger text-wrap" style="width: 6rem;">
                                            ไม่ผ่าน
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>สอบ 100%</td>
                                    <td>
                                        @if($row->status_test2_project2 != NULL)
                                            <div class="badge bg-success text-wrap" style="width: 6rem;">
                                            ผ่าน
                                            </div>
                                        @else
                                            <div class="badge bg-danger text-wrap" style="width: 6rem;">
                                            ไม่ผ่าน
                                            </div>
                                        @endif
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