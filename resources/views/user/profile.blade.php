@extends('layouts.dashboard.user_master')
@section('css')

@stop
@section('content')

@include('user.inc.header')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Profile</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/My Profile</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

        <!-- row -->
    <div class="row row-sm">
        <div class="col-lg-4">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="ps-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user mx-auto d-block">
                                <img alt="" src="{{ asset('template/images/Taxcellent_Logo/AppIcons/playstore.png') }}">
                            </div>
                            <div class="d-flex justify-content-center mg-b-20">
                                <div>
                                    <h5 class="main-profile-name mb-3" style="text-transform: uppercase;"><?= $userData->firstName.' '.$userData->lastName?></h5>
                                    <a  href="{{ route('editprofile') }}">
                                        <button class="btn btn-dark btn-block btn-with-icon"><i class="mdi mdi-account-settings-variant"></i> Edit Profile</button>
                                    </a>
                                </div>
                            </div>
                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Your Basic Profile</label>
                            <div class="main-profile-social-list">
                            <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Full Name</span><?= $userData->firstName.' '.$userData->lastName?>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="la la-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Email address</span><?= $userData->email?>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Phone Number</span><?= $userData->mobile_num?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="active">
                                <a href="#home" data-bs-toggle="tab" aria-expanded="true"> <span
                                        class="visible-xs"><i
                                            class="las la-user-circle tx-16 me-1"></i></span> <span
                                        class="hidden-xs">ABOUT ME</span> </a>
                            </li>
                            <!-- <li class="">
                                <a href="#profile" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-industry tx-15 me-1"></i></span>
                                    <span class="hidden-xs">Business Details</span> </a>
                            </li>
                            <li class="">
                                <a href="#settings" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">Other Details</span> </a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab-content border-start border-bottom border-right border-top-0 p-4">
                        <div class="tab-pane active" id="home">
                            <h4 class="tx-15 text-uppercase mb-3">Personal Details</h4>
                            <div class="main-profile-social-list">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-primary-transparent text-primary">
                                                <i class="las la-birthday-cake"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>Date of Birth</span><?= $userData->dob?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-primary-transparent text-primary">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>Aadhar Card No</span><?= $userData->aadhar_card_number?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-profile-social-list">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-success-transparent text-success">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>PAN Number</span><?= $userData->PAN_Number?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-info-transparent text-info">
                                                <i class="fas fa-id-card"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>GST Number</span><?= $userData->GST_Number?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="tx-15 text-uppercase mb-3 mt-3">RESIDENTIAL ADDRESS</h4>
                            <div class="main-profile-social-list">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-primary-transparent text-primary">
                                                <i class="las la-city"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>City</span><?= $userData->city?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-primary-transparent text-primary">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>State</span><?= $userData->state?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-profile-social-list">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-success-transparent text-success">
                                                <i class="fa fa-map-pin"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>Pin Code</span><?= $userData->zip_code?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-icon bg-info-transparent text-info">
                                                <i class="si si-flag"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>Country</span><?= $userData->country?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-profile-social-list">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <div class="media-icon bg-info-transparent text-info">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="media-body">
                                                <span>Address</span><?= $userData->address1?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile">
                        </div>
                        <div class="tab-pane" id="settings">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
<!-- Container closed -->
@endsection

@push('scripts')

@endpush