@extends('users.teacher.layout')
@section('title',"External Activities")
@include('users.teacher.top_nav.internal_external')

@section('content')

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">External</h3>
    </div>
    <div class="card-body">
      <form action="{{route('add.course.submit')}}" method="POST">
        @csrf
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover table-sm">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Semester</th>
                <th>Student Details</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1;
              $userid=Auth::user()->id;
              @endphp
              @foreach($external_courses as $external_course)
              <tr data-widget="expandable-table" aria-expanded="false">
                <td>{{$i++}} </td>
                <td>{{$external_course->course->course_code}}</td>
                <td>{{$external_course->course->course_name}}</td>
                <td>{{$external_course->semester->semester_name}}</td>
                <td><a href="#" class='btn btn-info btn-sm'>Details</a></td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection
