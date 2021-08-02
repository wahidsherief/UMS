@extends('users.teacher.layout')
@section('title', 'teacher profile')

@section('content')
<div class="container">
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
                                    <p>{{ $teacher->about }}</p>
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
                                {{ $teacher->user->email }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-phone mr-1"></i> Mobile Number</strong>
                            <p class="text-muted">
                                {{ $teacher->phone }}
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
                            <p class="text-muted">{{ $teacher->blood_group }}</p>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">{{ $teacher->address }}</p>
                            <hr>
                          

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Publication</h3>
                        </div>
                        <div class="card-body">
                            <div class="tab-pane col-md-10" id="publication" >
                                @if(!$publication_count)

                                   <form class="form-horizontal" action="{{ route('teacher.publication.submit') }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       <div class="form-group row">
                                           <label for="text" class="col-sm-2 col-form-label">Title</label>
                                           <div class="col-sm-10">
                                               <input type="text" class="form-control" placeholder="Title" name="title" id="title">

                                           </div>
                                       </div>

                                       <div class="form-group row">
                                           <label for="password" class="col-sm-2 col-form-label">File</label>
                                           <div class="col-sm-10">
                                               <input type="file" class="form-control" placeholder="Publication file" name="publication_file">

                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="password" class="col-sm-2 col-form-label">Link
                                               </label>
                                           <div class="col-sm-10">
                                               <input type="url" class="form-control" placeholder="Link" name="link">

                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <div class="offset-sm-2 col-sm-10">
                                               <button type="submit" class="btn btn-primary"> Save Publication</button>
                                           </div>
                                       </div>

                                   </form>

                                   @else
                                   <form class="form-horizontal" action="{{ route('teacher.publication.submit') }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       <div class="form-group row">
                                           <label for="text" class="col-sm-2 col-form-label">Title</label>
                                           <div class="col-sm-10">
                                               <input type="text" class="form-control" placeholder="Title" name="title" id="title" value={{ $publication->title }} disabled>

                                           </div>
                                       </div>


                                       <div class="form-group row">
                                           <label for="password" class="col-sm-2 col-form-label">Link
                                               </label>
                                           <div class="col-sm-10">
                                               <input type="url" class="form-control" placeholder="Link" name="link" value={{ $publication->link }} disabled>
                                               <span class="text-danger error-text cnewpassword_error"></span>
                                           </div>
                                       </div>

                                       <div class="form-group row">
                                           <label for="password" class="col-sm-2 col-form-label">File</label>
                                           <div class="col-sm-10">
                                               <a class="btn btn-primary btn-small form-control" href="{{ route('teacher.publication_file',$publication->id) }}"><i class="fas fa-eye ml-1"></i> View Publication</a>

                                           </div>
                                       </div>



                                   </form>

@endif


                               </div>



                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>










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

                                </div>
                                <!-- /.tab-pane -->


@if (Session::get('publication'))

<script>
    swal("Good Job", "Publication added successfully", "success");

</script>
@endif

@endsection
