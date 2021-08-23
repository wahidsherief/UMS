@extends('users.admin.layout')
@section('title',"Coursetype")

@section('nav_bar')
@include('users.top_nav.admin_courses')
@endsection


@section('content')

<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Add Coursetype</h3>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Course Type</label>
                    <input type="text" class="form-control sm" id="text" placeholder="Add Course Type" name="course_type">
                </div>
                @error('course_type')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="float-right">
                    <button type="submit" class="ums-tiny-btn text-success"><i class="fa fa-check-circle"
                            aria-hidden="true"></i>
                        Create CourseType</button>
                </div>
        </div>
        </form>

        @if(Session::has('coursetype_created'))
        <script>
            swal("Course Type", "Course Type has been created successfully", "success");
        </script>
        @endif
    </div>
</div>
@endsection
