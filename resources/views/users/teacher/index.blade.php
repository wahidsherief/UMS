
@extends('users.teacher.layout')
@section('title',"Dashboard Page")

@section('content')
{{-- Account Verification Check --}}
@php $account_status=Auth::user()->account_status;
@endphp
@if(!$account_status==1)
@include('users.teacher.pending')
@else


<!--After verifying account !-->


<h1>Welcome {{Auth::user()->name}} {{Auth::user()->account_status}}</h1>


@endif
@endsection
