
@extends('users.student.layout')
@section('title',"student profile")

@section('content')
<div class="container">


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline ">
                        <div class="card-body box-profile ">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-square" src="{{ Auth::user()->picture }}" alt="User profile picture" class="updated_picture">
                                        </div>



                                        <input type="file" name="upload_profile_image" id="upload_profile_image" style="opacity:0,height:1px;display:none" class="updated_picture" />
                                        <a href="javascript:void(0)" class="btn btn-primary btn-block mt-2" id="change_picture_btn"><b>Update Picture</b></a>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                      <h3 class="profile-username text-left">{{ Auth::user()->name }}</h3>
                                    <p>{{ $student->about }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Information</h3>
                        </div>
                        <div class="card-body">

                            <strong><i class="fas fa-envelope mr-1"></i> Email Address</strong>
                            <p class="text-muted">
                                {{ $student->user->email }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-phone mr-1"></i> Mobile Number</strong>
                            <p class="text-muted">
                                {{ $student->phone }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>
                            <p class="text-muted">
                                B.S. in Computer Science from University of Science and Technology Chirttagong
                            </p>
                            <hr>

                            {{-- <strong><i class="far fa-file-alt mr-1"></i> Gender</strong>
                            <p class="text-muted">{{ $student_details->gender }}</p>
                            <hr> --}}

                            <strong><i class="far fa-file-alt mr-1"></i> Blood Group</strong>
                            <p class="text-muted">{{ $student->blood_group }}</p>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">{{ $student->address }}</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                            <p class="text-muted">
                                {{ $student->skill }}
                            </p>
                            <hr>

                            <strong><i class="far fa-calendar-alt mr-1"></i> Birthday</strong>
                            <p class="text-muted">{{ $student->birthday }}</p>
                            <hr>

                            <div class="row">
                                <div class="col">
                                    <strong><i class="fas fa-book mr-1"></i> HSC GPA</strong>
                                    <p class="text-muted">{{ $student->hsc_gpa }}</p>
                                </div>
                                <div class="col">
                                    <strong><i class="fas fa-book mr-1"></i> SSC GPA</strong>
                                    <p class="text-muted">{{ $student->ssc_gpa }}</p>
                                </div>
                                <div class="col">
                                    <strong><i class="fas fa-book mr-1"></i> JSC GPA</strong>
                                    <p class="text-muted">{{ $student->jsc_gpa }}</p>
                                </div>
                                <div class="col">
                                    <strong><i class="fas fa-book mr-1"></i> PSC GPA</strong>
                                    <p class="text-muted">{{ $student->psc_gpa }}</p>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

                </div>
            </section>
        </div>
@endsection
