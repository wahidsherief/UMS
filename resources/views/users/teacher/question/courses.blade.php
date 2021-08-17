@extends('users.teacher.layout')
@section('title',"Upload Question")

@section('nav_bar')

@include('users.teacher.top_nav.question_without_search')
@endsection


@section('content')
<div class="card-body">
  <form action="{{route('add.course.submit')}}" method="POST">
    @csrf
    <div class="ums-content-heading">
      <h3 class="card-title">Courses</h3>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-borderless table-hover">

        <thead>
          <tr>
            <th class="sl">SL</th>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Semester</th>
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
            <td class='text-right'>
              <a class="ums-tiny-btn"
                href="{{ route('teacher.upload_question',[$session_id, $internal_course->course->id]) }}">Add Question

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
</div>
@endsection