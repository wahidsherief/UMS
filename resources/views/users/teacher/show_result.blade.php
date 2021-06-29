
@extends('users.teacher.layout')
@section('title',"Result")
@section('content')

<div class="container">
    <div class="card card-secondary  table-responsive p-0">
      <div class="card-header">
        <h3 class="card-title">Show Result</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Session</th>
                <th>Student Name</th>
                <th>Semester</th>
                <th>Course Name</th>
                <th>Attendance</th>
                <th>CT1</th>
                <th>CT2</th>
                <th>CT3</th>
                <th>CT4</th>
                <th>PartA</th>
                <th>PartB</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($results as $result)


              <!-- ./card-header -->


              <tr data-widget="expandable-table" aria-expanded="false">
                <td> {{$i++}} </td>
                <td>{{$result->session->session_name}}</td>
                <td>{{$result->student->firstname}} {{$result->student->lastname}}</td>

                <td>{{$result->semester->semester_name}}</td>
                <td>{{$result->course->course_name}}</td>
                <td>{{$result->attandance}}</td>
                <td>{{$result->classtest_1}}</td>
                <td>{{$result->classtest_2}}</td>
                <td>{{$result->classtest_3}}</td>
                <td>{{$result->classtest_4}}</td>
                <td>{{$result->part_a}}</td>
                <td>{{$result->part_b}}</td>

                {{-- <td>

                  <a href="{{route('update.semester',$semester->id)}}" class="btn btn-warning"> Update</a>
                  <a href="{{route('delete.semester',$semester->id)}}" class="btn btn-danger"> Delete</a>

                </td> --}}
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
