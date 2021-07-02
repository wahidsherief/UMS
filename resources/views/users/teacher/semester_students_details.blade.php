@extends('users.teacher.layout')
@section('title',"Students Details")
@section('content')
<div class="container" style="padding-top:20px;">
    <div class="col-md-12">
    <div class="tab-content">
      <div class="tab-pane active" id="activity">
        <!-- Post -->
        <div class="card-header">
            {{-- <h3 class="card-title">Batch -<span style="font-size:18px;font-weight:bold;color:purple"> {{$batch->batch_name}} </span> Students Details</h3> --}}
          </div>
          @if(Session::has('updated'))
          <div class="alert alert-warning" role='alert'>

          {{Session::get('updated')}}

          </div>
                  @endif



          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>Student Name</th>
                  {{-- <th>Department Name</th> --}}
                  <th>Student ID</th>
                  <th>Registration ID</th>
                  <th>Result</th>
                </tr>
              </thead>
              <tbody>
                  @php $i=1;

                  @endphp
        @foreach($semester_students as $semester_student)

                <tr data-widget="expandable-table" aria-expanded="false">
                  <td>{{$i++}}</td>
                  <td>{{$semester_student->firstname}} {{$semester_student->lastname}}</td>
                  <td>{{$semester_student->roll_number}}</td>
                  <td>{{$semester_student->registration_number}}</td>
                  <td>
                  <a href="{{route('add.result',[$session_id,$semester_student->id,$semester->id,$course->id])}}" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i>  Add Result </a>
              </td>
            </tr>

@endforeach

    </tbody>
    </table>

    </div>



    </div></div></div></div>
    @endsection
