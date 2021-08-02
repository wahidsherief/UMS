@extends('users.teacher.layout')
@section('title', 'Dashboard Page')

@section('content')

    {{-- Account Verification Check --}}
@php $account_status=Auth::user()->account_status;
@endphp
@if (!$account_status == 1)
@include('users.teacher.pending')
@else


<!--After verifying account !-->


<div class="row">


<div class="col-md-6 ">
    <div class="card-header">
    <div class="card-title">Latest Notice</div></div>
    @foreach($notice as $notify)

    <div class="card" >

        <!-- /.card-header -->

        <div class="card-body" style="padding:0;min-height:0">
          <div class="alert alert-primary alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <a href="{{route('teacher.single_notice',$notify->id)}}" style="text-decoration:none">     <h5><i class="icon fas fa-bell"></i> {{ $notify->notice_title }}</h5>
            </a>
          </div>

        </div>
        <!-- /.card-body -->
      </div>

      @endforeach
</div>


    <div class="col-md-5">
 <div class="card">
    <div class="card-header border-0">
      <h3 class="card-title">UMS Overview</h3>
      <div class="card-tools">
        <a href="#" class="btn btn-sm btn-tool">
          <i class="fas fa-download"></i>
        </a>

      </div>
    </div>
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
        <p class="text-success text-xl">
          <i class="fas fa-users"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-up text-success"></i> {{ $count_user }}
          </span>
          <span class="text-muted">Total Users</span>
        </p>
      </div>

      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
        <p class="text-success text-xl">
          <i class="fas fa-users"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-up text-success"></i> {{ $count_student }}
          </span>
          <span class="text-muted">Total Students</span>
        </p>
      </div>

      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
        <p class="text-success text-xl">
          <i class="fas fa-users"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-up text-success"></i> {{ $count_teacher }}
          </span>
          <span class="text-muted">Total Teachers</span>
        </p>
      </div>
      <!-- /.d-flex -->
      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
        <p class="text-warning text-xl">
          <i class="fas fa-book"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-up text-warning"></i> {{ $count_course }}
          </span>
          <span class="text-muted">Total Course</span>
        </p>
      </div>
      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
        <p class="text-warning text-xl">
          <i class="fas fa-bell"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-up text-warning"></i> {{ $count_notice }}
          </span>
          <span class="text-muted">Total Notice</span>
        </p>
      </div>
      <!-- /.d-flex -->

      <!-- /.d-flex -->
    </div></div></div>
  </div>
@endif
@endsection
