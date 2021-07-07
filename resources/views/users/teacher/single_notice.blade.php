@extends('users.teacher.layout')
@section('title',"SingleNnotice")


<div class="container">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Notice</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body  table-responsive p-0">
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-8">
                <img class="img-circle img-bordered-sm" src="{{$notice->user->picture}}" alt="Notice" width="80"/>
                <span class="username" style="font-size:18px;color:purple;margin-right:15px">
                  {{$notice->user->name}}
                </span>
                  <span class="description">Shared publicly {{$notice->created_at->diffForHumans()}}</span>

                <h3 class="my-3">

                  <h2 style="color:black;margin:10px 0; text-align:center"> {{$notice->notice_title}}</h2>
                </h3>
                <p>

                  {!! $notice->notice_body !!}
                </p>
              </div>
              <div class="col-12 col-sm-4">
              <div class="col-12">
                  @if(!$notice->notice_file==NULL)<img src="{{asset('users//images/notice')}}/{{$notice->notice_file}}"
                    width="100%" />
                  @endif
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>


          <div class="container" style="padding-top:20px;">
            <div class="col-md-12 ">
              <div class="tab-content">
                <div class="tab-pane active" id="activity">
                  <!-- Post -->




                </div>








              </div>
            </div>
          </div>
        </div></div></div></div>
@endsection
