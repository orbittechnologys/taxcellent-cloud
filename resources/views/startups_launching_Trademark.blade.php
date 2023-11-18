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
                                <li><a href="{{ url('legal-service') }}"> legal</a></li>
                                <li class="active"><a style = "color:#909090 !important;">Trademark Application</a></li>

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
                                    <span>  </span>
                                </h2>
                                <ul class="rcb-business-name">
                                    <li>Trademark Application And Registration  </li>
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
                        <div class="col-md-12">
                            <div class="pricely-chart pricely-professional">
                                <section class="pricely-chart-section">
                                    <div class="pricely-pro-dview pricely-pro">
                                        <table class="table" id="plantable">
                                            <thead>
                                                <tr class="plantableheader">
                                                    <th class="pricely-first-heading panel-default colm-400">
                                                        <h3 class="panel-heading">
                                                            <p class="pricely-paragraph"><span class="planIcon ion-ios-paper"></span></p>
                                                                <p class="pricely-foreword">Start ups-Trademark Application</p>
                                                        </h3>
                                                    </th>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="2" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="6" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="1" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="8500" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Basic">
                                                        <h3 class="panel-heading">
                                                            <span class="pricely-label">
                                                                Basic
                                                                <br /><span class="pricely-desc-label"><strong> </strong></span>
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount">8,500</span>

                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="2" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="6" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="2" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="12600" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Premium">
                                                        <h3 class="panel-heading">
                                                                                                                                    <span class="pricely-label">
                                                                Premium
                                                                <br /><span class="pricely-desc-label"><strong>  </strong></span>
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount"> 12,600</span>

                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="list-group panle-heading2">
                                                    <td class="list-group-item">
                                                        <h3 class="panel-heading">
                                                            <p class="pricely-foreword"> Services included:</p>
                                                        </h3>
                                                    </td>
                                                    <td colspan="4" class="list-group-item">&nbsp;</td>
                                                </tr>

                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Online Filing of ONE trademark application
                                                        </td>

                                                            <td class="list-group-item" id="td_Basic">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Advise on trademark classification
                                                        </td>

                                                            <td class="list-group-item" id="td_Basic">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Dedicated Advocate support
                                                        </td>

                                                            <td class="list-group-item" id="td_Basic">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Excludes the reply to Trademark Objections
                                                        </td>

                                                            <td class="list-group-item" id="td_Basic">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Drafting of Form TM-A
                                                        </td>

                                                            <td class="list-group-item" id="td_Basic">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Includes Govt. fee ( Rs. 4,500 / Rs. 9,000)
                                                        </td>

                                                            <td class="list-group-item" id="td_Basic">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="list-group panle-heading2">
                                                            <td class="list-group-item">
                                                                <h3 class="panel-heading">
                                                                    <p class="pricely-foreword"> Ideal for:</p>
                                                                </h3>
                                                            </td>
                                                            <td colspan="4" class="list-group-item">&nbsp;</td>
                                                        </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Registrations to be made in the name of an Individual/Start-up/Small Enterprise (having MSME certificate) or Proprietor
                                                        </td>

                                                            <td class="list-group-item" id="td_Basic">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-close-round x"></span>
                                                            </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Registrations to be made in the name of Companies such as Private Limited Company, partnership firm etc (which is not a small enterprise)
                                                        </td>
                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                            <td class="list-group-item" id="td_Premium">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="pricely-pro-Mview">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="pricely-inner panel-NW-green1" id="th_Basic">
                                                    <h3 class="panel-heading">
                                                        <span class="pricely-label">Basic</span>
                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount">8,500</span>
                                                        </div>
                                                        <span class="pricely-button"><a href="javascript:;" id="34" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>

                                                <ul class="list-group">
                                                <li class="list-group-item"><strong> Services included:</strong></li>
                                                                <li class="list-group-item">Online Filing of ONE trademark application</li>
                                                    <li class="list-group-item">Advise on trademark classification</li>
                                                    <li class="list-group-item">Dedicated Advocate support</li>
                                                    <li class="list-group-item">Excludes the reply to Trademark Objections</li>
                                                    <li class="list-group-item">Drafting of Form TM-A</li>
                                                    <li class="list-group-item">Includes Govt. fee ( Rs. 4,500 / Rs. 9,000)</li>
                                                        <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                    <li class="list-group-item">  Registrations to be made in the name of an Individual/Start-up/Small Enterprise (having MSME certificate) or Proprietor</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="pricely-inner panel-NW-green1" id="th_Premium">
                                                    <h3 class="panel-heading">
                                                        <span class="pricely-label">Premium</span>
                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount"> 12,600</span>
                                                        </div>
                                                        <span class="pricely-button"><a href="javascript:;" id=" 35" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>

                                                <ul class="list-group">
                                                <li class="list-group-item"><strong> Services included:</strong></li>
                                                                <li class="list-group-item">Online Filing of ONE trademark application</li>
                                                    <li class="list-group-item">Advise on trademark classification</li>
                                                    <li class="list-group-item">Dedicated Advocate support</li>
                                                    <li class="list-group-item">Excludes the reply to Trademark Objections</li>
                                                    <li class="list-group-item">Drafting of Form TM-A</li>
                                                    <li class="list-group-item">Includes Govt. fee ( Rs. 4,500 / Rs. 9,000)</li>
                                                        <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                    <li class="list-group-item">  Registrations to be made in the name of Companies such as Private Limited Company, partnership firm etc (which is not a small enterprise)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
