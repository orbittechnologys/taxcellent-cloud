
@extends('layouts.master')

@section('css')
<style>
 #sEmailaddress_SU::-webkit-input-placeholder{color:#999!important;font-style:italic!important;font-size:13px;}
 #sPhoneNumber_SU::-webkit-input-placeholder{color:#999!important;font-style:italic!important;font-size:13px;}
 body{
    background-color: #354955!important;
 }
</style>  
<link href="{{ asset('template/cssmin/style.min3860.css?v=1') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
<!-- PAGE CONTENT -->
<div id="pageloader" style="display:none">
    <img src="images/loader.gif" class="img-responsive" alt="loader" height="128" width="128">
</div>
<div class="login-content">
    <!-- CONTAINER -->
    <div class="login-content-middle-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ls-form-block">
                        <div class="ls-form-logo-block">
                            <a href="home.html"><img src="images/login-logo.png" alt="" /></a>
                        </div>
                        <div class="ls-form-content">
                            <a class="hiddenanchor" id="tologin"></a>
                            
                            <div id="tologinsignup">

                                <div id="login" class="animate ls-form">

                                        <h2>Sign up <a href="{{ url('/') }}" class="login-back-to-home"><i class="ion-chevron-left"></i> Home Page</a></h2>
                                        <div class="insta-input-form-block">
                                            <div class="row">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="input-box ">
                                                            <label class="formLabel" for="">First Name</label>
                                                            <input id="firstName" type="text" class="formInput @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required  autocomplete="off" />
                                                            @error('firstName')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="input-box ">
                                                            <label class="formLabel" for="">Last Name</label>
                                                            <input id="lastName" type="text" class="formInput @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required  autocomplete="off" />
                                                            @error('lastName')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box ">
                                                            <label class="formLabel" for="">Email</label>
                                                            <input  id="email" type="email" class="formInput @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  placeholder="We promise not to spam your mailbox!"  autocomplete="off" />
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box ">
                                                            <label class="formLabel" for="">Password</label>
                                                            <input id="password" type="password" class="formInput @error('password') is-invalid @enderror displaypassword" name="password" required autocomplete="off" />
                                                            <a href="javascript:;" class="hide-password">Show</a>
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box ">
                                                            <label class="formLabel" for="">Confirm Password</label>
                                                            <input id="password" type="password" class="formInput Confirmdisplaypassword" name="password_confirmation" required autocomplete="off" />
                                                            <a href="javascript:;" class="confirm-hide-password">Show</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box ">
                                                            <label class="formLabel" for="">Phone Number</label>
                                                            <input id="mobile_num" type="number" class="formInput" name="mobile_num"  placeholder="We promise we won't disturb you!" required autocomplete="off" />
                                                            @error('mobile_num')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box last-input">
                                                        <button type="submit" class="input-btn inst-btn-primary signupclick">Sign Up</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <p style="margin:0;">By signing up, you agree to the <a href="terms-and-condition.html" target="_blank" style="color:#00a79d;">Terms and conditions</a>  and <a href="privacypolicy.html" target="_blank" style="color:#00a79d;">Privacy Policy</a> including Cookie Use.</p>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <p class="change_link">
                                            Already have an account?
                                            <a href="{{ route('login') }}" class="to_register"> Log in </a>
                                        </p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.CONTAINER -->
</div>
<!-- /. PAGE CONTENT -->
@endsection

@push('scripts')
<script>
$(document).ready(function () {

$('.hide-password').click(function () {


if ($('.displaypassword').attr('type') == 'password') {
    $('.displaypassword').prop('type', 'text');
    $('.hide-password').text('hide');
    //alert('1');
    return false();
}
if ($('.displaypassword').attr('type') == 'text') {
    $('.displaypassword').prop('type', 'password');
    $('.hide-password').text('show');
    //  alert('2');
    return false();
}
});
$('.hide-Currentpassword').click(function () {
//alert('1');

if ($('.displayCurrentpassword').attr('type') == 'password') {
    $('.displayCurrentpassword').prop('type', 'text');
    $('.hide-Currentpassword').text('hide');
    //alert('1');
    return false();
}
if ($('.displayCurrentpassword').attr('type') == 'text') {
    $('.displayCurrentpassword').prop('type', 'password');
    $('.hide-Currentpassword').text('show');
    //  alert('2');
    return false();
}
});
/* confirm password */

$('.confirm-hide-password').click(function () {


if ($('.Confirmdisplaypassword').attr('type') == 'password') {
    $('.Confirmdisplaypassword').prop('type', 'text');
    $('.confirm-hide-password').text('hide');
    //alert('1');
    return false();
}
if ($('.Confirmdisplaypassword').attr('type') == 'text') {
    $('.Confirmdisplaypassword').prop('type', 'password');
    $('.confirm-hide-password').text('show');
    //  alert('2');
    return false();
}
});
$('.confirm-hide-password').click(function () {
//alert('1');

if ($('.displayCurrentpassword').attr('type') == 'password') {
    $('.displayCurrentpassword').prop('type', 'text');
    $('.confirm-hide-password').text('hide');
    //alert('1');
    return false();
}
if ($('.displayCurrentpassword').attr('type') == 'text') {
    $('.displayCurrentpassword').prop('type', 'password');
    $('.hide-Currentpassword').text('show');
    //  alert('2');
    return false();
}
});

});
</script>
@endpush