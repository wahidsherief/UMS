@extends('users.admin.layout')
@section('title',"Update Semester")

@section('content')
<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Update Session</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Update Session </label>
                      <input type="text" class="form-control" id="text" placeholder="Spring Semester" name="session_name" value="{{$session->session_name}}">
                    </div>
                  </div>

                  <div align="right">
                      <button type="submit" class="btn btn-warning"><i class="fa fa-check-circle" aria-hidden="true"></i>
                        Update</button>
                    </div>
                </form>

        </div>
      </div>
    </div>


    @endsection
