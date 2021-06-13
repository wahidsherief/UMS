
@extends('users.admin.layout')
@section('title',"Batch")

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('add.batch.submit')}}" method="POST">
                  @csrf
                <div class="alert alert-primary" role="alert">
                    <div class="card-header">
                     Add Department(Unique)</div>
                    </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Batch Id</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter Department Name" name="batch_id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Batch Name</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter Department Head" name="batch_name">
                  </div>




                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
