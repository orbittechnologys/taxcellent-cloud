@extends('layouts.dashboard.user_master')
@section('css')
<!-- Maps css -->
<link href="{{ asset('dashboard/assets/css/usercss.css')}}" rel="stylesheet">
<link href="{{ asset('dashboard/assets/css/animate.css')}}" rel="stylesheet">
@stop
@section('content')

@include('user.inc.header')

<div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Dashboard</h2>
                </div>
            </div>
            
        </div>
        <!-- breadcrumb -->
        
            <div class="row row-sm">
                <div class="myAccount-dashboard-block">
                    <div class="col-md-4 col-sm-4 col-xs-6 animated" data-animation="fadeInUp" data-animation-delay="200">
                        <div class="myDashboard-box-block Hov-icon">
                            <a href="{{ route('myprofile') }}">
                                <div class="myDashboard-icon-block">
                                    <img src="{{ asset('template/images/icons/arrow-1.png') }}" alt="" />
                                </div>
                                <h2>My Profile</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 animated" data-animation="fadeInUp" data-animation-delay="300">
                        <div class="myDashboard-box-block Hov-icon">
                            <a href="/mysubscription">
                                <div class="myDashboard-icon-block">
                                    <img src="{{ asset('template/images/icons/documents.png') }}" alt="" />
                                </div>
                                <h2>My Subscriptions</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 animated" data-animation="fadeInUp" data-animation-delay="600">
                        <div class="myDashboard-box-block Hov-icon">
                            <a href="/mypayment">
                                <div class="myDashboard-icon-block">
                                    <img src="{{ asset('template/images/icons/invoice.png') }}" alt="" />
                                </div>
                                <h2>My Payments</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 animated" data-animation="fadeInUp" data-animation-delay="600">                                                                                                                <div class="col-md-4 col-sm-4 col-xs-6 animated" data-animation="fadeInUp" data-animation-delay="600">
                        <div class="myDashboard-box-block Hov-icon">
                            <a href="javascript:void(0)">
                                <div class="myDashboard-icon-block">
                                    <img src="{{ asset('template/images/icons/help.png') }}" alt="" />
                                </div>
                                <h2>Help</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
</div>
<!-- Container closed -->

@endsection

@push('scripts')

    @endpush