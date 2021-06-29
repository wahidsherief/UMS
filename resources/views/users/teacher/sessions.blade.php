
@extends('users.teacher.layout')
@section('title',"Sessions")
@section('content')


<div class="container">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Sessions</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>Serial</th>
                  <th>Session Title</th>
                <tr>
            </thead>
              <tbody>
                  @php $i=1; @endphp
        @foreach($sessions as $session)

                <tr data-widget="expandable-table" aria-expanded="false">
                  <td> {{$i++}} </td>

                  <td>   <a href="{{route('teacher.activities',$session->id)}}"> {{$session->session_name}}</a></td>
                </tr>


    @endforeach
    </tbody>
    </table>
</div></div></div></div>


@endsection

