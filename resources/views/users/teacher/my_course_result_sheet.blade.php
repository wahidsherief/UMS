@extends('users.teacher.layout')
@section('title',"My Batch")
@section('nav_bar')
<!-- Navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('MyBatchController.students') }}">Student List
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('teacher.my_batch_courses') }}">Courses
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="">Notification
            </a>
        </li>

    </ul>
</nav>


@endsection
@section('content')
<div class="container">

    <div class="container">
        <div class="card card-secondary">

            <!-- /.card-header -->
            <div class="card-body">
                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover align-top">
                        <thead class="align-top">
                            <tr>
                                <th class="sl align-middle">SL</th>
                                <th  class="align-middle">Reg. No</th>
                                <th class="align-middle">ID No</th>
                                <th class="lg-col align-middle">Student Name</th>
                                <th  class="align-middle">Attd. (30)</th>
                                <th  class="align-middle">Class Test (60)</th>
                                <th  class="align-middle">Part A (105)</th>
                                <th  class="align-middle">Part B (105)</th>
                                <th  class="align-middle">Total (300)</th>
                                <th class="align-middle">%</th>
                                <th class="align-middle">N Grade</th>
                                <th class="align-middle">L Grade</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1;

                            @endphp
                            @foreach($results as $result)


                            <!-- ./card-header -->

                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td> {{$i++}} </td>

                                <td>{{$result->student->registration_number}}</td>
                                <td>{{$result->student->roll_number}}</td>
                                <td class="text-left">{{$result->student->firstname .' '. $result->student->lastname}} </td>
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

                <a href="{{route('result.my_course_student',[$session_id,$semester_id,$course->id])}}"
                    class='btn btn-info btn-sm'><i class="fas fa-plus-circle"></i> Add Result</a>
                <a href="{{ route('teacher.my_course_result_export',$course->id) }}" class="btn btn-warning btn-sm">Export as
                    PDF </a>
            </div>
        </div>
    </div>




</div>



@endsection
