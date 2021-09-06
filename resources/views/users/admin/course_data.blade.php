@extends('users.admin.layout')
@section('title',"Course Data")

@section('nav_bar')
@include('users.top_nav.admin_courses')
@endsection



@section('content')

  <div class="card-body">
        <div class="ums-content-heading">
            <h3 class="card-title">Available Courses</h3>
          </div>

        <div class="card-body table-responsive p-0 text-center">
            <table class="table table-borderless table-hover table-sm">
            <thead>
              <tr>
                <th class="sl"></th>
                {{-- <th>Department Name</th> --}}
                <th>Semester</th>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Course Credit</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($courses as $course)
              <!-- ./card-header -->
              <tr data-widget="expandable-table" aria-expanded="false">
                <td class='text-left'> {{$i++}}</td>
                {{-- <td>{{$course->department->department_name}}</td> --}}
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
    </div>

@endsection
