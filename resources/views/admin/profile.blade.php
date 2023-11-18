@extends('layouts.dashboard.dash_master')
@section('css')

@stop
@section('content')
@include('admin.inc.header')

<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Admin</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ Profile</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="ps-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user">
                                <img alt="profile" src="{{ asset('template/images/Taxcellent_Logo/AppIcons/playstore.png') }}">
                            </div>
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name"><?= $adminData->name; ?></h5>
                                    <p class="main-profile-name-text"><?php $profileId = $adminData->is_super; ?>
                                        @if( $profileId == 1 )
                                            Super Admin
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Basic Details</label>
                            <div class="main-profile-social-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Email Id</span> <?= $adminData->email; ?>
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
<!-- Container closed -->

@endsection