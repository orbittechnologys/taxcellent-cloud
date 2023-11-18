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
                                    <h1 class="sit-title">We take care of your GST filings <br /> so you can focus <strong>on your business</strong></h1>
                                    <p class="sit-discription">Easy-to-use GST invoice generation tool along with a dedicated expert to <br /> file your GST returns</p>
                                    <div class="sit-btn-blk gst-service-btn-blk">
                                        <ul>
                                            <li><a href="{{ url('manageinvoice') }}" class="nw-btn nw-btn-green">GST Invoicing</a></li>
                                            <li><a href="{{ url('service/gst-returns-filing-services') }}" class="nw-btn nw-btn-green">GST Return Filing</a></li>
                                            <li><a href="{{ url('service/gst-registration-services') }}" class="nw-btn nw-btn-green">GST Registration</a></li>
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-top-img">
                                    <img src="{{ asset('template/images/services/gst-service-img1.png') }}" alt="" />
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
                                    <h2>So, what brings you here today?</h2>
                                    <p>Using Taxcellent is simple</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="gst-service-box">
                                    <h3 class="gst-stitle">I want to file GST Returns</h3>
                                    <ul class="gst-sevice-cntbx">
                                        <li class="gst-service-content">
                                            <div class="icon-box">01 <span>Step</span></div>
                                            <p class="swl-title">Select a GST return filing plan based on the number of monthly sales and purchase invoices</p>
                                        </li>
                                        <li class="gst-service-content">
                                            <div class="icon-box">02 <span>Step</span></div>
                                            <p class="swl-title">Upload sales purchase bills on your Taxcellent dashboard</p>
                                        </li>
                                        <li class="gst-service-content">
                                            <div class="icon-box">03 <span>Step</span></div>
                                            <p class="swl-title">Your dedicated expert reviews your transactions and files your GST return on time!</p>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" class="nw-btn nw-btn-green">Get Started</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="gst-service-box">
                                    <h3 class="gst-stitle">I want to create GST invoices</h3>
                                    <ul class="gst-sevice-cntbx">
                                        <li class="gst-service-content">
                                            <div class="icon-box">01 <span>Step</span></div>
                                            <p class="swl-title">Sign up on Taxcellent and go to INVOICES section of your dashboard</p>
                                        </li>
                                        <li class="gst-service-content">
                                            <div class="icon-box">02 <span>Step</span></div>
                                            <p class="swl-title">Create your company, add customer details and save, send and print GST compliant invoices.</p>
                                        </li>
                                        <li class="gst-service-content">
                                            <div class="icon-box">03 <span>Step</span></div>
                                            <p class="swl-title">Say good bye to unnecessary paperwork, our software maintains your online transaction log!</p>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" class="nw-btn nw-btn-green">Get Started</a>
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
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#enquire-popup" class="nw-btn nw-btn-green">Contact Us</a>
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