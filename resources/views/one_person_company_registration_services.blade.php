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
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('services') }}"> Services</a></li>
                                <li><a href="{{ url('business-registration-service') }}"> Business Registration</a></li>

                                <li class="active"><a style = "color:#909090 !important;"> One Person Company Registration </a></li>
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
                <input type="hidden" id="service_id" value="1" name="service_id">
                <input type="hidden" id="sub_cat_id" value="3" name="sub_cat_id">
                <input type="hidden" id="serPrice" value="9499" name="serPrice">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ins-rcb-container-block">
                                <h1> Trust us with your application <br> for company incorporation </h1>
                                    <h2>
                                        <span> We take care of the small things so that you can focus on the big picture </span>
                                    </h2>
                                    <ul class="rcb-business-name">
                                        <li>Private limited company registration l One person company registration l Limited liability partnership registration l <br> NGO registration l Proprietorship firm registration  </li>
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
                    <div class="col-md-4 col-sm-5 col-xs-12 col-md-push-8 col-sm-push-7 col-xs-push-0">
                        
                        <div class="ins-request-call-back-form2">
                            <div class="panel-heading">
                                <span class="pricely-label mobile-view-title">One Person Company Registration</span>
                                <div class="pricely-figure">
                                    <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                    <span class="pricely-amount">9,499</span>
                                    <span class="per-return-text">per registration</span>
                                </div>
                                <span class="pricely-button pric-btn-btm"><button class="btn btn-teal waves-effect waves-ripple" onclick="buyNow()">Buy plan</button></span>
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
                                    <img src="{{ asset('template/images/safe-icon.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12 col-md-pull-4 col-sm-pull-5 col-xs-pull-0">
                        <div class="pricely-chart2 plcrs-blk">
                            <div class="plan-block">
                                <div class="plan-inner-block">
                                    <h3>One Person Company Registration</h3>
                                    <div class="plan-discription">
                                        <h4>Services included:</h4>
                                        <ul>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Filing of E-forms with the Registrar of Companies (ROC)                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Director Identification Numbers (1 no.)                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Digital Signature Certificates (1 no.)                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Name approval (RUN)                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Finalising of Memorandum of Association (MOA) &amp; Articles of Association (AOA                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Follow-up untill issue of Certificate of Incorporation                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> PAN Application                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> TAN Registration                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Includes Government Fees &amp; stamp duty upto Rs. 1 Lakh Authorized Capital                                            </li>
                                        <li>
                                                            <i class="ion-checkmark-round"></i> Excludes foreign national or Foreign Body Corporate as a director OR business that need approval from RBI, SEBI or IRDA for incorporation                                            </li>
                                        </ul>
                                    </div>
                                    <div class="plan-discription">
                                        <h4>Ideal For:</h4>
                                        <ul>
                                                                <li>
                                                                                    <i class="ion-arrow-right-b"></i>  Entrepreneurs who wish to form a company with limited liability
                                                                </li>
                                                                <li>
                                                                                    <i class="ion-arrow-right-b"></i>  Proprietorship firm looking to get status of a company
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
                                    <img src="{{ asset('template/images/safe-icon.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
