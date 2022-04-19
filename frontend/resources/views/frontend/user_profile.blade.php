@extends('frontend.layouts.master')
@section('title', 'USER PROFILE')
@section('content')
<!-- LOGIN STARTS -->
<div class="row ml-0">
    <div class="col-md-12 px-0 lb-bg city-bg" style="padding-top:100px;">
        <h5 class="text-center">User Profile</h5>
        <hr>
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-3">
                    <!--left col-->
                    <div class="text-center">
                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                        <h6>Upload a different photo...</h6>
                        <input type="file" class="text-center center-block file-upload">
                    </div>
                    </hr><br>
                </div>
                <!--/col-3-->
                <div class="col-sm-9">

                    <form class="form" action="##" method="post" id="usrProfileForm" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="Policy Holder Name">Full name</label>
                            <input type="text" value="{{$loggedInUsrData->name}}" class="form-control" name="name" id="name" placeholder="Policy holder name" title="enter policy holder name.">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="{{$loggedInUsrData->email}}" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" value="{{$loggedInUsrData->contact_no}}" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                        </div>
                        <div class="form-group">
                            <label for="Date of Birth">Date of Birth</label>
                            <input type="date" value="{{$loggedInUsrData->dob}}" class="form-control" name="dob" id="dob" placeholder="Date of Birth" title="Choose Date of Birth.">
                        </div>
                        <div class="form-group">
                            <label for="location">Address</label>
                            <textarea class="form-control" name="address" id="address" placeholder="Enter Home Address" title="enter a home address">{{$loggedInUsrData->address}}</textarea>
                        </div>
                        <div class="form-group"><br>
                            <button class="btn btn-md btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            <button class="btn btn-md" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                        </div>
                    </form>

                    
                    <!--/tab-pane-->
                </div>
                <!--/tab-content-->
            </div>
            <!--/col-9-->
        </div>
        <!--/row-->
    </div>
</div>
<!-- LOGIN ENDS -->
@endsection