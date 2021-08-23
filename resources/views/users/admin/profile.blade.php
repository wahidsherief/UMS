
@extends('users.admin.layout')
@section('title',"admin profile")

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
                            <h4 class="card-title text-capitalize">{{ Auth::user()->name }}</h4>
                        </div>

                        <div>

                            <span>
                                Email:
                                <span class="text-muted text-lowercase">{{ Auth::user()->email }}</span>
                            </span>
                            <span> | </span>


            </div>
        </div>
    </div>
</section>

@endsection
