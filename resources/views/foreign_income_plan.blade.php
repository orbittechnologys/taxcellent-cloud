@extends('layouts.master')

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
                                    <li><a> Individual With Foreign Income</a></li>


                                    <li class="active"><a style = "color:#909090 !important;"> Foreign Income Plan </a></li>
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
                                    <h1> E-filing Income Tax Returns in India </h1>
                                        <h2>
                                            <span> Maximise Deductions, Minimise Taxes </span>
                                        </h2>
                                        <ul class="rcb-business-name">
                                            <li>Salary income l Pension income l Capital gain from property l Capital gain from securities l Capital gain from other assets l  Rental income l Dividend income l Interest income l Gifts received l Gambling winnings l Winnings from lotteries l ESOPs  </li>
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
                            <input type="hidden" id="service_id" value="6" name="service_id">
                            <input type="hidden" id="sub_cat_id" value="16" name="sub_cat_id">
                            <input type="hidden" id="serPrice" value="3499" name="serPrice">
                            <div class="ins-request-call-back-form2">
                                <div class="panel-heading">
                                    <span class="pricely-label mobile-view-title">Foreign Income Plan</span>
                                    <div class="pricely-figure">
                                        <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                        <span class="pricely-amount">3,499</span>
                                        <span class="per-return-text">per application</span>
                                    </div>
                                    <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple" onclick="buyNow()">Buy plan</button></span>
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
                                        <h3>Foreign Income Plan</h3>
                                        <div class="plan-discription">
                                            <h4>Services included:</h4>
                                            <ul>
                                            <li>
                                                                <i class="ion-checkmark-round"></i> Income tax return filing                                            </li>
                                            </ul>
                                        </div>
                                        <div class="plan-discription">
                                            <h4>Ideal For:</h4>
                                            <ul>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Single form 16 and / or
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  One house property
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Interest Income
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Multiple form 16
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Other income (dividend etc.)
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Capital gains from property
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  ESOP in Indian company
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  PSU employees with salary arrears under OROP, 6th Pay and 7th Pay commission
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Capital gains from Securities
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Multiple house properties
                                                                    </li>
                                                                    <li>
                                                                                        <i class="ion-arrow-right-b"></i>  Foreign Income
                                                                    </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                                                    <div class="dv-Disclaimer">
                                        <h4>Disclaimer</h4>
                                        <ul>
                                            <li class="asterisk">if you need clarification regarding the package that applies in your case, please write to <a href="../cdn-cgi/l/email-protection.html#d3babdb5bc93babda0a7b2b0b2fdbabd"><span class="__cf_email__" data-cfemail="5c35323a331c35322f283d3f3d723532">[email&#160;protected]</span></a></li>
                                            <li class="asterisk">We will get back to you on any ITR related queries  in 72 hours</li>
                                        </ul>
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
        @include('layouts.inc.footer')
        </div>
    </div>
    <div id="pageloader" style="display:none">
        <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
    </div>
@endsection