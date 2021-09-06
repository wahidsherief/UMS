@extends('users.admin.layout')
@section('title',"Assign Courses")

@section('nav_bar')
@include('users.top_nav.admin_courses')
@endsection





@section('content')

<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Assign Courses</h3>
    </div>
    <div class="card-body table-responsive p-0 text-center">
        <table class="table table-borderless table-hover table-sm">
                            <thead>
                                <tr>
                                    <th class="sl"></th>
                                    <th>Semester</th>
                                    {{-- <th>Department Name</th> --}}
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>INT</th>
                                    <th>EXT</th>
                                    <th></th>
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
                                        @if($session_id==$latest_session)
                                        <a href="{{route('admin.assign_courses_update',$assign_course->id)}}"
                                            class="ums-tiny-btn text-info btn-sm"> Update</a>
                                        @endif
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>

                    </div>



                </div>
            </div>
        </div>
    </div>
    @if(Session::has('updated'))
    <div class="alert alert-warning" role='alert'>

        {{Session::get('updated')}}

    </div>
    @endif

    @endsection
