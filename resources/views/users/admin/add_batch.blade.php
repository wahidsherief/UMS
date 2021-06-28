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
            <div class="card-body table-responsive p-0">
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
            <script>
                swal("Success", "Batch has been added successfully", "success");
              </script>
          @endif

          @if(Session::has('batch_updated'))
          <script>
              swal("Updated", "Batch has been Updated successfully", "success");
            </script>
        @endif
        @if(Session::has('batch_deleted'))
        <script>
            swal("Deleted", "Batch has been Deleted successfully", "error");
          </script>
      @endif
        </div>
      </div>
    </div>



    <div class="container">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">All Batches of CSE</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="card-body table-responsive p-0">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Batch Name</th>
                    <th>Batch Advisor</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1; @endphp
                  @foreach($batches as $batch)


                  <!-- ./card-header -->


                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td> {{$i++}} </td>

                    <td>{{$batch->batch_name}}</td>

                    <td>
                        {{$batch->batch_advisor}}
                    </td>
                    <td>
                      <a href="{{route('update.batch',$batch->id)}}" class="btn btn-warning mr-3"> <i class="fas fa-edit"></i></a>
                      <a href="{{route('delete.batch',$batch->id)}}" class="btn btn-danger"> <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>


                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>





    @endsection
