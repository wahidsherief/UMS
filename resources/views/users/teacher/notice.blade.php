
@extends('users.teacher.layout')
@section('title',"notice")

@section('nav_bar')
@include('users.teacher.top_nav.notice')
@endsection

@section('content')
<div class="container">

    <!-- /.card-header -->
@if($count!==0)



    <div class="card-body">
        <div class="ums-content-heading">
            <h3 class="card-title">Available Notices</h3>
        </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-borderless table-hover table-sm">
          <thead>
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Status</th>
              <th>Date</th>
              <th class="lg-col">Title</th>
            </tr>
          </thead>
          <tbody>
    @foreach($notice as $notify)


            <tr data-widget="expandable-table" aria-expanded="false">
                <td class='text-left'><img class="img-circle"
                    src="{{$notify->user->picture}}" width="40" alt="U">
            </td>  <td>{{$notify->user->name}}</td>
              <td>Teacher</td>
              <td> <span class="description">{{$notify->created_at->diffForHumans()}}</span></td>

              <td>{{$notify->notice_title}}</td>
              <td  class='text-right'>
                  <a href="{{route('teacher.single_notice',$notify->id)}}" class="ums-tiny-btn text-info"><i class="fas fa-eye"></i> show</a>
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
