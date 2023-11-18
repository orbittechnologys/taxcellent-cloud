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
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Edit-Profile</span>
            </div>
        </div>
        
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row row-sm">
        <!-- Col -->
        <div class="col-lg-4">
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
                                        @else 
                                        Admin
                                        @endif</p>
                                </div>
                            </div>
                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label tx-13 mg-b-25">
                        Contact
                    </div>
                    <div class="main-profile-contact-list">
                        <div class="media">
                            <div class="media-icon bg-primary-transparent text-primary">
                                <i class="icon ion-md-phone-portrait"></i>
                            </div>
                            <div class="media-body">
                                <span>Mobile</span>
                                <div>
                                    +245 354 654
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-success-transparent text-success">
                                <i class="icon ion-logo-slack"></i>
                            </div>
                            <div class="media-body">
                                <span>Slack</span>
                                <div>
                                    @spruko.w
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-info-transparent text-info">
                                <i class="icon ion-md-locate"></i>
                            </div>
                            <div class="media-body">
                                <span>Current Address</span>
                                <div>
                                    San Francisco, CA
                                </div>
                            </div>
                        </div>
                    </div><!-- main-profile-contact-list -->
                </div>
            </div>
        </div>

        <!-- Col -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($adminData, array('method' => 'post', 'data-parsley-validate' => ''  ,'route' => array('admin.userAccountUpadte'))) !!}
                    {{csrf_field()}}
                    <div class="mb-4 main-content-label">Personal Information</div>
                        <div class="mb-4 main-content-label">Details</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Full Name <span class="tx-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                {!! Form::text('name', null, array('class'=> 'form-control', 'id'=>'name','required'=> '' ,'placeholder'=>__('Full Name'))) !!}
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Email Address <i><span class="tx-danger">*</span>(required)</i></label>
                                </div>
                                <div class="col-md-9">
                                {!! Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>__('Email'))) !!}
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                </div>
                {!! Form::close() !!}
                <div class="card-body">
                    <div class="mb-4 main-content-label">Password Info</div>
                    {{  Form::open(array('method' => 'post', 'route' => array('admin.userAccountPassword')))  }}
                    {{csrf_field()}}
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Change Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Re-type New Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" /> </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Password</button>
                        <input type="reset" class="btn default" value="Cancel">
                    </div>
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
</div>
<!-- Container closed -->
@endsection
@push('scripts')
<!--Internal  Parsley.min js -->
<script src="{{ asset('dashboard/assets/plugins/parsleyjs/parsley.min.js') }}"></script>
<!-- Internal Form-validation js -->
<script src="{{ asset('dashboard/assets/js/form-validation.js') }}"></script>
@endpush