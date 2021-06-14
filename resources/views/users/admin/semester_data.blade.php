
@extends('users.admin.layout')
@section('title',"notice")

@section('content')
<div class="container" style="padding-top:20px;">
<div class="col-md-12">
<div class="tab-content">
  <div class="tab-pane active" id="activity">
    <!-- Post -->
    <div class="card-header">
        <h3 class="card-title">Expandable Table</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Serial</th>
              <th>semester Name</th>
              <th>semester Advisor</th>
              <th>Created At</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @php $i=1; @endphp
    @foreach($semesters as $semester)


      <!-- ./card-header -->


            <tr data-widget="expandable-table" aria-expanded="false">
              <td> {{$i++}}  </td>
              <td>{{$semester->semester_name}}</td>
              <td>{{$semester->advisor_name}}</td>
              {{-- <td> <span class="description">{{$semester->created_at->diffForHumans()}}</span></td> --}}

              <td>

                  {{-- <a href="{{route('student.single_notice',$semester->id)}}" class="btn btn-info"> Update</a>
                  <a href="{{route('student.single_notice',$semester->id)}}" class="btn btn-danger"> Delete</a>
               --}}
                </td>
            </tr>


@endforeach
</tbody>
</table>

</div>

</div></div></div></div>
@endsection
