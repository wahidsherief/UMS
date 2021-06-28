@extends('users.admin.layout')
@section('title',"Update Semester")

@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title"> Update Semester</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <!-- form start -->
          <form action="" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Semester Name</label>
                <input type="text" class="form-control" id="text" placeholder="Enter Batch Name" name="semester_name" value="{{$semesters->semester_name}}">
              </div>

              <div align="right">
                <button type="submit" class="btn btn-warning"><i class="fa fa-check-circle" aria-hidden="true"></i>
                  Update Data</button>
              </div>
            </div>
          </form>


        </div>
      </div>
    </div>


    @endsection
