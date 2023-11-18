@extends('layouts.master')

@section('content')

@include('layouts.inc.header')

<div class="fullpageremove">
        <div class="page-wrapper">           
            <div class="section fp-auto-height bg-white service-top-main business-registration-service" id="section01">
                <div class="nw-services-section nws-top-banner">
                    <div class="container">
                        <div class="service-wrp service-top-wrp">
                            <div class="service-top-cnt-blk">
                                <div class="service-info">
                                {!! html_entity_decode($categoryData['cat_title']) !!}
                                <p class="sit-discription">
                                    {!! html_entity_decode($categoryData['cat_desc']) !!}
                                </p>
                                    <div class="sit-btn-blk">
                                        <ul>
                                            @if($serviceAry)
                                                @foreach($serviceAry as $serviceVal)
                                                <li><a href="{{ url('cat_service_details') }}/{{$serviceVal['slug']}}" class="nw-btn nw-btn-green">{{$serviceVal["service_name"]}}</a></li>
                                                @endforeach
                                            @endif

                                            <!--<li><a href="{{ url('service/private-limited-company-registration-services') }}" class="nw-btn nw-btn-green">Private Limited Company</a></li>
                                            <li><a href="{{ url('service/limited-liability-partnership-company-registration-services') }}" class="nw-btn nw-btn-green">Limited Liability Partnership</a></li>
                                            <li><a href="{{ url('service/one-person-company-registration-services') }}" class="nw-btn nw-btn-green">One Person Company</a></li>-->
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-top-img">
                                    <img src="{{ asset('template/images/services/business-service-img1.png') }}" alt="" />
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
                                    <h3 class="swl-title">Choose a package on our <br /> website</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/business-service-img2.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row single-work-list">
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-last">
                                <div class="text-wrapper">
                                    <div class="icon-box">
                                        02 <span>Step</span>
                                    </div>
                                    <h3 class="swl-title">Complete an easy-to-fill form on your <br /> Taxcellent Dashboard</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-first">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/business-service-img3.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row single-work-list">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="text-wrapper">
                                    <div class="icon-box">
                                        03 <span>Step</span>
                                    </div>
                                    <h3 class="swl-title">Our software connects you with our inhouse <br /> dedicated expert to answer your questions</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/business-service-img4.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row single-work-list">
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-last">
                                <div class="text-wrapper">
                                    <div class="icon-box">
                                        04 <span>Step</span>
                                    </div>
                                    <h3 class="swl-title">Job’s done. <br /> Celebrate the opening of your enterprise!</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 order-lg-first">
                                <div class="img-box">
                                    <img src="{{ asset('template/images/services/business-service-img5.png') }}" alt="" />
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