@extends('users.admin.layout')
@section('title',"Assign Courses")


@section('nav_bar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">


            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item " href="{{ route('add.course') }}">Add Course
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('course_data') }}">View Course
                </a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('add.coursetype') }}">Add CourseType
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('coursetype_data') }}">View CourseType
                </a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item active" href="{{ route('admin.assign_courses') }}">Assign Courses
                </a>
            </li>

        </ul>

    </nav>
@endsection




@section('content')
<div class="container" style="padding-top:20px;">
    <div class="col-md-12">
    <div class="tab-content">
      <div class="tab-pane active" id="activity">
        <!-- Post -->
        <div class="card-header">
            <h3 class="card-title">Assign Courses</h3>
          </div>
          @if(Session::has('updated'))
          <div class="alert alert-warning" role='alert'>

          {{Session::get('updated')}}

          </div>
                  @endif



                  <div class="card-body">
                    <div class="card-body table-responsive p-0">
                      <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>Semester</th>
                  {{-- <th>Department Name</th> --}}
                  <th>Course Code</th>
                  <th>Course Title</th>
                  <th>INT</th>
                  <th>EXT</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @php $i=1;

                  @endphp
        @foreach($assign_courses as $assign_course)

                <tr data-widget="expandable-table" aria-expanded="false">
                  <td>{{$i++}}</td>
                  <td>{{$assign_course->semester->semester_name}}</td>
                  <td>{{$assign_course->course->course_code}}</td>
                  <td>{{$assign_course->course->course_name}}</td>
                  <td>{{$assign_course->teacher_internal}}</td>
                  <td>{{$assign_course->teacher_external}}</td>
                  <td>
                  <a href="{{route('admin.assign_courses_update',$assign_course->id)}}" class="btn btn-info"> Update</a>
              </td>
            </tr>

@endforeach

    </tbody>
    </table>

    </div>



    </div></div></div></div>
    @endsection
