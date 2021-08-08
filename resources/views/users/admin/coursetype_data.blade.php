@extends('users.admin.layout')
@section('title',"Course Type")
@section('nav_bar')
@include('users.admin.top_nav.courses')
@endsection


@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">All Course Type</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{route('add.course.submit')}}" method="POST">
        @csrf
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Course Type</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($coursetypes as $coursetype)


              <!-- ./card-header -->


              <tr data-widget="expandable-table" aria-expanded="false">
                <td> {{$i++}} </td>
                <td>{{$coursetype->course_type}}</td>

                {{-- <td> <span class="description">{{$department->created_at->diffForHumans()}}</span></td> --}}

                <td>
                  <a href="{{route('student.single_notice',$coursetype->id)}}" class="btn btn-info"> Update</a>
                  <a href="{{route('student.single_notice',$coursetype->id)}}" class="btn btn-danger"> Delete</a>
                </td>
              </tr>


              @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
