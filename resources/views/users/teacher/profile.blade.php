@extends('users.teacher.layout')
@section('title', 'teacher profile')


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
                    <h4 class="card-title text-capitalize">{{$teacher->firstname}} {{$teacher->lastname}}</h4>
                </div>
                <div>
                    <h6 class="card-subtitle mb-2 text-muted text-capitalize">{{ $teacher->status }}</h6>
                </div>
                <div>

                    <span>
                        Email:
                        <span class="text-muted text-lowercase">{{ $teacher->user->email }}</span>
                    </span>
                    <span> | </span>
                    <span>
                        Mobile:
                        <span class="text-muted">{{ $teacher->phone }}</span>
                    </span>
                    <span> | </span>
                    <span>
                        Gender:
                        <span class="text-muted text-capitalize">{{ $teacher->gender }}</span>
                    </span>
                    <span> | </span>
                    <span>
                        Short Name:
                        <span class="text-muted text-uppercase">{{ $teacher->teachers_short_name }}</span>
                    </span>
                    <span> | </span>
                    <span>
                        Blood Group:
                        <span class="text-muted text-capitalize">{{ $teacher->blood_group }}</span>
                    </span>
                </div>

                <p>
                    Address:
                    <span class="text-muted text-capitalize">{{ $teacher->address }}</span>
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
@if($teacher->about==0)
<form action="{{ route('teacher_about') }}"method="POST">
    @csrf
    <input type="hidden" name="teacher_id" value={{ $teacher->id }}>
    <textarea name="about"  class="form-control " rows="8" placeholder="Please write about yourself" minlength="50" maxlength="200"></textarea>

    <button type="submit" class="btn btn-success mt-1 float-right btn-sm"><i class="fa fa-check-circle"
        aria-hidden="true"></i>
    Save</button>
</form>

