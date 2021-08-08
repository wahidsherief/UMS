
@extends('users.student.layout')
@section('title',"student profile")




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
                                        src="{{ Auth::user()->picture }}" alt="profile " class="updated_picture">
                                    <input type="file" name="upload_profile_image" id="upload_profile_image"
                                        style="opacity:0,height:1px;display:none" class="updated_picture" />
                                    <a href="javascript:void(0)" class="btn btn-primary btn-block mt-2 btn-sm col-sm-6 offset-sm-3"
                                        id="change_picture_btn"><b>Update Picture</b></a>

                                </div>
                            </div>

                            <div class="col-md-8">
                                <h3 class="profile-username"> <span
                                        style="color:#565656; font-weight:bold">{{$student->firstname}}
                                    </span> <span style="color:#666666">{{$student->lastname}} </span></h3>

                                <div>
                                    <div class="mt-2">
                                        <span>
                                            Email:
                                            <span
                                                class="text-muted text-lowercase">{{ $student->user->email }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Mobile:
                                            <span class="text-muted">{{ $student->phone }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Gender:
                                            <span class="text-muted">{{ $student->gender }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Blood Group:
                                            <span class="text-muted">{{ $student->blood_group }}</span>
                                        </span>
                                    </div>

                                    <p>
                                        Address:
                                        <span class="text-muted">{{ $student->address }}</span>
                                    </p>
                                </div>
                                {{-- <p>{{ $student->about }}</p> --}}
                                <p class='mt-2'>{{ $student->about }}</p>
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
                                        <span class="text-muted">{{ $student->hsc_gpa }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>Higher Secondary School Certficate</p>
                                    <p class="text-muted">Sample School and College</p>
                                    <p class="text-muted">
                                        <span>Result:</span>
                                        <span class="text-muted">{{ $student->ssc_gpa }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>Higher Secondary School Certficate</p>
                                    <p class="text-muted">Sample School and College</p>
                                    <p class="text-muted">
                                        <span>Result:</span>
                                        <span class="text-muted">{{ $student->jsc_gpa }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>Higher Secondary School Certficate</p>
                                    <p class="text-muted">Sample School and College</p>
                                    <p class="text-muted">
                                        <span>Result:</span>
                                        <span class="text-muted">{{ $student->psc_gpa }}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-6">
                                <strong>Skills:</strong>
                                <div class='mt-2'>
                                    <p class="text-muted">
                                        <span class="text-muted">{{ $student->skill }}
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






