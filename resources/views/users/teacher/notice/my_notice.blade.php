
@extends('users.teacher.layout')
@section('title',"notice")


@section('nav_bar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">


            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item " href="{{ route('teacher.notice') }}">Notices
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item" href="{{ route('teacher.addnotice') }}">Add Notice
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="dropdown-item active" href="{{ route('teacher.my_notice',Auth::user()->id) }}">My Notice
                </a>
            </li>

        </ul>
    </nav>
@endsection


@section('content')
<div class="container">
<div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">My Notices</h3>
    </div>
    <!-- /.card-header -->
@if($count!==0)



    <div class="card-body">

      <div class="card-body table-responsive p-0">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Date</th>
              <th>Title</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
    @foreach($notices as $notice)


            <tr data-widget="expandable-table" aria-expanded="false">
              <td>  <img class="img-circle img-bordered-sm" src="{{$notice->user->picture}}" alt="U"width="50"></td>
              <td>{{$notice->user->name}}</td>
              <td> <span class="description">{{$notice->created_at->diffForHumans()}}</span></td>

              <td>{{$notice->notice_title}}</td>
              <td>
                  <a href="{{route('teacher.single_notice',$notice->id)}}" class="btn btn-info mr-2"><i class="fas fa-eye"></i> </a>
                  <a href="{{route('teacher.notice_delete',$notice->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>


@endforeach
</tbody>
</table>

</div>
{{$notices->links()}}
<style>
    .w-5{
        display:none;
    }
</style>


</div>
@else

<div class="text-danger text-center h4 pt-3 pb-3">No Notice Available</div>
@endif
</div></div>
@if(Session::has('deleted'))
                    <script>
                        swal("Deleted", "Notice has been deleted successfully", "error");
                    </script>
                    @endif
@endsection
