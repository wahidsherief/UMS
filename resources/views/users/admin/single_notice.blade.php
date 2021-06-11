student.single_notice
@extends('users.admin.layout')
@section('title',"SingleNnotice")

@section('content')
<div class="container" style="padding-top:20px;">
<div class="col-md-12 ">
<div class="tab-content">
  <div class="tab-pane active" id="activity">
    <!-- Post -->


    @foreach($notice as $notify)

<div class="post">
    <div class="user-block">
        <img class="img-circle img-bordered-sm" src="{{$notify->user->picture}}" alt="Teacher's image"width="80">
        <span class="username">
            {{$notify->user->name}}

        </span>
        <span class="description">Shared publicly {{$notify->created_at->diffForHumans()}}</span>
    <h2 style="color:black;margin:10px 0; text-align:center">      {{$notify->notice_title}}</h2>
    </div>
      <!-- /.user-block -->
      <p>
        @if(!$notify->notice_file==NULL)<img src="{{asset('users//images/notice')}}/{{$notify->notice_file}}" width="100%"/>
      @endif
        {!! $notify->notice_body !!}
      </p>
    </div>
    <br>
<hr class="style5">
<br>
@endforeach

</div>








</div></div></div></div>
@endsection
