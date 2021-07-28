@extends('users.student.layout')
@section('title',"student profile")

@section('content')

<div class="container">
    <div class="card card-secondary  table-responsive p-0">

      <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Attendance</th>
                <th>Class Test</th>

                <th>PartA</th>
                <th>PartB</th>
                <th>Percentage</th>
                <th>N_Grade</th>
                <th>L_Grade</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($results as $result)

@php
$status= $result->status;
@endphp
              <!-- ./card-header -->

@if($status==1)
              <tr data-widget="expandable-table" aria-expanded="false">
                <td> {{$i++}} </td>

                <td>{{$result->course->course_code}}</td>
                <td>{{$result->course->course_name}}</td>
                <td>{{$result->attendance}}</td>
                <td>{{$result->class_test}}</td>

                <td>{{$result->part_a}}</td>
                <td>{{$result->part_b}}</td>
                <td>@php echo number_format($result->percentage, 2, '.', ',');@endphp</td>
                <td>{{$result->n_grade}}</td>
                <td>{{$result->l_grade}}</td>


              </tr>
              @endif
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
