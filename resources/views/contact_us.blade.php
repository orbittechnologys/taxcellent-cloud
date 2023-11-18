@extends('layouts.master')

@section('content')

@include('layouts.inc.header')

<div class="fullpageremove">
    <div class="page-wrapper">
        <!-- CONTAINER -->
        <div class="wrapper-bread">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-top-static">
                            <ol class="breadcrumb" style="text-align:left">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{route('contact-us')}}"> Contac Us</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.CONTAINER -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- CONTAINER -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="NW-careers-top-block">
                            <div class="NW-careers-top-middle-block">
                                <div class="NW-careers-top-container-block">
                                    <h1>Careers</h1>
                                    <h6>
                                        You'll love working here as much as we do!
                                    </h6>
                                    <p>
                                        We at Insta C.A. believe that our people are our most valuable asset, so we work towards creating an environment which fosters employee satisfaction.
                                    </p>
                                </div>

                                <div class="clearfix"></div>

                                <div class="NW-careers-form-block" style="max-width:100%!important;margin-bottom: 5%;">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3708.780670516974!2d73.00315941474268!3d21.63346868567395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0211f9e180371%3A0x79f1255aa42c45c5!2sKeySquare%20Softech!5e0!3m2!1sen!2sin!4v1641290219807!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <form method="post" action="{{ route('contactForm') }}">
                                             @csrf
                                                <div class="input-box txtfirstnamediv">
                                                    <label class="formLabel" for="">Full Name</label>
                                                    <input autocomplete="off" class="formInput" id="txtfirstname" name="contact_name" type="text">
                                                    @error('contact_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-box txtlastnamediv">
                                                    <label class="formLabel" for="">Email</label>
                                                    <input autocomplete="off" class="formInput" id="txtlastname" name="contact_email" type="text">
                                                    @error('contact_email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-box txtemailaddressdiv">
                                                    <label class="formLabel" for="">Mobile Number</label>
                                                    <input autocomplete="off" class="formInput" id="txtemailaddress" name="mobile_num" type="text">
                                                    @error('mobile_num')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-box txtphonenodiv">
                                                    <label class="formLabel" for="">Subject</label>
                                                    <input autocomplete="off" class="formInput" id="txtphoneno" name="contact_subject" type="text">
                                                    @error('contact_subject')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-box">
                                                    <label class="formLabel" for="">Your Message</label>
                                                    <textarea  name="contact_message" class="formInput" rows="3"></textarea>
                                                    @error('contact_message')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-box ins-contact-btn-block">
                                                    <button class="btn btn-insGreen waves-effect waves-ripple" type="submit">Submit</button>
                                                </div>
                                            </form>
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
        @include('layouts.inc.footer')
    </div>
</div>
<div id="pageloader" style="display:none">
    <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
</div>
@endsection