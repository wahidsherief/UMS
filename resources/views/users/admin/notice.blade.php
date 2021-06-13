
@extends('users.admin.layout')
@section('title',"notice")

@section('content')
<div class="container" style="padding-top:20px;">
<div class="col-md-12">
<div class="tab-content">
  <div class="tab-pane active" id="activity">
    <!-- Post -->
    <div class="card-header">
        <h3 class="card-title">Expandable Table</h3>
      </div>
      <div class="card-body">
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
              <td>  <img class="img-circle img-bordered-sm" src="{{$notify->user->picture}}" alt="Teacher's image"width="50"></td>
              <td>{{$notify->user->name}}</td>
              <td>Teacher</td>
              <td> <span class="description">{{$notify->created_at->diffForHumans()}}</span></td>

              <td>{{$notify->notice_title}}</td>
              <td>
                  <a href="{{route('student.single_notice',$notify->id)}}" class="btn btn-info"> show</a>
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
      <!-- /.card-body -->






    {{-- <div class="post">
      <div class="user-block">
        <img class="img-circle img-bordered-sm" src="{{$notify->picture}}" alt="Teacher's image">
        <span class="username">
          <b>{{$notify->name}}</b>
        </span>
        <span class="description">{{$notify->created_at->diffForHumans()}}</span>
      </div>
      <h3></h3>
      <!-- /.user-block -->
      <p style="color:black;font-size:18px;">

      </p>


    <!-- /.post -->

   </div> --}}

</div></div></div></div>
@endsection
