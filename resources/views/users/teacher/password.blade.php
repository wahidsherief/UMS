@extends('users.teacher.layout')
@section('title',"Password")


@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-body">

<form class="form-horizontal  col-md-10" action="{{ route('teacherChangePassword') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Old</label>
        <div class="col-sm-10">
            <input type="password" class="form-control input-sm" placeholder="Old Passsword" name="oldpassword" id="oldpassword">
            <span class="text-danger error-text oldpassword_error"></span>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">New </label>
        <div class="col-sm-10">
            <input type="password" class="form-control input-sm" placeholder="New Passsword" name="newpassword" id="newpassword">
            <span class="text-danger error-text newpassword_error"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Confirm</label>
        <div class="col-sm-10">
            <input type="password" class="form-control input-sm" placeholder="Confirm Passsword" name="cnewpassword" id="cnew_password">
            <span class="text-danger error-text cnewpassword_error"></span>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-warning btn-sm">Update Password</button>
        </div>
    </div>
</form>
</div></div></div>

@endsection
