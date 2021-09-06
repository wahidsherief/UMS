@extends('users.admin.layout')
@section('title',"Teacher Details")

@section('content')
<section class="content">
    <div class="container p-0">
        <div>
            <img class="card-img-top ums-profile-img-top" src="https://cdn.wallpapersafari.com/42/1/W8RAKI.jpg"
                alt="Bologna" />
            <div class="card-body text-center">
                <img class="avatar rounded-circle"
                    src="https://www.albany.edu/news/images/380_-_master_teacher.jpg"
                    alt="Bologna">
                <div class="profile-info">
                    <div>
                        <h4 class="card-title">{{ $teacher_details->user->name }}</h4>
                    </div>
                    <div>
                        <h6 class="card-subtitle mb-2 text-muted">Teacher</h6>
                    </div>
                    <div>

                        <span>
                            Email:
                            <span class="text-muted text-lowercase">{{ $teacher_details->user->email }}</span>
                        </span>
                        <span> | </span>
                        <span>
                            Mobile:
                            <span class="text-muted">{{ $teacher_details->phone }}</span>
                        </span>
                        <span> | </span>
                        <span>
                            Gender:
                            <span class="text-muted">{{ $teacher_details->gender }}</span>
                        </span>
                        <span> | </span>
                        <span>
                            Short Name:
                            <span class="text-muted">{{ $teacher_details->short_name }}</span>
                        </span>
                        <span> | </span>
                        <span>
                            Blood Group:
                            <span class="text-muted">{{ $teacher_details->blood_group }}</span>
                        </span>
                    </div>

                    <p>
                        Address:
                        <span class="text-muted">{{ $teacher_details->address }}</span>
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

    <div class='profile-content m-4'>
        <div class="row mt-2">
            <div class="col-12">
                <strong>About:</strong>
                <p class='mt-2'>{{ $teacher_details->about }}</p>
            </div>
        </div>



</section>
@endsection
