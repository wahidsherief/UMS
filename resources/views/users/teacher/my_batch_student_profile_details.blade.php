@extends('users.teacher.layout')
@section('title',"Students Details")

@section('content')
<section class="content">
    <div class="container p-0">
        <div>
            <img class="card-img-top ums-profile-img-top" src="https://cdn.wallpapersafari.com/42/1/W8RAKI.jpg"
                alt="Bologna" />
            <div class="card-body text-center">
                <img class="avatar rounded-circle"
                    src="https://www.mills.edu/uniquely-mills/students-faculty/student-profiles/images/student-profile-gabriela-mills-college.jpg"
                    alt="Bologna">
                <div class="profile-info">
                    <div>
                        <h4 class="card-title">Robert Downey Jr.</h4>
                    </div>
                    <div>
                        <h6 class="card-subtitle mb-2 text-muted">Famous Actor</h6>
                    </div>
                    <div>

                        <span>
                            Email:
                            <span class="text-muted text-lowercase">{{ $student_details->user->email }}</span>
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
                <div class="profile-social-icon">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-researchgate"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-stack-overflow"></i></a>
                    <a href="#"><i class="fas fa-globe"></i></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 p-4">
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
</section>
@endsection