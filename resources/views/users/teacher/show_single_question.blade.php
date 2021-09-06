@extends('users.teacher.layout')
@section('title',"Question")

@section('content')

<div class="ums-content-heading">
          {{ $data->session->session_name }} ->
        <span class="float-right">
{{ $data->course->course_name }}
        </span>
   
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive p-0">
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">

            <div class="col-md-12">
                <iframe height='550' width='100%' src=
                "/users/questions/{{ $data->question_file }}"></iframe>

            </div>
            <!-- /.card-body -->
          </div>
        </div>


      </div></div></div></div>
      @endsection
