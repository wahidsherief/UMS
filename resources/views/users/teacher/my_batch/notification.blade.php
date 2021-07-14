@extends('users.teacher.layout')
@section('title',"Notification")
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
            <a class="dropdown-item" href="{{ route('MyBatchController.notification') }}">Notification
            </a>
        </li>

    </ul>
</nav>


<div class="container">


    <div class="card card-secondary">
        <!-- /.card-header -->
        <div class="card-header">Result</div>
        <div class="card-body">
            <div class="card-body table-responsive p-0">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="sl">SL</th>
                            <th>Reg.No</th>
                            <th>Roll.No</th>
                            <th>Name of the Students</th>


                            @foreach($courses as $course)
                            <th>
                                {{ $course->course->course_code }}

                            </th>
                            @endforeach


                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($my_batch_students as $student)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td> {{$i++}} </td>
                            <td>{{ $student->registration_number }}</td>
                            <td>{{ $student->roll_number }}</td>
                            <td>{{ $student->firstname }} {{  $student->lastname }}</td>
@foreach($available_courses as $available_course)
<td>
    {{ $available_course->l_grade }}
</td>
@endforeach



                        </tr>


                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

@endsection
