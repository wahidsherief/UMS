@extends('users.teacher.layout')
@section('title', 'teacher profile')


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
                                <p class='mt-2'>{{ $teacher->about }} </p>
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
                                                    </span>
                                                </p>
                                            </div>


                                            <div class='mt-2'>
                                                <p>Publication Link</p>
                                                <p class="text-muted ml-1">
                                                    <a href="{{ $publication->link }}"
                                                        target="_blank">{{ $publication->link }} </a>
                                                    {{-- <span class="text-muted">{{ $student_details->hsc_gpa }} --}}
                                                    </span>
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

</div>-
<!-- /.tab-pane -->


@if (Session::get('publication'))

<script>
    swal("Good Job", "Publication added successfully", "success");

</script>
@endif
