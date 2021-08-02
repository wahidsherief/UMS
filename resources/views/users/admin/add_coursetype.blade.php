@extends('users.admin.layout')
@section('title',"Coursetype")




@section('nav_bar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">


            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('add.course') }}">Add Course
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('course_data') }}">View Course
                </a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item active" href="{{ route('add.coursetype') }}">Add CourseType
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('coursetype_data') }}">View CourseType
                </a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('admin.assign_courses') }}">Assign Courses
                </a>
            </li>

        </ul>

    </nav>
@endsection




@section('content')

<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title"> Add Course Type</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Course Type</label>
                <input type="text" class="form-control" id="text" placeholder="Add Course Type" name="course_type">
              </div>
              @error('course_type')
              <div class="text-danger">{{ $message }}</div>
          @enderror
              <div class="row float-right">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    Save</button>
                </div>
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
    </div>
  </div>
</div>
@endsection
