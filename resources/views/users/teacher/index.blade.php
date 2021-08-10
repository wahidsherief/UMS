@extends('users.teacher.layout')
@section('title', 'Dashboard Page')

@section('content')

{{-- Account Verification Check --}}
@php $account_status=Auth::user()->account_status;
@endphp
@if (!$account_status == 1)
@include('users.teacher.pending')
@else


@endif
@endsection