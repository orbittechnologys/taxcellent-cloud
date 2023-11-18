@extends('layouts.master')

@section('content')

@include('layouts.inc.header')

<div class="fullpageremove">
        <div class="page-wrapper">
            <div class="section fp-auto-height bg-white service-top-main compliances-service" id="section01">
                <div class="nw-services-section nws-top-banner">
                    <div class="container">
                        <div class="service-wrp service-top-wrp">
                            <div class="service-top-cnt-blk">
                                <div class="service-info">
                                    <h1 class="sit-title">A simple approach to ensuring <br /> regulatory <strong>business compliances</strong></h1>
                                    <p class="sit-discription">
                                        Thousands of business owners use Taxcellent for their <br />
                                        regulatory compliances
                                    </p>
                                    <div class="sit-btn-blk">
                                        <ul>
                                            
                                            <li><a href="{{ url('service/import-export-code-registration-services') }}" class="nw-btn nw-btn-green">Import Export Code</a></li>
                                            <li><a href="{{ url('service/digital-signature-certificate-dsc-token') }}" class="nw-btn nw-btn-green">Digital Signature Certificate</a></li>
                                            <li><a href="{{ url('service/director-identification-number-services') }}" class="nw-btn nw-btn-green">Director identification Number</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-top-img">
                                    <img src="{{ asset('template/images/services/accounting-and-text-service1.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section fp-auto-height bg-light service-middle-main" id="section02">
                <div class="nws-middle-blk">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="nws-middle-title-block">
                                    <h2>So, How Does It Work?</h2>
                                    <p>Using Taxcellent is simple</p>
                                </div>
                            </div>
                        </div>
                        <div class="row single-work-list">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="text-wrapper">
                                    <div class="icon-box">
                                        01 <span>Step</span>
                                    </div>
                                    <h3 class="swl-title">Simply select the service category <br /> from the options above</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/accounting-and-text-service2.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row single-work-list">
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-last">
                                <div class="text-wrapper">
                                    <div class="icon-box">
                                        02 <span>Step</span>
                                    </div>
                                    <h3 class="swl-title">Our software connects you with our in- <br /> house dedicated expert</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-first">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/accounting-and-text-service3.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row single-work-list">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="text-wrapper">
                                    <div class="icon-box">
                                        03 <span>Step</span>
                                    </div>
                                    <h3 class="swl-title">Job’s done. <br /> You can focus on your work now that your <br /> compliances are taken care of!</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/compliance-service-img1.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section fp-auto-height bg-white call-action-main" id="section03">
                <div class="call-action-blk">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="call-action-img">
                                    <img src="{{ asset('template/images/services/call-action-img.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="call-action-content">
                                    <h2>Have Questions? <br /> We are here to help!</h2>
                                    <p>Contact us and our executive will get back to you as soon as possible!</p>
                                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#enquire-popup" class="nw-btn nw-btn-green">Contact Us</a>
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