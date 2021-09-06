@extends('users.admin.layout')
@section('title',"Password")

@section('nav_bar')
@include('users.top_nav.admin_setting')
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2 pt-2 pb-2">

<form class="form-horizontal pt-2" action="{{route('adminChangePassword')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Old</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Old Passsword" name="oldpassword" id="oldpassword">
            <span class="text-danger error-text oldpassword_error"></span>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">New</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="New Passsword" name="newpassword" id="newpassword">
            <span class="text-danger error-text newpassword_error"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Confirm</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Confirm Passsword" name="cnewpassword" id="cnew_password">
            <span class="text-danger error-text cnewpassword_error"></span>
        </div>
    </div>

    <div class="float-right">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="ums-tiny-btn text-danger">Update</button>
        </div>
    </div>
</form>
</div></div>


@if( Session::get('error_password_update'))

<script>
    swal("Failed", "Something went wrong. Please try again", "error");
</script>
@endif


@if( Session::get('success_password_update'))

<script>
    swal("Success", "Password has been updated successfully", "success");
</script>
@endif
@endsection
