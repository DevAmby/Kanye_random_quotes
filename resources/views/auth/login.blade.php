@extends('layouts.app')

@section('title')
    <title> Yeezus | Login  </title>
@endsection


@section('content')


<form action="login" method="POST">


    @if(Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
    @endif

    @csrf

    <h4 class="text-center mb-4" style="font-size:25px; color:#000; font-weight:500" >Sign in | Yeezus</h4>
    <div class="form-group">
        <label class="mb-1"><strong>Email</strong></label>
        <input type="email" class="form-control"  name="email" value="{{ old('email') }}">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>Password</strong></label>
        <input type="password" class="form-control"  name="password" value="{{ old('password') }}">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
    <div class="form-row d-flex justify-content-between mt-4 mb-2">
        <div class="form-group">
            <div class="custom-control custom-checkbox ml-1">
                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                <label class="custom-control-label" for="basic_checkbox_1">Remember me</label>
            </div>
        </div>
        <div class="form-group">
            <a href="page-forgot-password.html">Forgot Password?</a>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-dark btn-block" style="font-size: 20px; background:#000 !important;">Sign In</button>
    </div>
</form>
<div class="new-account mt-3">
    <p>Don't have an account? <a class="" href="{{route('register')}}" style="font-weight: 600; color:#000000a1">Sign up</a></p>
</div>
@endsection