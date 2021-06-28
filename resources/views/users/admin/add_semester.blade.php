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

          @if(Session::has('semester_created'))
          <div class="alert alert-success" role='alert'>
            <script>
                swal("Semester Created", "Semester has been created successfully", "success");
              </script>
          </div>
          @endif

          @if(Session::has('semester_updated'))
          <script>
              swal("Updated", "Semester has been Updated successfully", "success");
            </script>
        @endif
         @if(Session::has('semester_deleted'))
        <script>
            swal("Deleted", "Semester has been Deleted successfully", "error");
          </script>
      @endif
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container">
    <div class="card card-secondary  table-responsive p-0">
      <div class="card-header">
        <h3 class="card-title">All Semester</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Semester Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($semesters as $semester)


              <!-- ./card-header -->


              <tr data-widget="expandable-table" aria-expanded="false">
                <td> {{$i++}} </td>
                <td>{{$semester->semester_name}}</td>
                <td> {{--  <span class="description">{{$semester->created_at->diffForHumans()}}</span> --}}
                </td>
                <td>

                  <a href="{{route('update.semester',$semester->id)}}" class="btn btn-warning"> Update</a>
                  <a href="{{route('delete.semester',$semester->id)}}" class="btn btn-danger"> Delete</a>

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
