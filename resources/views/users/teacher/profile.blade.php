@extends('users.teacher.layout')
@section('title', 'teacher profile')

@section('content')
<div class="container">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-square" src="{{ Auth::user()->picture }}" alt="User profile picture" class="updated_picture">
                            </div>

                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                            <input type="file" name="upload_profile_image" id="upload_profile_image" style="opacity:0,height:1px;display:none" class="updated_picture" />
                            <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"><b>Update Picture</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#publication" data-toggle="tab">Publication</a></li>
                                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a></li>

                            </ul>
                        </div><!-- /.card-header -->
                        {{-- <div class="card-header">
                            @if (Session::get('updated'))
                            <div class="alert alert-success">
                                {{ Session::get('updated') }}
                            </div>
                            @endif


                            @if (Session::get('error'))
                            <div class="alert alert-success">
                                {{ Session::get('error') }}
                            </div>
                            @endif
                        </div> --}}
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane col-md-10" id="personal_info">
                                    <!-- Post -->
                                    <form class="form-horizontal" method="POST" action="{{ route('teacher.UpdateInfo') }}" id="AdminInfoForm">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ $teacher->firstname. ' '.$teacher->lastname }}" name="name" disabled>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" value="{{$teacher->user->email }}" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Short-N</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" value="{{$teacher->teachers_short_name }}" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" value="{{$teacher->phone }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Blood-G</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" value="{{$teacher->blood_group }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" disabled> {{$teacher->address }} </textarea>
                                            </div>
                                        </div>

                                    </form>
                                </div>



                                <div class="tab-pane col-md-10" id="publication" >
                                 @if(!$publication_count)

                                    <form class="form-horizontal" action="{{ route('teacher.publication.submit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Title" name="title" id="title">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" placeholder="Publication file" name="publication_file">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Link
                                                </label>
                                            <div class="col-sm-10">
                                                <input type="url" class="form-control" placeholder="Link" name="link">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary"> Save Publication</button>
                                            </div>
                                        </div>

                                    </form>

                                    @else
                                    <form class="form-horizontal" action="{{ route('teacher.publication.submit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Title" name="title" id="title" value={{ $publication->title }} disabled>

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Link
                                                </label>
                                            <div class="col-sm-10">
                                                <input type="url" class="form-control" placeholder="Link" name="link" value={{ $publication->link }} disabled>
                                                <span class="text-danger error-text cnewpassword_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10">
                                                <a class="btn btn-primary btn-small form-control" href="{{ route('teacher.publication_file',$publication->id) }}"><i class="fas fa-eye ml-1"></i> View Publication</a>

                                            </div>
                                        </div>



                                    </form>

@endif


                                </div>








                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="change_password">


                                    @if (Session::get('error_password_update'))

                                    <script>
                                        swal("Failed", "Something went wrong. Please try again", "error");

                                    </script>
                                    @endif


                                    @if (Session::get('success_password_update'))

                                    <script>
                                        swal("Success", "Password has been updated successfully", "success");

                                    </script>
                                    @endif

                                    <form class="form-horizontal  col-md-10" action="{{ route('teacherChangePassword') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Old</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="Old Passsword" name="oldpassword" id="oldpassword">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">New </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="New Passsword" name="newpassword" id="newpassword">
                                                <span class="text-danger error-text newpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Confirm</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="Confirm Passsword" name="cnewpassword" id="cnew_password">
                                                <span class="text-danger error-text cnewpassword_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Update Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
    <!-- /.content -->

</div>
@if (Session::get('publication'))

<script>
    swal("Good Job", "Publication added successfully", "success");

</script>
@endif

@endsection
