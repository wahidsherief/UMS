@extends('users.teacher.layout')
@section('title',"Course List")
@section('nav_bar')
@include('users.teacher.top_nav.small_nav')
@endsection
@section('content')
<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Courses</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th class="sl"></th>

                    {{-- <th>Department Name</th> --}}
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Internal</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1;

                @endphp
                @foreach($assign_courses as $assign_course)

                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $i++ }}</td>
                    <td>{{$assign_course->course->course_code}}</td>
                    <td>{{$assign_course->course->course_name}}</td>

                    <td>{{$assign_course->teacher_internal}}</td>


                    <td class='text-right'>
                        <a
                            href="{{ route('teacher.my_batch_result_list',[$assign_course->semester_id,$assign_course->course_id]) }}"><span
                                class='ums-tiny-btn'>Details</span> </a>
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