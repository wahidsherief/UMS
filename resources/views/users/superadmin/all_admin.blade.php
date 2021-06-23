
@extends('users.superadmin.layout')
@section('title',"All Admin")

@section('content')
<div class="container">
    <div class="container" style="padding-top:20px;">
        <div class="col-md-12">
        <div class="tab-content">
          <div class="tab-pane active" id="activity">
            <!-- Post -->
            <div class="card-header">
                <h3 class="card-title">All Admin</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
@php $i=1; @endphp
            @foreach($users as $user)
            @php  $admin=$user->role; @endphp

              <!-- ./card-header -->

@if($admin==2)
                    <tr data-widget="expandable-table" aria-expanded="false">


<td>{{$i++}} </td>


         <td>  <img class="img-circle img-bordered-sm" src="{{$user->picture}}" alt="Teacher's image"width="50"></td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      {{-- <td> <span class="description">{{$notify->created_at->diffForHumans()}}</span></td> --}}

                      <td>
                          {{-- <a href="{{route('student.single_notice',$user->id)}}" class="btn btn-warning"> Update</a> --}}
                          <a href="{{route('superadmin.deleteadmin',$user->id)}}" class="btn btn-danger"> Delete</a>

                        </td>

                    </tr>
@endif
        @endforeach
        </tbody>
        </table>

</div></div></div></div></div>
@endsection
