
@extends('users.admin.layout')
@section('title',"Coursetype")

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                  @csrf
                <div class="alert alert-primary" role="alert">
                    <div class="card-header">
                     Add CourseType(Unique)</div>
                    </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Type</label>
                    <input type="text" class="form-control" id="text" placeholder="Add Course Type" name="course_type">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

              @if(Session::has('coursetype_created'))
              <div class="alert alert-success" role='alert'>

              {{Session::get('coursetype_created')}}

              </div>
                      @endif


    </div>


</div>
</div>



@endsection
