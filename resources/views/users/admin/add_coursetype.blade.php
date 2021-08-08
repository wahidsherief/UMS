@extends('users.admin.layout')
@section('title',"Coursetype")



@section('nav_bar')
@include('users.admin.top_nav.courses')
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
