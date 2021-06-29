
@extends('users.teacher.layout')
@section('title',"Internal Activities")

@section('content')

<div class="container" style="padding-top:20px;">
    <div class="col-md-12">
    <div class="tab-content">
      <div class="tab-pane active" id="activity">
        <!-- Post -->
        <div class="card-header">
            <h3 class="card-title">Internal Activities</h3>
          </div>
          @if(Session::has('updated'))
          <div class="alert alert-warning" role='alert'>

          {{Session::get('updated')}}

          </div>
                  @endif
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Serial</th>
                  {{-- <th>Department Name</th> --}}
                  <th>Course Code</th>
                  <th>Course Title</th>
                  <th>Semester</th>
                  <th>Result</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1;

                @endphp
@foreach($internal_courses as $internal_course)

{{-- @php    $batch_design=$batchdesign->teacher_id; @endphp --}}

{{-- @php $semester= $batchdesign->semester->id; @endphp
          <!-- ./card-header -->
@if($semester==$i) --}}
         <tr data-widget="expandable-table" aria-expanded="false">
          <td>{{$i++}}  </td>
          <td>{{$internal_course->course->course_code}}</td>
          <td>{{$internal_course->course->course_name}}</td>
         <td>{{$internal_course->semester->semester_name}}</td>
          <td><a href="{{route('teacher.student_details',[$session_id,$internal_course->semester->id,$internal_course->course->id])}}"class='btn btn-info'>Add Result</a></td>

    @endforeach
    </tbody>
    </table>

    </div>



    </div></div></div></div>


    <div class="container" style="padding-top:20px;">
        <div class="col-md-12">
        <div class="tab-content">
          <div class="tab-pane active" id="activity">
            <!-- Post -->
            <div class="card-header">
                <h3 class="card-title">External Activities</h3>
              </div>
              @if(Session::has('updated'))
              <div class="alert alert-warning" role='alert'>

              {{Session::get('updated')}}

              </div>
                      @endif
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Serial</th>
                      {{-- <th>Department Name</th> --}}
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Semester</th>
                      <th>Result</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i=1;
        $userid=Auth::user()->id;
                    @endphp
    @foreach($external_courses as $external_course)

    {{-- @php    $batch_design=$batchdesign->teacher_id; @endphp --}}

    {{-- @php $semester= $batchdesign->semester->id; @endphp
              <!-- ./card-header -->
    @if($semester==$i) --}}
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>{{$i++}}  </td>
                      <td>{{$external_course->course->course_code}}</td>
                      <td>{{$external_course->course->course_name}}</td>
                      <td>{{$external_course->semester->semester_name}}</td>
                      <td><a href="#"class='btn btn-info'>Add Result</a></td>

        @endforeach
        </tbody>
        </table>

        </div>



        </div></div></div></div>




@endsection
