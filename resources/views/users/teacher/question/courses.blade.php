@extends('users.teacher.layout')
@section('title',"Upload Question")



@section('nav_bar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">


            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item " href="{{ route('teacher.show_questions') }}">All Questions
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item active" href="{{ route('teacher.add_course_question') }}">Add Question
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item " href="{{ route('teacher.my_question',Auth::user()->id) }}">My Questions
                </a>
            </li>

        </ul>
    </nav>
@endsection

@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Select Course</h3>

    </div>
    <div class="card-body">
      <form action="{{route('add.course.submit')}}" method="POST">
        @csrf
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th class="sl">SL</th>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Semester</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($internal_courses as $internal_course)
              <tr data-widget="expandable-table" aria-expanded="false">
                <td>{{$i++}} </td>
                <td>{{$internal_course->course->course_code}}</td>
                <td>{{$internal_course->course->course_name}}</td>
                <td>{{$internal_course->semester->semester_name}}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ route('teacher.upload_question',[$session_id, $internal_course->course->id]) }}"><i class="fas fa-upload"></i> Question

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>


</div>
@endsection
