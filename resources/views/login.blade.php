@extends('layout')

@section('title', 'Royal Trading Login')
@section('description', 'Royal Trading Login page')
@section('keywords', 'login page, royal trading login page')

@section('content')  

<div class="form-container">
<h2 class="h5 mb-4">Log in</h2>
<form action="{{url('send-login')}}" method="POST" id="login-form">
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <div class="input-group">
            <select class="form-select" style="max-width: 100px;">
                <option>+91</option>
            </select>
            <input type="tel" class="form-control" id="phone" placeholder="Please enter the phone number">
        </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Remember password</label>
    </div>
    <button type="submit" class="btn btn-light btn-color w-100 mb-3">Log in</button> 
    <a href="{{url('register')}}"><button class="btn btn-register btn-color w-100 mb-3">Register</button></a>
</form> 
</div>

<div class="d-flex justify-content-between">
    <a href="#" class="text-white"><i class="bi bi-lock"></i> Forgot password</a>
    <a href="#" class="text-white"><i class="bi bi-headset"></i> Customer Service</a>
</div> 
@endsection 


@section('scripts') 
<script src="{{asset('js/login.js')}}"></script> 
@endsection 
