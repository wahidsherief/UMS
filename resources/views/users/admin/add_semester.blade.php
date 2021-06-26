@extends('users.admin.layout')
@section('title',"Semester")

@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title"> Add Semester</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('add.semester.submit')}}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Semester Name </label>
                <input type="text" class="form-control" id="text" placeholder="Enter Semester Name"
                  name="semester_name">
              </div>
              <div class="row">
                <div class="col-sm-12" align="right">
                  <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    Save</button>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

          </form>

          @if(Session::has('batch_created'))
          <div class="alert alert-success" role='alert'>

            {{Session::get('batch_created')}}

          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection