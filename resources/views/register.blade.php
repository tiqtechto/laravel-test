@extends('layout')

@section('title', 'Royal Trading Register')
@section('description', 'Royal Trading Register page')
@section('keywords', 'register page, royal trading register page')

@section('content')
<style> 
    .btn-register { 
        border-radius: 20px;
        padding: 10px 0;
    }
    .login-link {
        color: #ff5757;
        text-decoration: none;
    } 
</style>

<div class="form-container">
    <p class="text-center mb-4" style="color:#d3b300;">Register your phone</p>
    <form action="{{url('send-register')}}" method="post" id="register-form" > 
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <div class="input-group">
            <span class="input-group-text">+91</span>
            <input type="hidden" name="phone_code" id="phone_code" value="+91" />
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Please enter the phone number"> 
            <div id="phone-error" class="error">
                @error('phone_code')
                    <div>{{ $message }}</div>
                @enderror 

                @error('phone')
                    <div>{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="verification" class="form-label">Verification Code</label>
        <div class="input-group">
            <input type="text" class="form-control" name="verification" id="verification" placeholder="Please enter the verification code">
            <button class="btn btn-send btn-color" type="button">Send</button>
        </div> 
        <div id="verification-error" class="error">
            @error('verification')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <small class="text-muted">Receive after the countdown ends</small>
    </div>
    
    <div class="mb-3">
        <label for="password" class="form-label">Set password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Set password">
        <div id="password-error" class="error">
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm password</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
        <div id="password_confirmation-error" class="error">
            @error('password_confirmation')
                <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="mb-3">
        <label for="invite-code" class="form-label">Invite code</label>
        <input type="text" class="form-control" name="invite-code" id="invite-code" placeholder="Please enter the invitation code">
        <div id="invite-code-error" class="error">
            @error('invite-code')
                <div>{{ $message }}</div>
            @enderror
        </div>
    </div> 

    <div class="mb-3 form-check">
        <input type="checkbox" class="" value="accepted" name="terms" id="terms">
        <label class="form-check-label" for="terms">I have read and agree <a href="#" class="text-danger">Privacy Agreement</a></label>
        <div id="terms-error" class="error">
            @error('terms')
                <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <button type="submit" class="btn btn-register btn-color w-100 mb-3">Register</button>
    </form>
    <p class="text-center">
        <a href="#" class="login-link">I have an account? Login</a>
    </p>
</div>

@endsection 

@section('scripts') 
<script src="{{asset('js/register.js')}}"></script> 
@endsection 