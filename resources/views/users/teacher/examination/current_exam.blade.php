@extends('users.teacher.layout')
@section('title',"Examination")
@section('nav_bar')
@include('users.top_nav.teacher_examination')
@endsection

@section('content')

@if($current_examination_count>=1)


<div class="card-body pt-4">
  <div class="ums-content-heading">
    <h3 class="card-title font-weight-bold">{{ $current_examination->name }}</h3>
  </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-borderless table-hover table-sm">
        <thead>
          <tr>
            <th class="sl"></th>
            {{-- <th>Department Name</th> --}}
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
              {{-- <a href="{{route('teacher.student_details',[$session_id,$internal_course->semester->id,$internal_course->course->id])}}"
              class='btn btn-info btn-sm'><i class="fas fa-info-circle"></i> Students</a> --}}
              <a class="ums-tiny-btn mr-2 text-success"
                href="{{ route('teacher.my_courses_result',[$session_id, $internal_course->semester->id,$internal_course->course->id]) }}"><i
                  class="fas fa-eye"></i> Result

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@else


<div class="text-muted font-italic text-danger text-center h6 pt-3 pb-3">No Current Available Now !!!</div>

@endif

</div>


@endsection
