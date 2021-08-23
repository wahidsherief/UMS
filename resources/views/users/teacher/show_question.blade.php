@extends('users.teacher.layout')
@section('title',"Question")

@section('nav_bar')
@include('users.teacher.top_nav.question')
@endsection

@section('content')

    @if($count!==0)

    <div class="card-body">
      <div class="ums-content-heading">
        <h3 class="card-title">Available Questions</h3>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-borderless table-hover table-sm">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Session</th>
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questions as $question)


                            <!-- ./card-header -->


                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td> <img class="img-circle img-bordered-sm" src="{{$question->user->picture}}" alt="U"
                                        width="50"></td>

                                <td>{{$question->user->name}}</td>
                                <td>{{$question->session->session_name}}</td>
                                <td>{{$question->course->course_code}}</td>
                                <td>{{$question->course->course_name}}</td>
                                <td>{{$question->question_type}}</td>
                                <td>
                                    <a href="{{route('teacher.question_download',$question->id)}}"><span
                                        class='ums-tiny-btn'>View</span></a>

                                </td>
                            </tr>


                            @endforeach
                        </tbody>
                    </table>

                </div>
                @else

                <div class="text-muted font-italic text-danger text-center h6 pt-3 pb-3">No Question Available</div>
                @endif
            </div>

@endsection
