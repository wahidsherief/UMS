@extends('users.teacher.layout')
@section('title',"Previous Examination")
@section('nav_bar')
@include('users.top_nav.teacher_examination')
@endsection

@section('content')


@if($previous_examination_count>0)
<div class="card-body pt-4">
  <div class="ums-content-heading">
    <h3 class="card-title">Prevous Examination</h3>
  </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-borderless table-hover table-sm">
        <thead>
          <tr>
            <th class="sl"></th>
            {{-- <th>Department Name</th> --}}
            <th>Session Name</th>
            <th>Examination Name</th>

          </tr>
        </thead>
        <tbody>
          @php $i=1; @endphp
          @foreach($previous_examination as $previous_exam)
          <tr data-widget="expandable-table" aria-expanded="false">
            <td>{{$i++}} </td>
            <td>{{$previous_exam->session->session_name}}</td>
            <td><a href="{{route('teacher.my_courses_internal')}}"> {{ $previous_exam->name}} </a></td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>





</div>
@else
<div class="text-muted font-italic text-danger text-center h6 pt-3 pb-3">No Previous Examination Available Now !!!</div>

@endif

@endsection
