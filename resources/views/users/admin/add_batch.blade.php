@extends('users.admin.layout')
@section('title',"Batch")

@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title"> Add Batch</h3>
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
                <label for="exampleInputEmail1">Batch Name</label>
                <input type="text" class="form-control" id="text" placeholder="Enter Batch Name" name="batch_name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Batch Advisor</label>
                <input type="text" class="form-control" id="text" placeholder="Enter Department Name"
                  name="batch_advisor">
              </div>

              <div align="right">
                <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i>
                  Save</button>
              </div>
            </div>
          </form>

          @if(Session::has('batch_created'))
          <div class="alert alert-success" role='alert'>
            {{Session::get('batch_created')}}
          </div>
          @endif
        </div>
      </div>
    </div>
    @endsection