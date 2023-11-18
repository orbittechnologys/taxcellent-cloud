@extends('layouts.master')

@section('content')

@include('layouts.inc.header')

<div class="fullpageremove">
        <div class="page-wrapper">
           
            <div class="section fp-auto-height bg-white service-top-main accounting-tax-service" id="section01">
                <div class="nw-services-section nws-top-banner">
                    <div class="container">
                        <div class="service-wrp service-top-wrp">
                            <div class="service-top-cnt-blk">
                                <div class="service-info">
                                    <h1 class="sit-title">Accounting and Tax compliance <br /> platform that is actually <strong>easy-to-use</strong></h1>
                                    <p class="sit-discription">Simplify bookkeeping, GST return filing,</p>
                                    <p class="sit-discription">TDS return filing and company compliances.</p>
                                    <div class="sit-btn-blk">
                                        <ul>
                                            
                                            <li><a href="{{ url('complete-business-accounting') }}" class="nw-btn nw-btn-green">Accounting and Tax package</a></li>
                                            <li><a href="{{ url('service/startups-accounting-bookkeeping-services') }}" class="nw-btn nw-btn-green">Startup Accounting</a></li>
                                            <li><a href="{{ url('service/startups-launching-registration-advisory-services') }}" class="nw-btn nw-btn-green">Startup launching</a></li>
                                            
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
                                    <h3 class="swl-title">Simply select the relevant option for the <br /> Complete Business Package</h3>
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
                                    <h3 class="swl-title">Our software connects with our in-house <br /> dedicated expert who starts working on <br /> your accounting & tax requirements</h3>
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
                                    <h3 class="swl-title">Upload documents and download monthly <br /> reports from your Taxcellent dashboard</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/accounting-and-text-service4.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row single-work-list">
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-last">
                                <div class="text-wrapper">
                                    <div class="icon-box">
                                        04 <span>Step</span>
                                    </div>
                                    <h3 class="swl-title">Your online accounts department is all <br /> setup so you can focus on your business!</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-first">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/accounting-and-text-service5.png') }}" alt="" />
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