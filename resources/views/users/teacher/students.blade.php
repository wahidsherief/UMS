@extends('users.teacher.layout')
@section('title',"Student")

@section('content')


<div class="container">
    <div class="container" style="padding-top:20px;">
        <div class="col-md-12">
        <div class="tab-content">
          <div class="tab-pane active" id="activity">
            <!-- Post -->
            <div class="card-header">
                <h3 class="card-title">All Student</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Result</th>
                    </tr>
                  </thead>
                  <tbody>
@php $i=1; @endphp
            @foreach($users as $user)
            @php  $admin=$user->role; @endphp

              <!-- ./card-header -->

@if($admin==4)
                    <tr data-widget="expandable-table" aria-expanded="false">


<td>{{$i++}} </td>


         <td>  <img class="img-circle img-bordered-sm" src="{{$user->picture}}" alt="User's image"width="50"></td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      {{-- <td> <span class="description">{{$notify->created_at->diffForHumans()}}</span></td> --}}

                      <td>
                          {{-- <a href="{{route('student.single_notice',$user->id)}}" class="btn btn-warning"> Update</a> --}}
                          <a href="#" class="btn btn-info"> Add Result</a>

                        </td>

                    </tr>
@endif
        @endforeach
        </tbody>
        </table>

</div></div></div></div></div>



@endsection
