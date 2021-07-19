@extends('users.teacher.layout')
@section('title',"First Semester")
@section('nav_bar')
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-white navbar-light ml-2">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/1'))?'active': ''}}" href="{{ route('courses.all_students',1) }}">1st Semester
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/2'))?'active': ''}}" href="{{ route('courses.all_students',2) }}">2nd Semester
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/3'))?'active': ''}}" href="{{ route('courses.all_students',3) }}">3nd Semester
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/4'))?'active': ''}}" href="{{ route('courses.all_students',4) }}">4th Semester
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/5'))?'active': ''}}" href="{{ route('courses.all_students',5) }}">5th Semester
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/6'))?'active': ''}}" href="{{ route('courses.all_students',6) }}">6th Semester
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/7'))?'active': ''}}" href="{{ route('courses.all_students',7) }}">7th Semester
                    </a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item {{ (request()->is('teacher/semester/8'))?'active': ''}}" href="{{ route('courses.all_students',8) }}">8th Semester
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>


@endsection


@section('content')
<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">First Semester Students</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>IMG</th>

                  {{-- <th>Department Name</th> --}}
                  <th>Reg.No</th>
                  <th>ID.No</th>
                  <th>Student Name</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                  @php $i=1;

                  @endphp
        @forelse($students as $student)
        {{-- src="{{$my_batch_student->user->picture}}"  --}}
                <tr data-widget="expandable-table" aria-expanded="false">
                  <td><img class="img-circle img-bordered-sm" alt="S"width="50"></td>
                  <td>{{$student->registration_number}}</td>
                  <td>{{$student->roll_number}}</td>

                  <td>{{$student->firstname}} {{$student->lastname}}</td>

                  <td>
                  <a href="{{ route('teacher.student_profile',$student->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>  Show Details </a>
              </td>
            </tr>
@empty
<div class="text-danger">No Data Available</div>
@endforelse

    </tbody>
    </table>

    </div>



    </div></div></div></div>
    @endsection