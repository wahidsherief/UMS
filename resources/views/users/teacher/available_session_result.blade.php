
@extends('users.teacher.layout')
@section('title',"Semester Name")
@section('content')


<div class="container">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Semester Results</h3>
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
        @foreach($semesters as $semester)

                <tr data-widget="expandable-table" aria-expanded="false">
                  <td> {{$i++}} </td>

                  <td>   <a href="{{route('show_result',$semester->id)}}"> {{$semester->semester_name}}</a></td>
                </tr>


    @endforeach
    </tbody>
    </table>
</div></div></div></div>


@endsection