@else
            <p class='mt-2'>{{ $teacher->about }}</p>
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
                            <td>{{ $teacher->masters }}</td>
                            <td>{{ $teacher->masters_institution }}</td>
                            <td class='text-center'>{{ $teacher->masters_passing_year }}</td>
                            <td class='text-center text-bold'>{{ $teacher->masters_gpa }}</td>
                        </tr>

                        <tr>
                            <td>{{ $teacher->bachelor }}</td>
                            <td>{{ $teacher->bachelor_institution }}</td>
                            <td class='text-center'>{{ $teacher->bachelor_passing_year }}</td>
                            <td class='text-center text-bold'>{{ $teacher->bachelor_gpa }}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>














    {{-- <div class="row mt-2">
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
                            <td>Higher Secondary School Certficate</td>
                            <td>Sample School and College</td>
                            <td class='text-center'>2018</td>
                            <td class='text-center text-bold'>{{ $student_details->hsc_gpa }}</td>
                        </tr>
                        <tr>
                            <td>Higher Secondary School Certficate</td>
                            <td>Sample School and College</td>
                            <td class='text-center'>2018</td>
                            <td class='text-center text-bold'>{{ $student_details->ssc_gpa }}</td>
                        </tr>
                        <tr>
                            <td>Higher Secondary School Certficate</td>
                            <td>Sample School and College</td>
                            <td class='text-center'>2018</td>
                            <td class='text-center text-bold'>{{ $student_details->jsc_gpa }}</td>
                        </tr>
                        <tr>
                            <td>Higher Secondary School Certficate</td>
                            <td>Sample School and College</td>
                            <td class='text-center'>2018</td>
                            <td class='text-center text-bold'>{{ $student_details->psc_gpa }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-6">
            <strong>Skills:</strong>
            <div class='mt-2'>
                <p class="text-muted">
                    <span class="text-muted">{{ $student_details->skill }}
                    </span>
                </p>
            </div>
        </div>
    </div> --}}
</div>
</section>



{{--
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
                                        style="color:#565656; font-weight:bold">{{$teacher->firstname}}
                                    </span> <span style="color:#666666">{{$teacher->lastname}} </span></h3>

                                <div>
                                    <div class="mt-2">
                                        <span>
                                            Email:
                                            <span class="text-muted text-lowercase">{{ $teacher->user->email }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Mobile:
                                            <span class="text-muted">{{ $teacher->phone }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Gender:
                                            <span class="text-muted">{{ $teacher->gender }}</span>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            Blood Group:
                                            <span class="text-muted">{{ $teacher->blood_group }}</span>
                                        </span>
                                    </div>
                                    <p>
                                        Address:
                                        <span class="text-muted">{{ $teacher->address }}</span>
                                    </p>
                                </div>
                                {{-- <p>{{ $student_details->about }}</p> --}}
                                {{-- <p class='mt-2'>{{ $teacher->about }} </p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <strong>Education</strong>
                                <div class='mt-2'>
                                    <p>Master's degree</p>

                                    <p class="text-muted ml-1">
                                        <span>Institution :</span>
                                         <span class="text-muted">{{ $teacher->masters }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>Bachelor degree</p>
                                    <p class="text-muted ml-1">
                                        <span>Institution:</span>
                                        <span class="text-muted">{{ $teacher->bachelor }} </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>College</p>
                                    <p class="text-muted ml-1">
                                        <span>Institution:</span>
                                        <span class="text-muted">{{ $teacher->college }}
                                        </span>
                                    </p>
                                </div>
                                <div class='mt-2'>
                                    <p>School</p>
                                    <p class="text-muted ml-1">
                                        <span>Institution:</span>
                                        <span class="text-muted">{{ $teacher->school }}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-6">
                                <strong>Publications</strong>
                                <div class='mt-2'>
                                    <p class="text-muted">
                                        @if(!$publication_count)

                                        <form class="form-horizontal" action="{{ route('teacher.publication.submit') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="text" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Title"
                                                        name="title" id="title">

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control"
                                                        placeholder="Publication file" name="publication_file">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">Link
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="url" class="form-control" placeholder="Link"
                                                        name="link">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary"> Save
                                                        Publication</button>
                                                </div>
                                            </div>

                                        </form>

                                        @else

                                            <div class='mt-2'>
                                                <p>Publication Title</p>
                                                <p class="text-muted ml-1">
                                                    <span>{{ $publication->title }}</span>
                                                    {{-- <span class="text-muted">{{ $student_details->hsc_gpa }} --}}
                                                    {{-- </span>
                                                </p>
                                            </div>


                                            <div class='mt-2'>
                                                <p>Publication Link</p>
                                                <p class="text-muted ml-1">
                                                    <a href="{{ $publication->link }}"
                                                        target="_blank">{{ $publication->link }} </a>
                                                    {{-- <span class="text-muted">{{ $student_details->hsc_gpa }} --}}
                                                    {{-- </span>
                                                </p>
                                            </div>
                                            <div class='mt-2 btn-sm'>

                                                <p class="text-muted">
                                                    <a class="btn btn-primary btn-sm text-center"
                                                        href="{{ route('teacher.publication_file',$publication->id) }}"><i
                                                            class="fas fa-eye"></i> View Publication</a> </span>
                                                </p>
                                            </div>




                                        @endif
                                        </span> --}}
                                    {{-- </p>
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
</section> --}}

@if (Session::get('about_added'))

<script>
    swal("Added", "About has been added successfully", "success");

</script>
@endif
@endsection


@if (Session::get('error_password_update'))

<script>
    swal("Failed", "Something went wrong. Please try again", "error");

</script>
@endif

@if (Session::get('about_added'))

<script>
    swal("Added", "About has been added successfully", "success");

</script>
@endif
@if (Session::get('success_password_update'))

<script>
    swal("Success", "Password has been updated successfully", "success");

</script>
@endif

</div>
<!-- /.tab-pane -->


@if (Session::get('publication'))

<script>
    swal("Good Job", "Publication added successfully", "success");

</script>
@endif
