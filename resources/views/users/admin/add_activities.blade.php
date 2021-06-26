
@extends('users.admin.layout')
@section('title',"Batch")

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.add.activities.submit')}}" method="POST">
                  @csrf
                <div class="alert alert-primary" role="alert">
                    <div class="card-header">
                     Activities</div>
                    </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Activity Name </label>
                    <input type="text" class="form-control" id="text" placeholder="Spring Semester" name="activity_name">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

              @if(Session::has('activity_added'))
              <div class="alert alert-success" role='alert'>

              {{Session::get('activity_added')}}

              </div>
                      @endif


    </div>


</div>
</div>







@endsection
