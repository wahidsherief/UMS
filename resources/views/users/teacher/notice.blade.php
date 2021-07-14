
@extends('users.teacher.layout')
@section('title',"notice")

@section('content')
<div class="container">
<div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">All Notice</h3>
    </div>
    <!-- /.card-header -->
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


      <!-- ./card-header -->


            <tr data-widget="expandable-table" aria-expanded="false">
              <td>  <img class="img-circle img-bordered-sm" src="{{$notify->user->picture}}" alt="U"width="50"></td>
              <td>{{$notify->user->name}}</td>
              <td>Teacher</td>
              <td> <span class="description">{{$notify->created_at->diffForHumans()}}</span></td>

              <td>{{$notify->notice_title}}</td>
              <td>
                  <a href="{{route('teacher.single_notice',$notify->id)}}" class="btn btn-info"> show</a>
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


</div></div></div>
@endsection
