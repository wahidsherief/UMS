@extends('users.teacher.layout')
@section('title',"Question")

@section('nav_bar')
@include('users.teacher.top_nav.question')
@endsection

@section('content')
<div class="container">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="ums-content-heading">
                            <h3 class="card-title">Available Notices</h3>
                        </div>
                      <div class="card-body table-responsive p-0">
                        <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
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
                                        width="40"></td>

                                <td>{{$question->user->name}}</td>
                                <td>{{$question->session->session_name}}</td>
                                <td>{{$question->course->course_code}}</td>
                                <td>{{$question->course->course_name}}</td>
                                <td>{{$question->question_type}}</td>
                                <td  class='text-right'>
                                    <a href="{{route('teacher.question_download',$question->id)}}" class="ums-tiny-btn text-info"
                                        style="color:white"> <i class="fas fa-eye"></i></a>

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
</div></div>
@endsection
