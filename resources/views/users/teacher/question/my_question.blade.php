@extends('users.teacher.layout')
@section('title',"Question")

@section('nav_bar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">


            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('teacher.show_questions') }}">All Questions
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('teacher.add_course_question') }}">Add Question
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item active" href="{{ route('teacher.my_question',Auth::user()->id) }}">My Questions
                </a>
            </li>

        </ul>
        <div class="search-container offset-sm-5">
            <form action="{{ route('question.search') }}" class='form-inline' >
                <select class="form-control" name="query" style="width:150px">

                    <label for="exampleInputEmail1">Select Semester</label>
                    @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_code }}
                    </option>
                    @endforeach
                </select>

              <button type="submit" class='btn btn-success ml-2'>Search</button>
            </form>
          </div>
    </nav>
@endsection
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="tab-content">
            <div class="tab-pane active" id="activity">

                <div class="card card-secondary">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">

                            <table class="table table-bordered table-hover align-top">
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
                                    <a href="{{route('teacher.question_download',$question->id)}}" class="btn btn-info"
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
