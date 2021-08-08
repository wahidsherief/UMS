
@extends('users.admin.layout')
@section('title',"Sessions")
@section('content')

<div class="container">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title"> Add Session</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-8 offset-md-2">
              <form action="" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Session Name </label>
                    <input type="text" class="form-control input-sm" id="text" placeholder="Spring Semester" name="session_name">
                    @error('session_name')
                    <span class='text-danger'>{{ $message }}</span>
                                      @enderror
                </div>

                <!-- /.card-body -->

                <div class="float-right">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i>
                      Save</button>
                  </div>
                </div>
              </form>
          </div></div></div></div></div>

<div class="container">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Sessions</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>Serial</th>
                  <th>Session Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @php $i=1; @endphp
        @foreach($sessions as $session)

                <tr data-widget="expandable-table" aria-expanded="false">
                  <td> {{$i++}} </td>

                  <td>   <a href="{{route('admin.assign_courses',$session->id)}}"> {{$session->session_name}}</a></td>

    <td>
        @if($session->id==$latest)
        <a href="{{route('admin.update_session',$session->id)}}" class="btn btn-warning btn-sm"> Update</a>
        <a href="{{route('admin.delete_session',$session->id)}}" class="btn btn-danger btn-sm"> Delete</a>
        @else

        @endif
    </td>

                </tr>


    @endforeach
    </tbody>
    </table>
</div></div></div></div>


              @if(Session::has('session_created'))
<script>
                swal("Created", "Session has been Created successfully", "success");
</script>
   @endif
              @if(Session::has('session_updated'))
<script>
                swal("Updated", "Session has been Updated successfully", "success");
</script>
   @endif

                      @if(Session::has('session_deleted'))
        <script>
                        swal("Deleted", "Session has been deleted successfully", "error");
        </script>
                              @endif

    </div>


</div>
</div>







@endsection

