@extends('users.admin.layout')
@section('title',"Assign Courses")
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
