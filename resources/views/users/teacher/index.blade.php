@extends('users.teacher.layout')
@section('title', 'Dashboard Page')

@section('content')

<div class="content">
<div class="continer_fluid">

    <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box active">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                <a href="{{ route('teacher.my_batch') }}" style="color:black;">
                    <div class="info-box-content">
                        <span class="info-box-text font-weight-bold">My Batch</span>

                        <span class="subtitle">Show All </span>
                    </div>
                </a>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                <a href="{{ route('teacher.my_courses',$sessions->id) }}" style="color:black;">
                <div class="info-box-content">
                    <span class="info-box-text font-weight-bold">My Courses</span>

                    <span class="subtitle">Show All </span>
                </div>
            </a>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <a href="{{ route('teacher.semester_result',$sessions->id) }}" style="color:black;">
                <div class="info-box-content">
                    <span class="info-box-text font-weight-bold">Results</span>
                    <span class="subtitle">Show All </span>
                </div>
            </a>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text font-weight-bold">My Notice</span>
                <span class="subtitle">Show All </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>





</div>

</div>




    {{-- Account Verification Check --}}
@php $account_status=Auth::user()->account_status;
@endphp
@if (!$account_status == 1)
@include('users.teacher.pending')
@else


<!--After verifying account !-->


 <h1>Welcome {{Auth::user()->name}} {{Auth::user()->account_status}}</h1>
@endif
@endsection
