@extends('users.student.layout')
@section('title',"Question")

@section('content')

<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
          {{ $data->session->session_name }} ->
        <span align="right">
{{ $data->course->course_name }}
        </span>
    </h3>
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
