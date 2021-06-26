@extends('users.admin.layout')
@section('title',"Coursetype")

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
              <div class="row">
                <div class="col-sm-12" align="right">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    Save</button>
                </div>
              </div>
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
  </div>
</div>
@endsection