@extends('users.teacher.layout')
@section('title',"Students Details")


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline ">
                    <div class="card-body box-profile ">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-left">
                                    <img class="profile-user-img-student img-fluid img-circle"
                                        src="{{$student_details->user->picture}}" alt="User profile picture"
                                        class="updated_picture">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h3 class="profile-username"> <span
                                        style="color:#565656; font-weight:bold">{{$student_details->firstname}}
                                    </span> <span style="color:#666666">{{$student_details->lastname}} </span></h3>
                                <p>{{ $student_details->about }}</p>
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
                            {{ $student_details->user->email }}
                        </p>
                        <hr>
                        <strong><i class="fas fa-phone mr-1"></i> Mobile Number</strong>
                        <p class="text-muted">
                            {{ $student_details->phone }}
                        </p>
                        <hr>
                        <strong><i class="fas fa-book mr-1"></i> Education</strong>
                        <p class="text-muted">
                            B.S. in Computer Science from University of Science and Technology Chirttagong
                        </p>
                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Gender</strong>
                        <p class="text-muted">{{ $student_details->gender }}</p>
                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Blood Group</strong>
                        <p class="text-muted">{{ $student_details->blood_group }}</p>
                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">{{ $student_details->address }}</p>
                        <hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                        <p class="text-muted">
                            {{ $student_details->skill }}
                        </p>
                        <hr>

                        <strong><i class="far fa-calendar-alt mr-1"></i> Birthday</strong>
                        <p class="text-muted">{{ $student_details->birthday }}</p>
                        <hr>

                        <div class="row">
                            <div class="col">
                                <strong><i class="fas fa-book mr-1"></i> HSC GPA</strong>
                                <p class="text-muted">{{ $student_details->hsc_gpa }}</p>
                            </div>
                            <div class="col">
                                <strong><i class="fas fa-book mr-1"></i> SSC GPA</strong>
                                <p class="text-muted">{{ $student_details->ssc_gpa }}</p>
                            </div>
                            <div class="col">
                                <strong><i class="fas fa-book mr-1"></i> JSC GPA</strong>
                                <p class="text-muted">{{ $student_details->jsc_gpa }}</p>
                            </div>
                            <div class="col">
                                <strong><i class="fas fa-book mr-1"></i> PSC GPA</strong>
                                <p class="text-muted">{{ $student_details->psc_gpa }}</p>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
