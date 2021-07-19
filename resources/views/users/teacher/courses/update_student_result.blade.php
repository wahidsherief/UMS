@extends('users.teacher.layout')
@section('title', 'Students Details')
@section('nav_bar')
<!-- Navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light ml-2">

    <ul class="navbar-nav">


        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item active" href="{{ route('MyBatchController.students') }}">Student List
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('teacher.my_batch_courses') }}">Courses
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="dropdown-item" href="{{ route('MyBatchController.notification') }}">Notification
            </a>
        </li>

    </ul>


</nav>


@endsection

@section('content')



<!-- Main content -->
<section class="content">
    <div class="container-fluid pt-2">
        <div class="row">

            <div class="col-md-4 offset-md-1">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="card">

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="personal_info">
                                <!-- Post -->
                                <form class="form-horizontal" method="POST" action="{{ route('courses.update_result_submit',[$session_id,$student_id,$course_id]) }}" id="AdminInfoForm">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-5 col-form-label">Class Test</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control student-info" id="inputName" name="class_test" value="{{ $result->class_test }}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-5 col-form-label">Attendance</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control student-info" id="inputName" name="attendance" value="{{ $result->attendance }}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-5 col-form-label">Part A </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control student-info" id="inputName" name="part_a" value="{{ $result->part_a }}" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-5 col-form-label">Part B </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control student-info" id="inputName" name="part_b" value="{{ $result->part_b }}" >
                                        </div>
                                    </div>


                                    {{-- <div class="form-group row">
                                        <label for="inputName" class="col-sm-5 col-form-label">N-Grade </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control student-info" id="inputName" placeholder="Name" value="{{ $result->n_grade }}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-5 col-form-label">L-Grade </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control student-info" id="inputName" placeholder="Name" value="{{ $result->l_grade }}" >
                                        </div>
                                    </div> --}}

                                    <div class="form-group  text-center">

                                        <button type="submit" class="btn btn-warning"><i class="fa fa-check-circle"
                                                aria-hidden="true"></i>
                                            Update Result</button>
                                    </div>
                                </form></div></div></div></div></div>



            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">
                        <div class="tab-content">

                            <div class="form-group row">
                                <label for="inputName" class="col-sm-4 offset-sm-1 col-form-label">Course Name </label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="inputName" placeholder="Name" value="{{$result->course->course_name}}" disabled style="background:transparent;border:none">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-4 offset-sm-1 col-form-label">Course Code </label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="inputName" placeholder="Name" value="{{$result->course->course_code}}" disabled style="background:transparent;border:none">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-4 offset-sm-1 col-form-label">Course Credit </label>
                                <div class="col-sm-6">
                                    <input type="" class="form-control" id="inputName" placeholder="Name" value="{{$result->course->course_credit}}" disabled style="background:transparent;border:none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


@endsection
