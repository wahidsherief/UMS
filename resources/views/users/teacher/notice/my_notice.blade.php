@extends('users.teacher.layout')
@section('title',"notice")

@section('nav_bar')
@include('users.teacher.top_nav.notice')
@endsection

@section('content')
<div class="container">



  <div class="card-body">

    @if($count!==0)
    <div class="ums-content-heading">
      <h3 class="card-title">Notices</h3>
    </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-borderless table-hover table-sm">
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Date</th>
            <th>Title</th>

          </tr>
        </thead>
        <tbody>
          @foreach($notices as $notice)


          <tr data-widget="expandable-table" aria-expanded="false">
            <td class='text-left'><img class="img-circle" src="{{$notice->user->picture}}" width="40" alt="U">
            </td>
            <td>{{$notice->user->name}}</td>
            <td> <span class="description">{{$notice->created_at->diffForHumans()}}</span></td>

            <td>{{$notice->notice_title}}</td>
            <td class='text-right' style="width:120px;">
              <a href="{{route('teacher.single_notice',$notice->id)}}" class="mr-1 text-info mr-2"><i
                  class="fas fa-eye"></i> </a>
              <a href="{{route('teacher.notice_delete',$notice->id)}}" class="text-danger"><i
                  class="fas fa-trash-alt"></i></a>
            </td>
          </tr>


          @endforeach
        </tbody>
      </table>

    </div>
    {{$notices->links()}}
    <style>
      .w-5 {
        display: none;
      }
    </style>


  </div>
  @else

  <div class="text-muted font-italic text-danger text-center h6 pt-3 pb-3">No Notice Available</div>
  @endif
</div>
</div>
@if(Session::has('deleted'))
<script>
  swal("Deleted", "Notice has been deleted successfully", "error");
</script>
@endif
@endsection