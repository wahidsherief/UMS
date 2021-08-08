@extends('users.teacher.layout')
@section('title',"Students Details")


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline ">
                    <div class="card-body box-profile user-info">
                        <div class="row pb-4" style='border-bottom: 1px solid #ccc'>
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

                                <div>
                                    <div class="mt-2">
                                        <span>
                                            Email:
                                            <span
                                                class="text-muted text-lowercase">{{ $student_details->user->email }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Mobile:
                                            <span class="text-muted">{{ $student_details->phone }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Gender:
                                            <span class="text-muted">{{ $student_details->gender }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Blood Group:
                                            <span class="text-muted">{{ $student_details->blood_group }}</span>
                                        </span>
                                    </div>

                                    <p>
                                        Address:
                                        <span class="text-muted">{{ $student_details->address }}</span>
                                    </p>
                                </div>
                                {{-- <p>{{ $student_details->about }}</p> --}}
                                <p class='mt-2'>{{ $student_details->about }}</p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <strong>Education:</strong>
                                <div class='mt-2'>
                                    <p>Higher Secondary School Certficate</p>
                                    <p class="text-muted">Sample School and College</p>
                                    <p class="text-muted">
                                        <span>Result:</span>
                                        <span class="text-muted">{{ $student_details->hsc_gpa }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>Higher Secondary School Certficate</p>
                                    <p class="text-muted">Sample School and College</p>
                                    <p class="text-muted">
                                        <span>Result:</span>
                                        <span class="text-muted">{{ $student_details->hsc_gpa }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>Higher Secondary School Certficate</p>
                                    <p class="text-muted">Sample School and College</p>
                                    <p class="text-muted">
                                        <span>Result:</span>
                                        <span class="text-muted">{{ $student_details->hsc_gpa }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>Higher Secondary School Certficate</p>
                                    <p class="text-muted">Sample School and College</p>
                                    <p class="text-muted">
                                        <span>Result:</span>
                                        <span class="text-muted">{{ $student_details->hsc_gpa }}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-6">
                                <strong>Skills:</strong>
                                <div class='mt-2'>
                                    <p class="text-muted">
                                        <span class="text-muted">{{ $student_details->skill }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection

















