@extends('users.admin.layout')
@section('title','Pending Account')


@section('nav_bar')
@include('users.top_nav.admin_courses')
@endsection



@section('content')

<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Available Courses</h3>
      </div>

    <div class="card-body table-responsive p-0 text-center">
        <table class="table table-borderless table-hover table-sm">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter First Name"
                            name="firstname" value="{{$teacher->firstname}}" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" id="text" placeholder="Enter Last Name" name="lastname"
                            value="{{$teacher->lastname}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Short Name</label>
                        <input type="text" class="form-control" id="text" placeholder="" name="teachers_short_name"
                            value="{{$teacher->teachers_short_name}}" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <input type="text" class="form-control" id="text" placeholder="" name="status"
                            value="{{$teacher->status}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
<div class="col">    <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" class="form-control" id="text" placeholder="Enter Phone Number" name="phone"
        value="{{$teacher->phone}}" readonly>
</div>
</div>
<div class="col">

            <div class="form-group">
                <label for="exampleInputEmail1">Blood Group</label>
                <input type="text" class="form-control" id="text" placeholder="Ex: A+" name="blood_group"
                    value="{{$teacher->blood_group}}" readonly>
            </div>
        </div></div>


        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
           <textarea class="form-control" id="text"  name="address"
             readonly>    {{$teacher->address}}</textarea>
        </div>

        </div>
        <div align="right">
<button class="btn btn-success text-white btn-sm">
        <form method="POST" action="{{route('admin.teacher_account_approve',$teacher->user->id)}}">
        @csrf
        <input type="submit" class="btn btn-success btn-sm" value="Approve">
    </form>
</button>
<button class="btn btn-danger btn-md text-white">
    <a href="{{route('admin.teacher_account_delete',$teacher->id)}}" class="text-white">Delete</a></button>
    </div></div>
</div>


    @endsection
