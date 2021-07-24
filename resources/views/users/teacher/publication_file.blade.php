@extends('users.teacher.layout')
@section('title',"Publication")

@section('content')

<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
          Publications

    </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive p-0">
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <iframe height='550' width='100%' src=
                "/users/publication/{{ $data->file }}"></iframe>

            </div>
            <!-- /.card-body -->
          </div>
        </div>


      </div></div></div></div>
      @endsection
