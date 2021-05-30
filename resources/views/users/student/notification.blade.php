
@extends('users.student.layout')
@section('title',"notification")

@section('content')
<div class="container" style="padding-top:20px;">
<div class="col-md-12">
<div class="tab-content">
  <div class="tab-pane active" id="activity">
    <!-- Post -->

    @foreach($notification as $notify)

    <div class="post">
      <div class="user-block">
        <img class="img-circle img-bordered-sm" src="{{$notify->picture}}" alt="Teacher's image">
        <span class="username">
          <b>{{$notify->name}}</b>
        </span>
        <span class="description">{{$notify->created_at->diffForHumans()}}</span>
      </div>
      <h3>{{$notify->title}}</h3>
      <!-- /.user-block -->
      <p style="color:black;font-size:18px;">
        {!! $notify->post_body !!}
      </p>


    <!-- /.post -->

   </div>
   @endforeach
</div></div></div></div></div>
@endsection
