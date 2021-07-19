@extends('users.teacher.layout')
@section('title',"Students Details")
@section('nav_bar')
<!-- Navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light ml-2">
    <!-- Left navbar links -->
    {{-- <ul class="navbar-nav">


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

    </ul> --}}

    <!-- Right navbar links -->

</nav>


@endsection

@section('content')



<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img-student img-fluid img-squre" src="{{$student_details->user->picture}}" alt="User profile picture" class="updated_picture" width="200">
                        </div>

                        <h3 class="profile-username text-center">{{$student_details->firstname}}
                            {{$student_details->lastname}}</h3>


                        @if($add_result==1)
                        <div class="text-center">
                            <a href="{{ route('add.result',[$session_id,$student_id,$student_details->semester_id,$course_id]) }}" class="btn btn-info btn-md"><i class="fas fa-plus-circle"></i> Add Result</a>

                        </div>
                        @else
                        <div class="row">
                            <div class="col">
                                <div class="text-center">
                                    <a href="{{ route('courses.show_result',[$session_id,$student_id,$course_id]) }}" class="btn btn-primary btn-md"><i class="fas fa-eye"></i> Show Result</a>

                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <a href="{{ route('courses.update_result',[$session_id,$student_id,$course_id]) }}" class="btn btn-warning btn-md"><i class="fas fa-eye"></i> Update Result</a>

                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <!-- /.col -->
            <div class="col-md-7">
                <div class="card">

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="personal_info">
                                <!-- Post -->
                                <form class="form-horizontal" method="POST" action="{{route('teacher.UpdateInfo')}}
                  " id="AdminInfoForm">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control student-info" id="inputName" placeholder="Name" value="{{$student_details->firstname}} {{$student_details->lastname}}" name="name" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->user->email}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">Reg.No</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->registration_number}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">ID.No</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->roll_number}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->phone}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">Blood G-</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->blood_group}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">HSC GPA</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->hsc_gpa}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">SSC GPA</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->ssc_gpa}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">JSC GPA-</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->jsc_gpa}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputEmail" class="col-sm-2 col-form-label">PSC GPA-</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control student-info" id="inputEmail" placeholder="Email" value="{{$student_details->psc_gpa}}" name="email" disabled>
                                            <span class="text-danger error-text email_error"></span>

                                        </div>
                                    </div>


                                </form>

                                <!-- /.post -->


                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->

                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="personal_information">

                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


@endsection
