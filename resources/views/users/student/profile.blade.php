
@extends('users.student.layout')
@section('title',"student profile")

@section('content')
<div class="container">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ Auth::user()->picture}}" alt="User profile picture" class="updated_picture">
                  </div>

                  <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                  <p class="text-muted text-center">Web Developer</p>


<input type="file" name="upload_profile_image" id="upload_profile_image" style="opacity:0,height:1px;display:none" class="updated_picture"/>
                  <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"><b>Update Picture</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- About Me Box -->
              {{-- <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>

                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                  <p class="text-muted">Malibu, California</p>

                  <hr>

                  <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                  <p class="text-muted">
                    <span class="tag tag-danger">UI Design</span>
                    <span class="tag tag-success">Coding</span>
                    <span class="tag tag-info">Javascript</span>
                    <span class="tag tag-warning">PHP</span>
                    <span class="tag tag-primary">Node.js</span>
                  </p>

                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.card-body -->
              </div> --}}
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                    <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a></li>

                  </ul>
                </div><!-- /.card-header -->
                <div class="card-header">
                    @if( Session::get('updated'))
                    <div class="alert alert-success">
                  {{Session::get('updated')}}
                    </div>
@endif


@if( Session::get('error'))
<div class="alert alert-success">
    {{Session::get('error')}}
</div>
@endif


                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="personal_info">
                      <!-- Post -->
                      <form class="form-horizontal" method="POST" action="{{route('student.UpdateInfo')}}
                      "id="AdminInfoForm">
                      @csrf
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ Auth::user()->name}}" name="name" disabled>
<span class="text-danger error-text name_error"></span>
@error('name')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email}}" name="email" disabled>
                            <span class="text-danger error-text email_error"></span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Account Type</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name" value="Student Account" disabled>
                          </div>
                        </div>


                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Save Profile</button>
                          </div>
                        </div>

                      </form>

                      <!-- /.post -->


                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="change_password">
                      <!-- The timeline -->


    @if( Session::get('error_password_update'))

<script>
        swal("Failed", "Something went wrong. Please try again", "error");
</script>
@endif


@if( Session::get('success_password_update'))

<script>
        swal("Success", "Password has been updated successfully", "success");
</script>
@endif

                      <form class="form-horizontal" action="{{route('studentChangePassword')}}" method="POST">
@csrf
                        <div class="form-group row">
                          <label for="password" class="col-sm-2 col-form-label">Old Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control"  placeholder="Old Passsword"
                            name="oldpassword" id="oldpassword"
                            >
                            <span class="text-danger error-text oldpassword_error"></span>
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control"  placeholder="New Passsword"
                              name="newpassword" id="newpassword"
                              >
                              <span class="text-danger error-text newpassword_error"></span>
                            </div>
                          </div>  <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" placeholder="Confirm Passsword"
                              name="cnewpassword" id="cnew_password"
                              >
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


@endsection
