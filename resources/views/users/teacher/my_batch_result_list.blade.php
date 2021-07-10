@extends('users.teacher.layout')
@section('title',"My Batch")
@section('nav_bar')
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item" href="{{ route('teacher.batch_all_student') }}">Student List
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

            <!-- Right navbar links -->

        </nav>


@endsection
@section('content')
<div class="container">
    <h2> </h2>

    <div class="container">
        <div class="card card-secondary">
            <div class="card-header text-center">
              <b>  <h4>University of Science and Technology Chittagong</h2>
                <h5>Faculty of Science Engineering & Technology</h3></b>
                <h6>Department of Computer Science & Engineering</h5>
            <b>    <h5>Batch -XXIX, 8Semester Final Examination, 2020</h3></b>


            </div>
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
                            Credit Code: <b>{{ $course->course_credit }}</b> Total: 300
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
                <a href="{{ route('teacher.my_batch_result_export',$course->id) }}" class="btn btn-warning">Export as PDF </a>
            </div>
        </div>
    </div>




</div>



@endsection
