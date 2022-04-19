@extends('frontend.layouts.master')
@section('title', 'SIGNIN')
@section('content')
<!-- LOGIN STARTS -->
<div class="row ml-0">
    <div class="col-md-5 px-0 lb-bg city-bg">
        <div class="ls-form">
            <h4>Welcome Back!</h4>
            <p>Please login to continue</p>
            <form action="{{url('login_user')}}" method="post" enctype="multipart/form-data">
                @if(Session::has('success'))  
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif  
                @if(Session::has('fail'))  
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif  
                @csrf
                <div class="col-md-12 col-lg-8 pr-0">
                    <div class="form-wrapper">
                        <div class="mb-3">
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email Address">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="fp-link mb-3">
                            <a href="{{url('forgot_user_pass')}}">Forgot Password?</a>
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-primary brand-btn-db">Sign In</button>
                        </div>
                        <div class="ls-bottom-link">
                            <p>Don't have an account? <a href="{{url('signup')}}">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-7 px-0">
        <div class="login-banner">
            <div class="glass-logo">
                <img src="{{asset('front_assets/images/logo.png')}}">
                <div class="glass-content">
                    <h4>Get the best Insurance Policies for your Vehicles in Saudi Arabia.</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN ENDS -->
@endsection