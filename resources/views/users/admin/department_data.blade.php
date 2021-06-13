
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
              <th>Serial</th>
              <th>Department Name</th>
              <th>Department Head</th>
              <th>Created At</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
    @foreach($departments as $department)


      <!-- ./card-header -->


            <tr data-widget="expandable-table" aria-expanded="false">
              <td> {{$departments->firstItem()+$loop->index}}  </td>
              <td>{{$department->department_name}}</td>
              <td>{{$department->department_head}}</td>
              <td> <span class="description">{{$department->created_at->diffForHumans()}}</span></td>

              <td>
                  <a href="{{route('student.single_notice',$department->id)}}" class="btn btn-info"> Update</a>
                  <a href="{{route('student.single_notice',$department->id)}}" class="btn btn-danger"> Delete</a>
              </td>
            </tr>


@endforeach
</tbody>
</table>

</div>
{{$departments->links()}}
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
