@extends('users.teacher.layout')
@section('title',"My Batch")
@section('nav_bar')
@include('users.teacher.small_nav')
@endsection
@section('content')
<div class="container">


    <div class="card card-secondary">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body table-responsive p-0">
                <div class="row">
                    <div class="col">
                        Course Code: <b>{{ $course->course_code }}</b>
                    </div>
                    <div class="col">
                        Course Title: <b>{{ $course->course_name }}</b>
                    </div>
                    <div class="col">
                        Credit Code: <b>{{ $course->course_credit }}</b> Total: <?php $total= $course->course_credit;

                            echo ($total*100); ?>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="sl">SL</th>
                            <th>Reg.No</th>
                            <th>Roll.No</th>
                            <th>Attendance(30)</th>
                            <th>Class Test(60)</th>
                            <th>Part A(105)</th>
                            <th>Part B(105)</th>
                            <th>Total(300)</th>
                            <th>Percentage</th>
                            <th>N Grade</th>
                            <th>L Grade</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($results as $result)


                        <!-- ./card-header -->


                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td> {{$i++}} </td>

                            <td>{{$result->student->registration_number}}</td>
                            <td>{{$result->student->roll_number}}</td>
                            <td>{{$result->attendance}}</td>
                            <td>{{$result->class_test}}</td>
                            <td>{{$result->part_a}}</td>
                            <td>{{$result->part_b}}</td>
                            <td>{{$result->total}}</td>
                            <td>@php echo number_format($result->percentage, 2, '.', ',');@endphp</td>
                            <td>{{$result->n_grade}}</td>
                            <td>{{$result->l_grade}}</td>



                        </tr>


                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('teacher.my_batch_result_export',$course->id) }}" class="btn btn-warning">Export as PDF
            </a>
        </div>
    </div>
</div>




@endsection