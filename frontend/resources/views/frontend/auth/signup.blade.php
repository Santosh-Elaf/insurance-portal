@extends('frontend.layouts.master')
@section('title', 'SIGNUP')
@section('content')
<!-- SIGNUP STARTS -->
<div class="row ml-0">
    <div class="col-md-5 px-0 lb-bg city-bg">
        <div class="ls-form">
            <h4>Welcome</h4>
            <p>Start your vehicle Insurance journey with us.</p>
            <form method="POST" action="{{ url('register_user') }}" name="register_user" autocomplete="off" enctype="multipart/form-data">
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
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Name" autocomplete="false">
                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email Address" autocomplete="off">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="contact_no" maxlength="10" value="{{old('contact_no')}}" class="form-control" placeholder="Contact Number" autocomplete="false">
                            <span class="text-danger">@error('contact_no') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="false">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="conf_password" class="form-control" placeholder="Enter Confirm Password" autocomplete="false">
                            <span class="text-danger">@error('conf_password') {{$message}} @enderror</span>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary brand-btn-db" >Sign Up</button>
                        </div>
                        <div class="ls-bottom-link">
                            <p>Already have an account? <a href="{{url('signin')}}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-7 px-0">
        <div class="signup-banner">
            <div class="glass-logo">
                <img src="{{asset('front_assets/images/logo.png')}}">
                <div class="glass-content">
                    <h4>Get the best Insurance Policies for your Vehicles in Saudi Arabia.</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SIGNUP ENDS -->
@endsection