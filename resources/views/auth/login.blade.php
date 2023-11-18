
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
                            <a class="hiddenanchor" id="tosignup"></a>
                            <a class="hiddenanchor" id="tologin"></a>
                            <a class="hiddenanchor" id="tofrg"></a>
                            <a class="hiddenanchor" id="tofrgpassword"></a>
                            <div id="tologinsignup">

                                <div id="login" class="animate ls-form">
                                    <div action="#" autocomplete="">
                                        <h2>Log In <a href="{{ url('/') }}" class="login-back-to-home"><i class="ion-chevron-left"></i> Home Page</a></h2>


                                        <div class="ls-option" style="display:none;">
                                            <p>or</p>
                                        </div>

                                        <div class="insta-input-form-block">
                                            <div class="row">
                                                <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box sEmailaddress_SIdiv">
                                                            <label class="formLabel" for="">Email</label>
                                                            <input id="email" type="email" class="formInput @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus autocomplete="off" />
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box sPassword_SIdiv">
                                                            <label class="formLabel" for="">Password</label>
                                                            <input id="password" type="password" class="formInput @error('password') is-invalid @enderror" name="password" required autocomplete="off" />
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="input-box last-input">
                                                             @if (Route::has('password.request'))
                                                            <a href="{{ route('password.request') }}" class="ls-forgot-link">Forgot Password?</a>
                                                            @endif
                                                            <button type="submit"  class="input-btn inst-btn-primary signinclick">Login</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <p class="change_link">
                                            New to Taxcellent?
                                            <a href="{{ route('register') }}" >Sign Up</a>
                                        </p>
                                    </div>
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