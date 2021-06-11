@extends('frontend.layout')
@section('title','Login')
@section('content')
<style>.form-control{
    color:black;
}
    </style>
<div  style="background:url('frontend/images/login.jpg');padding-top:18%;padding-bottom:20%;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding:20px">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
@if( Session::get('success'))
<div class="alert alert-success">
   <h5> {{Session::get('success')}} <a href="{{route('login')}}"><a href="{{route('login')}}">Please Login</a></h5>
</div>
@endif
@if( Session::get('error'))
<div class="alert alert-success">
    {{Session::get('error')}}
</div>
@endif
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Account Type</label>

                            <div class="col-md-6">
                                <select id="role" name="role" class="form-control">
                                    <option value=4 selected>Student</option>
                                    <option value=3>Teacher</option>
                                    <option value=2>Admin</option>
                                  </select>
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="alert alert-primary mt-3" role="primary"><a href=" {{ URL::to('/login') }}">Already Have account <b>Login</b></a></div>
                </div>
            </div>
        </div>
    </div>
</div></div>
@endsection
