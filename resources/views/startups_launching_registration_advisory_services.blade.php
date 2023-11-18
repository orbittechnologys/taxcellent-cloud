@extends('layouts.master')
@section('css')
    <!-- <link href="{{ asset('template/css/servicepagecss17e6.css?v=1') }}" rel="stylesheet" /> -->
    
    <link href="{{ asset('template/cssmin/landing-slider07b2.css?v=90') }}" rel="stylesheet" async type="text/css" />
    <link href="{{ asset('template/cssmin/style.minb759.css?v=1.1.005') }}" rel="stylesheet" async type="text/css" />
    

    <link href="{{ asset('template/css/style.min534c.css?v=15.10.4.5.1.004') }}" rel="stylesheet" type="text/css" />
    <style>
        .fp-viewing--1 {
            overflow-y: scroll !important;
        }
		ol.breadcrumb { text-align: right; }
ol.breadcrumb li.active { color:#fff; }
ol.breadcrumb li a { color:#fff; }
ol.breadcrumb li.active a{color:#1fce99 !important;}
ol.breadcrumb li a {
    color: #0000ff;
}
.wrapper-bread{background: #fff;padding: 5px 0 0;}
.navbar-default{box-shadow:inherit;border:none;}
    </style>
    @stop
@section('content')

@include('layouts.inc.header')
<div class="fullpageremove">
    <div class="page-wrapper">   
        <!-- CONTAINER -->
        <div class="wrapper-bread">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-top-static">
                            <ol class="breadcrumb" style="text-align:left">
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../services.html"> Services</a></li>
                                <li><a href='../accounting-and-tax-service.html'> Accounting & Tax</a></li><li> Startup launching</li>


                            </ol>
                        </div>
                    </div>
                </div>
            </div>
			</div>
            <!-- /.CONTAINER -->
        <!-- REQUEST CALL BACK -->
        <div class="insta-request-call-back-block">
            <!-- CONTAINER -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ins-rcb-container-block">
                                <h1>  Get ahead, get started! </h1>
                                    <h2>
                                        <span> An entrepreneur must make multiple decisions in a day, this would be one of the smarter ones. </span>
                                    </h2>
                                    <ul class="rcb-business-name">
                                        <li>Hand Holding l ROC filing l Accounting  </li>
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.CONTAINER -->
        </div>
        <!-- /. REQUEST CALL BACK -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
        <!-- CONTAINER -->
            <div class="container">
                <div class="row">
                    <input type="hidden" id="service_id" value="2" name="service_id">
                    <input type="hidden" id="sub_cat_id" value="4" name="sub_cat_id">
                    <input type="hidden" id="serPrice" value="12000" name="serPrice">
                    <div class="col-md-4 col-sm-5 col-xs-12 col-md-push-8 col-sm-push-7 col-xs-push-0">
                        
                        <div class="ins-request-call-back-form2">
                            <div class="panel-heading">
                                <span class="pricely-label mobile-view-title">Hand Holding</span>
                                <div class="pricely-figure">
                                    <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                    <span class="pricely-amount">20,125</span>
                                    <span class="per-return-text"></span>
                                </div>
                                <span class="pricely-button"><a href="javascript:;" id="15" class="btn btn-teal waves-effect waves-ripple buycartitem_withoutpackageclick">Buy plan</a></span>
                            </div>
                            <div class="talktoexpert-form">
                                <h2>Talk to our experts</h2>
                                <div class="input-box Req_fnamediv">
                                    <label class="formLabel" for="">First Name</label>
                                    <input type="text" class="formInput" required id="Req_txtname" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_lnamediv">
                                    <label class="formLabel" for="">Last Name</label>
                                    <input type="text" class="formInput" required id="Req_txtlastname" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_emailaddressdiv">
                                    <label class="formLabel" for="">Email</label>
                                    <input type="text" class="formInput" required id="Req_txtenquiryemail" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_phonediv">
                                    <label class="formLabel" for="">Phone Number</label>
                                    <input type="text" class="formInput" required id="Req_txtphone" name="" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <button type="submit" class="btn btn-insGreen waves-effect waves-ripple requestcallbackclick">Request a Callback</button>
                                </div>

                                <div class="information-tag">
                                    <p>Your information is 100% safe with us</p>
                                    <img src="../images/safe-icon.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12 col-md-pull-4 col-sm-pull-5 col-xs-pull-0">
                        <div class="pricely-chart2 plcrs-blk">
                            <div class="plan-block">
                                <div class="plan-inner-block">
                                    <h3>Hand Holding</h3>
                                    <div class="plan-discription">
                                        <h4>Services included:</h4>
                                        <ul>
                                        <li>
                                                            <i class="ion-checkmark-round"></i>  Advisory on Startup Compliances                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Company registration with Registrar of Companies                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Drafting Legal Agreements (5 nos)                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Tax registration – GST and income tax (PAN/TAN)                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Includes Govt. fees &amp; Stamp duty ( auth. share capital @ Rs. 5,00,000 )                                            </li>
                                        </ul>
                                    </div>
                                    <div class="plan-discription">
                                        <h4>Ideal For:</h4>
                                        <ul>
                                                                <li>
                                                                                    <i class="ion-arrow-right-b"></i>  People wanting to launch their startup
                                                                </li>
                                                                <li>
                                                                                    <i class="ion-arrow-right-b"></i>  (Indian startups only)
                                                                </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                                                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="ins-request-call-back-form2 mobile-ins-rewuest-call-back-form2">
                            <div class="talktoexpert-form talktoexpert-form-mobile">
                                <h2>Talk to our experts</h2>
                                <div class="input-box Req_fnamediv">
                                    <label class="formLabel" for="">First Name</label>
                                    <input type="text" class="formInput" required id="Req_txtname" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_lnamediv">
                                    <label class="formLabel" for="">Last Name</label>
                                    <input type="text" class="formInput" required id="Req_txtlastname" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_emailaddressdiv">
                                    <label class="formLabel" for="">Email</label>
                                    <input type="text" class="formInput" required id="Req_txtenquiryemail" name="" autocomplete="off">
                                </div>
                                <div class="input-box Req_phonediv">
                                    <label class="formLabel" for="">Phone Number</label>
                                    <input type="text" class="formInput" required id="Req_txtphone" name="" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <button type="submit" class="btn btn-insGreen waves-effect waves-ripple requestcallbackclick">Request a Callback</button>
                                </div>

                                <div class="information-tag">
                                    <p>Your information is 100% safe with us</p>
                                    <img src="../images/safe-icon.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- SELLING POINT BLOCK -->
            <div class="ins-selling-point-block">
                <!-- CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="h2Title">Why Taxcellent?</h2>
                            <div class="ins-selling-point-content-block">
                                <ul>
                                    <li>
                                        <div class="ins-sp-block">
                                            <span class="ins-sp-icon">
                                                <img src="{{ asset('template/images/svg-icon/accurate-calculation.svg') }}" alt="100% Accurate Calculations">
                                            </span>
                                            <h5 class="c-darkgreen">Accurate Calculation</h5>
                                            <p>Our calculations are 100% accurate so your taxes will be done right, guaranteed.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ins-sp-block">
                                            <span class="ins-sp-icon">
                                                <img src="{{ asset('template/images/svg-icon/comprehensive-review.svg') }}" alt="Every Details Reviewed">
                                            </span>
                                            <h5 class="c-offgreen">Comprehensive Review</h5>
                                            <p>Our expert C.A.s ensure a comprehensive review of your tax return for your peace of mind</p>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="ins-sp-block">
                                            <span class="ins-sp-icon">
                                                <img src="{{ asset('template/images/svg-icon/data-security.svg') }}" alt="Secure Payments">
                                            </span>
                                            <h5 class="c-offyellow"> Data Security</h5>
                                            <p>We understand that you care about how safe your information is with us.</p>
                                            <p>Don't worry, we care about keeping it secure as much as you do.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ins-sp-block">
                                            <span class="ins-sp-icon">
                                                <img src="{{ asset('template/images/svg-icon/customer-service.svg') }}" alt="Friendly Customer Service">
                                            </span>
                                            <h5 class="c-offred">Friendly Customer Support</h5>
                                            <p>We believe that there's no such thing as an unnecessary question.</p>
                                            <p>Do let us know if you have any questions and we'll be happy to help.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.CONTAINER -->
            </div>
            <!-- / .SELLING POINT BLOCK -->
            <!-- ENQUIER NOW -->
            <div class="ins-enquier-now-block">
                <!-- CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ins-enquier-now-content-block">
                                <span>Talk to a CA to know more!</span> <button type="submit" class="btn btn-default btn-shadow" data-toggle="modal" data-target="#enquire-popup">Enquire Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.CONTAINER -->
            </div>
            <!-- / .ENQUIER NOW -->
            <!-- HOW IT WORK BLOCK -->
            <div class="NW-ins-how-it-work-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="NW-ins-HIW-content-block">
                                <h2><strong>How it works</strong> <br> Using Taxcellent is simple...</h2>
                                <div class="clearfix"></div>
                                <ul>
                                    <li class="col-md-4 col-sm-4">
                                        <div class="ins-steps"><span>1</span></div>
                                        <div class="NW-ins-HTW-icon-block">
                                            <img src="{{ asset('template/images/svg-icon/sign-up.svg') }}" />
                                        </div>
                                        <div class="NW-ins-HTW-container-block">
                                            <h6>Sign Up</h6>
                                            <p>Choose any of our C.A. assisted plans according to your requirements</p>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-4">
                                        <div class="ins-steps"><span>2</span></div>
                                        <div class="NW-ins-HTW-icon-block">
                                            <img src="{{ asset('template/images/svg-icon/upload.svg') }}" />
                                        </div>
                                        <div class="NW-ins-HTW-container-block">
                                            <h6>Upload</h6>
                                            <p>Upload your documents as per the checklist. You can interact with the C.A. assigned to you for all your queries.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-4">
                                        <div class="ins-steps"><span>3</span></div>
                                        <div class="NW-ins-HTW-icon-block">
                                            <img src="{{ asset('template/images/svg-icon/benefit.svg') }}" />
                                        </div>
                                        <div class="NW-ins-HTW-container-block">
                                            <h6>Benefit</h6>
                                            <p>From best quality services provided by our expert C.A.s</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .HOW IT WORK BLOCK -->
            <!-- CONTACT SUPPORT BLOCK -->
            <div class="ins-contact-support-block">
                <div class="container">
                    <div class="row">
                        <div class="ins-contact-support-wrap">
                            <div class="col-md-5">
                                <div class="ins-contact-support-icon">
                                    <img src="{{ asset('template/images/contact-support-icon.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="ins-contact-support-content-block">
                                    <h3>Any Questions? <br> <strong>Our Support team is happy to help</strong></h3>
                                    <button type="submit" class="btn btn-insGreen waves-effect waves-ripple" data-toggle="modal" data-target="#enquire-popup">Contact Support</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .CONTACT SUPPORT BLOCK -->         
        @include('layouts.inc.footer')
    </div>
</div>
<div id="pageloader" style="display:none">
    <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
</div>

@endsection

@push('scripts')
<script src="{{ asset('template/js/customf500.js?v=13') }}"></script>
@endpush
