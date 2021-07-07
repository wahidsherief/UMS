@extends('users.teacher.layout')
@section('title',"Question")

@section('content')
<div class="container" style="padding-top:20px;">
    <div class="col-md-12">
        <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <!-- Post -->
                <div class="card-header">
                    <div class="search-container">
                        <form action="{{ route('question.search') }}" class='form-inline' >
                            <select class="form-control" name="query" style="width:20% !important">

                                <label for="exampleInputEmail1">Select Semester</label>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_code }}
                                </option>
                                @endforeach
                            </select>
                          <button type="submit" class='btn btn-success'>Search</button>
                        </form>
                      </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Session</th>
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Type</th>
                                <th>show</th>
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
                                    <a href="{{route('teacher.question_download',$question->id)}}" class="btn"
                                        style="background:#A4066A;color:white"> <i class="fas fa-eye"></i></a>

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
@endsection
