@extends('users.teacher.layout')

@section('nav_bar')
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item active" href="{{ route('teacher.batch_all_student') }}">Student List
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


@section('title',"Students Details")
@section('content')
<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">All Student List</h3>
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
        @foreach($my_batch_students as $my_batch_student)

                <tr data-widget="expandable-table" aria-expanded="false">
                  <td><img class="img-circle img-bordered-sm" src="{{$my_batch_student->user->picture}}" alt="U"width="50"></td>
                  <td>{{$my_batch_student->registration_number}}</td>
                  <td>{{$my_batch_student->roll_number}}</td>

                  <td>{{$my_batch_student->firstname}} {{$my_batch_student->lastname}}</td>

                  <td>
                  <a href="{{ route('teacher.my_batch_student_profile',$my_batch_student->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>  Show Details </a>
              </td>
            </tr>

@endforeach

    </tbody>
    </table>

    </div>



    </div></div></div></div>
    @endsection
