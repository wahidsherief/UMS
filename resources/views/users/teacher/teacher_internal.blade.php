@extends('users.teacher.layout')
@section('title',"Internal Activities")
@include('users.teacher.top_nav.internal_external')

@section('content')


<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Internal</h3>

    </div>
    <div class="card-body">
      <form action="{{route('add.course.submit')}}" method="POST">
        @csrf
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover table-sm ">
            <thead>
              <tr>
                <th class="sl">SL</th>
                {{-- <th>Department Name</th> --}}
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
                <td >{{$internal_course->course->course_name}}</td>
                <td>{{$internal_course->semester->semester_name}}</td>
                <td>
                    {{-- <a href="{{route('teacher.student_details',[$session_id,$internal_course->semester->id,$internal_course->course->id])}}"
                    class='btn btn-info btn-sm'><i class="fas fa-info-circle"></i> Students</a> --}}
                    <a class="btn btn-primary btn-sm mr-3" href="{{ route('teacher.my_courses_result',[$session_id, $internal_course->semester->id,$internal_course->course->id]) }}"><i class="fas fa-eye"></i> Result

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
