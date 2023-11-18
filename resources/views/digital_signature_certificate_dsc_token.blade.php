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
                                    <li><a href='../compliances-service.html'> Compliance</a></li>


                                    <li class="active"><a style = "color:#909090 !important;"> Digital Signature Certificate </a></li>
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
                                    <h1> Obtain your DSC for secure online transactions </h1>
                                        <h2>
                                            <span>  </span>
                                        </h2>
                                        <ul class="rcb-business-name">
                                            <li>Uses of DSC: E-tendering l E-filing of taxes l Incorporation & registration of companies l MCA applications  </li>
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
                            <input type="hidden" id="service_id" value="4" name="service_id">
                            <input type="hidden" id="sub_cat_id" value="9" name="sub_cat_id">
                            <input type="hidden" id="serPrice" value="1499" name="serPrice">
                            <div class="ins-request-call-back-form2">
                                <div class="panel-heading">
                                    <span class="pricely-label mobile-view-title">Digital Signature Certificate</span>
                                    <div class="pricely-figure">
                                        <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                        <span class="pricely-amount">1,499</span>
                                        <span class="per-return-text">per DSC</span>
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
                                        <h3>Digital Signature Certificate</h3>
                                        <div class="plan-discription">
                                            <h4>Services included:</h4>
                                            <ul>
                                            <li>
                                             <i class="ion-checkmark-round"></i> Purchase of DSC USB e-token                                            </li>
                                            <li>
                                              <i class="ion-checkmark-round"></i> Documented follow up                                            </li>
                                            <li>
                                              <i class="ion-checkmark-round"></i> Request for Class III DSC having 2 years validity                                            </li>
                                            </ul>
                                        </div>
                                        <div class="plan-discription">
                                            <h4>Ideal For:</h4>
                                            <ul>
                                                <li>
                                                    Individuals or organizations that wish to apply for a Digital Signature Certificate (DSC) to authenticate their identity electronically.
                                                </li>
                                                 <li>
                                                    A DSC is required in the following cases :
                                                </li>
                                                 <li>
                                                    <i class="ion-arrow-right-b"></i>  For signing web forms, e-tendering documents, filing income tax returns, to access membership-based websites automatically without entering a user name and password etc .
                                                 </li>
                                                <li>
                                                    <i class="ion-arrow-right-b"></i>  Registrar of Companies e-filing
                                                </li>
                                                <li>
                                                    <i class="ion-arrow-right-b"></i>  Request for Class III DSC having 2 years validity
                                                </li>
                                                <li>
                                                    <i class="ion-arrow-right-b"></i>  Request for Class III DSC having 2 years validity
                                                </li>
                                                <li>
                                                    <i class="ion-arrow-right-b"></i>  Request for Class III DSC having 2 years validity
                                                </li>
                                                <li>
                                                    <i class="ion-arrow-right-b"></i>  Request for Class III DSC having 2 years validity
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
            @include('layouts.inc.footer')
        </div>
    </div>
    <div id="pageloader" style="display:none">
        <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
    </div>
@endsection