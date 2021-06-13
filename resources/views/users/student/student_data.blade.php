
@extends('users.student.layout')
@section('title',"student profile")

@section('content')
<div class="container" style="padding-top:20px;">
<div class="col-md-12">
<div class="tab-content">
  <div class="tab-pane active" id="activity">

    <div class="card-header">
        <h3 class="card-title">Expandable Table</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Serial</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Roll Number</th>
              <th>Registration Number</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Blood</th>
              <th>HSC</th>
              <th>SSC</th>
              <th>JSC</th>
              <th>PSC</th>
            </tr>
          </thead>
          <tbody>
    @foreach($students as $student)



            <tr data-widget="expandable-table" aria-expanded="false">
              <td> {{$students->firstItem()+$loop->index}}  </td>
              <td>{{$student->firstname}}</td>
              <td>{{$student->lastname}}</td>
              <td>{{$student->roll_number}}</td>
              <td>{{$student->registration_number}}</td>
              <td>{{$student->phone}}</td>
              <td>{{$student->address}}</td>
              <td>{{$student->blood_group}}</td>
              <td>{{$student->hsc_gpa}}</td>
              <td>{{$student->ssc_gpa}}</td>
              <td>{{$student->jsc_gpa}}</td>
              <td>{{$student->psc_gpa}}</td>

            </tr>


@endforeach
</tbody>
</table>

</div>
{{$students->links()}}
<style>
    .w-5{
        display:none;
    }
</style>

      <!-- /.card-body -->






    {{-- <div class="post">
      <div class="user-block">
        <img class="img-circle img-bordered-sm" src="{{$notify->picture}}" alt="Teacher's image">
        <span class="username">
          <b>{{$notify->name}}</b>
        </span>
        <span class="description">{{$notify->created_at->diffForHumans()}}</span>
      </div>
      <h3></h3>
      <!-- /.user-block -->
      <p style="color:black;font-size:18px;">

      </p>


    <!-- /.post -->

   </div> --}}

</div></div></div></div>
@endsection
