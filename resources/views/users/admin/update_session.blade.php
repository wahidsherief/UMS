@extends('users.admin.layout')
@section('title',"Update Semester")

@section('content')
<div class="card-body">
    <div class="ums-content-heading">
        <h3 class="card-title">Update Sessions</h3>
      </div>
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



                    <div class="float-right">
                        <button type="submit" class="ums-tiny-btn btn-success">
                        Update</button>
                      </div>

                </form>

        </div>
      </div>
    </div>


    @endsection
