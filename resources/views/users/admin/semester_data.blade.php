@extends('users.admin.layout')
@section('title',"Semester")

@section('content')
<div class="container">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">All Semester</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body table-responsive p-0">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Serial</th>
              <th>Semester Name</th>
              <th>Created At</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($semesters as $semester)


            <!-- ./card-header -->


            <tr data-widget="expandable-table" aria-expanded="false">
              <td> {{$i++}} </td>
              <td>{{$semester->semester_name}}</td>
              <td> {{--  <span class="description">{{$semester->created_at->diffForHumans()}}</span> --}}
              </td>
              <td>

                <a href="{{route('student.single_notice',$semester->id)}}" class="btn btn-warning"> Update</a>
                <a href="{{route('admin.deletesemester',$semester->id)}}" class="btn btn-danger"> Delete</a>

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