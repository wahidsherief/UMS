
@extends('users.student.layout')
@section('title',"student profile")




@section('content')
<section class="content">
    <div class="container p-0">
        <div>
            <img class="card-img-top ums-profile-img-top" src="https://cdn.wallpapersafari.com/42/1/W8RAKI.jpg"
                alt="Bologna" />
            <div class="card-body text-center">
                <img class="avatar rounded-circle"

                    src="{{ Auth::user()->picture }}"
                    alt="U">
                    <input type="file" name="upload_profile_image" id="upload_profile_image"
                    style="opacity:0,height:1px;display:none" class="updated_picture" />
                <a href="javascript:void(0)"class="update-profile-image-button"
                    id="change_picture_btn"><i class="fas fa-edit"></i></a>



                    <div class="profile-info">
                        <div>
                            <h4 class="card-title text-capitalize">{{$student->firstname}} {{$student->lastname}}</h4>
                        </div>

                        <div>

                            <span>
                                Email:
                                <span class="text-muted text-lowercase">{{ $student->user->email }}</span>
                            </span>
                            <span> | </span>
                            <span>
                                Mobile:
                                <span class="text-muted">{{ $student->phone }}</span>
                            </span>
                            <span> | </span>
                            <span>
                                Gender:
                                <span class="text-muted text-capitalize">{{ $student->gender }}</span>
                            </span>
                            <span> | </span>

                            <span> | </span>
                            <span>
                                Blood Group:
                                <span class="text-muted text-capitalize">{{ $student->blood_group }}</span>
                            </span>
                        </div>

                        <p>
                            Address:
                            <span class="text-muted text-capitalize">{{ $student->address }}</span>
                        </p>
                        <div class="profile-social-icon">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-researchgate"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-stack-overflow"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></i></a>
                        </div>
                    </div></div></div></div>





                    <div class='profile-content m-4'>
                        <div class="row mt-2">
                            <div class="col-12">
                                <strong>About:</strong>
                    @if($student->about==0)
                    <form action="{{ route('teacher_about') }}"method="POST">
                        @csrf
                        <input type="hidden" name="teacher_id" value={{ $student->id }}>
                        <textarea name="about"  class="form-control " rows="8" placeholder="Please write about yourself" minlength="50" maxlength="200"></textarea>

                        <button type="submit" class="btn btn-success mt-1 float-right btn-sm"><i class="fa fa-check-circle"
                            aria-hidden="true"></i>
                        Save</button>
                    </form>

                    @else
                                <p class='mt-2'>{{ $student->about }}</p>
                                @endif
                            </div>
                        </div>



                        <div class="row mt-2">
                            <div class="col-12">
                                <strong>Education:</strong>
                                <div class='mt-2'>
                                    <table class='table table-borderless table-hover table-sm'>
                                        <thead>
                                            <tr>
                                                <th>Degree</th>
                                                <th>Instuition</th>
                                                <th class='text-center'>Passing Year</th>
                                                <th class='text-center'>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                     

                                            <tr>
                                                <td>{{ $student->bachelor }}</td>
                                                <td>{{ $student->bachelor_institution }}</td>
                                                <td class='text-center'>{{ $student->bachelor_passing_year }}</td>
                                                <td class='text-center text-bold'>{{ $student->bachelor_gpa }}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>







</section>
@endsection






