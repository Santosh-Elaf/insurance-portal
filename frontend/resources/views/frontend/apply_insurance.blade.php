@extends('frontend.layouts.master')
@section('title', 'USER PROFILE')
@section('content')
<!-- LOGIN STARTS -->
<div class="row ml-0">
    <div class="col-md-12 px-0 lb-bg city-bg" style="padding-top:100px;">
        <h5 class="text-center">Apply/Renew Insurance</h5>
        <hr>
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" data-toggle="tab" href="#nav-step1" role="tab" aria-selected="true">Policy Holder Details</a>
                            <a class="nav-link" data-toggle="tab" href="#nav-step2" role="tab" aria-selected="false">Insurance Details</a>
                            <a class="nav-link" data-toggle="tab" href="#nav-step3" role="tab" aria-selected="false">Vehicle Details</a>
                            <a class="nav-link" data-toggle="tab" href="#nav-step4" role="tab" aria-selected="false">Driver Details</a>
                            <a class="nav-link" data-toggle="tab" href="#nav-step5" role="tab" aria-selected="false">Insurance Quotes</a>
                            <a class="nav-link" data-toggle="tab" href="#nav-step6" role="tab" aria-selected="false">Payment</a>
                            <a class="nav-link" data-toggle="tab" href="#nav-step7" role="tab" aria-selected="false">Success - Insurance Details</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-step1" role="tabpanel">
                            <h5 class="text-center">Add Policy Holder Details</h5>
                            <form class="form" action="#" method="post" id="plcy_hldr_dtls_Form">
                                <div class="form-group">
                                    <label for="Policy Holder Name">Full name</label>
                                    <input type="text" class="form-control" name="plcy_hldr_name" id="plcy_hldr_name" placeholder="Policy holder name" title="enter policy holder name.">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                                <div class="form-group">
                                    <label for="Date of Birth">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" title="Choose Date of Birth.">
                                </div>
                                <div class="form-group">
                                    <label for="location">Address</label>
                                    <textarea class="form-control" name="address" id="address" placeholder="Enter Home Address" title="enter a home address"></textarea>
                                </div>
                                <div class="form-group"><br>
                                    <button class="btn btn-md btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-md" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                            <h5 class="text-center">Add Insurance Details</h5>
                            <form class="form" action="#" method="post" id="insurance_type_Form">
                                <div class="form-group">
                                    <label for="Insurance Type">Choose Insurance Type</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="insurance_type" value="1">
                                        <label class="form-check-label" for="inlineRadio1">&nbsp; Apply</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="insurance_type" value="2">
                                        <label class="form-check-label" for="inlineRadio2">&nbsp; Renew</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Insurance Type">Insurance Category</label>
                                    <select class="form-control" name="insurance_category" id="insurance_category" title="choose an insurance type">
                                        <option value="">Category</option>
                                        <option value="1">TPL(Third party)</option>
                                        <option value="2">Comprehensive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="National ID/Iqama Num/Company MOI">National ID/Iqama Num/Company MOI</label>
                                    <input type="text" class="form-control" name="identification" id="identification" placeholder="National ID/Iqama Num/Company MOI" title="Enter National ID/Iqama Num/Company MOI.">
                                </div>
                                <div class="form-group">
                                    <label for="Date of the policy to be effective">Date of the policy to be effective</label>
                                    <input type="date" class="form-control" name="policy_efective_date" id="policy_efective_date" placeholder="Date of the policy to be effective" title="Choose Date of the policy to be effective.">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <button class="btn btn-md btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-md" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                            <h5 class="text-center">Choose Vehicle</h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">vehicle Name</th>
                                        <th scope="col">Vehicle Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Audi</td>
                                        <td>Car</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>BMW</td>
                                        <td>Car</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Honda</td>
                                        <td>Motercycle</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Tata</td>
                                        <td>Truck</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <h5 class="text-center">OR</h5>
                            <hr>
                            <h5 class="text-center">Add Vehicle Details</h5>
                            <form class="form" action="#" method="post" id="vhcl_dtls_Form">
                                <div class="form-group">
                                    <label for="Vehicle Document">Vehicle Company</label>
                                    <select class="form-control" name="vhcl_cmp" id="vhcl_cmp" title="Choose vehicle Company.">
                                        <option value="">select vehicle company</option>
                                        <option value="1">Audi</option>
                                        <option value="2">BMW</option>
                                        <option value="3">Eagle</option>
                                        <option value="4">Scoda</option>
                                        <option value="5">Honda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Vehicle Document">Vehicle Company Model</label>
                                    <select class="form-control" name="vhcl_cmp_mdl" id="vhcl_cmp_mdl" title="Choose vehicle company model.">
                                        <option value="">select vehicle company model</option>
                                        <option value="1">model 1</option>
                                        <option value="2">model 2</option>
                                        <option value="3">model 3</option>
                                        <option value="4">model 4</option>
                                        <option value="5">model 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Vehicle Document">Vehicle Category</label>
                                    <select class="form-control" name="vhcl_cmp_mdl" id="vhcl_cmp_mdl" title="Choose vehicle company model.">
                                        <option value="">select vehicle category</option>
                                        <option value="1">Motorcycle</option>
                                        <option value="2">Car</option>
                                        <option value="3">Truck</option>
                                        <option value="4">Bus</option>
                                        <option value="5">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Vehicle Document">Vehicle Document</label>
                                    <input type="file" class="form-control" name="vhcl_doc" id="vhcl_doc" placeholder="Vehicle Document" title="choose vehicle document.">
                                    <p><strong>eg:</strong> Registraition Card, Costom Card</p>
                                </div>
                                <div class="form-group">
                                    <label for="Sequence Number">Sequence Number</label>
                                    <input type="text" class="form-control" name="sequence_no" id="sequence_no" placeholder="Suquence Number" title="enter sequence number.">
                                </div>
                                <div class="form-group">
                                    <label for="Vehicle Use">Vehicle Use</label>
                                    <select class="form-control" name="vhcl_use" id="vhcl_use" title="Choose vehicle use.">
                                        <option value="">select vehicle use</option>
                                        <option value="1">Commercial</option>
                                        <option value="2">Car Rental</option>
                                        <option value="3">Passenger Transeport</option>
                                        <option value="4">Goods Transport</option>
                                        <option value="5">Petroleum Derivative Transport</option>
                                    </select>
                                </div>
                                <div class="form-group"><br>
                                    <button class="btn btn-md btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-md" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-step4" role="tabpanel">
                            <h5 class="text-center">Choose Driver <button class="btn btn-primary btn-xs">Skip</button></h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Driver Name</th>
                                        <th scope="col">Mobile No</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Abc</td>
                                        <td>1234567890</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Pqr</td>
                                        <td>1234567890</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Rst</td>
                                        <td>1234567890</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Xyz</td>
                                        <td>1234567890</td>
                                        <td><button class="btn btn-primary btn-xs">Select</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <h5 class="text-center">OR</h5>
                            <hr>
                            <h5 class="text-center">Add Driver Details</h5>
                            <form class="form" action="#" method="post" id="drvr_dtls_Form">
                                <div class="form-group">
                                    <label for="Driving Licence">Driving Licence</label>
                                    <input type="text" class="form-control" name="drvng_licence_no" id="drvng_licence_no" placeholder="Driving Licence" title="enter driving dicence number.">
                                </div>
                                <div class="form-group">
                                    <label for="driver name">Full name</label>
                                    <input type="text" class="form-control" name="drvr_name" id="drvr_name" placeholder="driver name" title="enter driver name.">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Mobile Number</label>
                                    <input type="text" class="form-control" name="drvr_mobile_no" id="drvr_mobile_no" placeholder="enter mobile number" title="enter mobile number.">
                                </div>
                                <div class="form-group">
                                    <label for="date of birth">Date of Birth</label>
                                    <input type="date" class="form-control" name="drvr_dob" id="drvr_dob" placeholder="choose Date of birth" title="choose date of birth.">
                                </div>
                                <div class="form-group">
                                    <label for="driving percentage">Driving Percentage</label>
                                    <select class="form-control" name="drvng_persntg" id="drvng_persntg" placeholder="25% ,50% ,75% ,100%" title="25% ,50% ,75% ,100%.">
                                        <option value=""></option>
                                        <option value="25">25%</option>
                                        <option value="50">50%</option>
                                        <option value="75">75%</option>
                                        <option value="100">100%</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Has relationship with policyholder?">Has relationship with policyholder?</label>
                                    <select class="form-control" name="relationship" id="relationship" title="choose a relationship">
                                        <option value="">Relationship</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Home Address">Home Address</label>
                                    <textarea class="form-control" name="drvr_address" id="drvr_address" placeholder="Home Address" title="enter driver home address."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="driver education">Education</label>
                                    <input type="text" class="form-control" name="drvr_education" id="drvr_education" placeholder="Driver Education" title="enter driver education.">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <button class="btn btn-md btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-md" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-step5" role="tabpanel"><h5 class="text-center">Insurance Quotes will come here.</h5></div>
                        <div class="tab-pane fade" id="nav-step6" role="tabpanel"><h5 class="text-center">Payment gateway integration will come here.</h5></div>
                        <div class="tab-pane fade" id="nav-step7" role="tabpanel"><h5 class="text-center">after successfull payment ,Insurance details will be shown here.</h5></div>
                    </div>
                </div>
            </div>
            <!--/col-12-->
        </div>
        <!--/row-->
    </div>
</div>
<!-- LOGIN ENDS -->
@endsection