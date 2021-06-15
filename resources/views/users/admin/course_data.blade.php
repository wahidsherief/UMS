@extends('users.admin.layout')
@section('title',"Course Data")


@section('content')
<div class="container" style="padding-top:20px;">
    <div class="col-md-12">
    <div class="tab-content">
      <div class="tab-pane active" id="activity">
        <!-- Post -->
        <div class="card-header">
            <h3 class="card-title">Course Data</h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>Department Name</th>
                  <th>Batch Name</th>
                  <th>Semester Name</th>
                  <th>Course Name</th>
                  <th>Course Credit</th>
                </tr>
              </thead>
              <tbody>
                  @php $i=1; @endphp
        @foreach($courses as $course)


          <!-- ./card-header -->


                <tr data-widget="expandable-table" aria-expanded="false">
                  <td> {{$i++}}</td>
                  <td>{{$course->department->department_name}}</td>
                  {{-- <td>{{$course->batch->batch_name}}</td> --}}
                  <td>{{$course->semester->semester_name}}</td>

                  <td>{{$course->course_name}}</td>
                  <td>{{$course->course_code}}</td>
                  <td>{{$course->course_credit}}</td>
                  {{-- <td> <span class="description">{{$department->created_at->diffForHumans()}}</span></td> --}}

                  {{-- <td>
                      <a href="{{route('student.single_notice',$department->id)}}" class="btn btn-info"> Update</a>
                      <a href="{{route('student.single_notice',$department->id)}}" class="btn btn-danger"> Delete</a>
                  </td> --}}
                </tr>


    @endforeach
    </tbody>
    </table>

    </div>



    </div></div></div></div>
    @endsection
