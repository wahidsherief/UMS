
@extends('users.teacher.layout')
@section('title',"notice")


@include('users.teacher.top_nav.notice')


@section('content')
<div class="container">
<div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Available Notices</h3>
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
              <th>Status</th>
              <th>Date</th>
              <th>Title</th>
              <th>show</th>
            </tr>
          </thead>
          <tbody>
    @foreach($notice as $notify)


            <tr data-widget="expandable-table" aria-expanded="false">
              <td>  <img class="img-circle img-bordered-sm" src="{{$notify->user->picture}}" alt="U"width="50"></td>
              <td>{{$notify->user->name}}</td>
              <td>Teacher</td>
              <td> <span class="description">{{$notify->created_at->diffForHumans()}}</span></td>

              <td>{{$notify->notice_title}}</td>
              <td>
                  <a href="{{route('teacher.single_notice',$notify->id)}}" class="btn btn-info"><i class="fas fa-eye"></i> show</a>
              </td>
            </tr>


@endforeach
</tbody>
</table>

</div>
{{$notice->links()}}
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
@endsection
