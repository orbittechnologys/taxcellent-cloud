@extends('layouts.master')

@section('content')
    
    <div id="fullpage" class="fullpageremove">
        <div class="page-wrapper">
            @include('layouts.inc.header')
            <div class="section fp-auto-height-responsive landing-top1-block new1Home-section1" id="section0-0">
                <div class="container">
                    <div class="newHome-section1">
                        <div class="section0-0 leftsidedv">
                            <h2 class="animated" data-animation="fadeIn" data-animation-delay="500">
                                Your tax, our responsibility
                                <br />Our service, your savings.
                            </h2>
                            <p class="animated" data-animation="fadeIn" data-animation-delay="1000">Taxcellent is the solution for all your accounting and taxation needs. We make accounting simple and hassle-free so you can do what you do best, and leave the rest to us.</p>
                            <p class="animated" data-animation="fadeIn" data-animation-delay="1000">Sign up now, to get started!</p>
                            <div class="animated getStarted-email-block" data-animation="fadeIn" data-animation-delay="2000">
                                <input type="text" class="clsworkemail formInputFile" placeholder="Work Email" />
                                <a href="javascript:;" class="btn btn-insGreen waves-effect waves-ripple get-started-top" tabindex="-1">Get Started</a>
                            </div>
                        </div>
                        <div class="section0-0 rightsidedv newHome-section1Img">
                            <img src="{{ asset('template/images/home.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="section fp-auto-height-responsive landing-top-block newHome-slider-block" id="section0">
                <div class="svg-curved curved-homeSlider">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L120,117.3C240,107,480,85,720,85.3C960,85,1200,107,1320,117.3L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
                </div>
                <!-- Slider Screenshort Start (landing-top-block)  -->
                
                <!-- Slider Screenshort End -->
                <!--<figure class="img-shape absolute-bottom" style="display: block;">
                    <img src="/images/screenshot/wave.svg" alt="">
                </figure>-->

                <div class="top-banner-section" style="display: none;">
                    <div class="container">
                        <div class="banner-title-block">
                            <h1 class="animated" data-animation="fadeInDownBig" data-animation-delay="300">You Deserve To Save Your</h1>
                            <h2 class="animated" data-animation="fadeIn" data-animation-delay="1000">Hard Earned Money</h2>
                        </div>

                      
                    </div>
                </div>

            </div> --}}

            <div class="section fp-auto-height section-services-block newHome-howitworks" id="section1-1">
                <div class="svg-curved curved-howitworks">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eff6ff" fill-opacity="1" d="M0,128L120,117.3C240,107,480,85,720,85.3C960,85,1200,107,1320,117.3L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
                </div>
                <div class="container">
                    <div class="row how-it-work-block">
                        <div class="col-sm-12 col-md-12">
                            <h2 class="newHome-title1">How it works</h2>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="nwservices-content-block">
                                {{-- <div class="nwservices-img-block">
                                    <img src="{{ asset('template/images/design-process.png') }}" />
                                </div> --}}
                                <h3>1. Choose a plan</h3>
                                <p>Choose and purchase a plan that suits your requirements</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="nwservices-content-block">
                                {{-- <div class="nwservices-img-block">
                                    <img src="{{ asset('template/images/online-education.png') }}" />
                                </div> --}}
                                <h3>2. Connect with expert</h3>
                                <p>Connect with your dedicated <br> Taxcellent expert who will walk you through our process</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="nwservices-content-block">
                                {{-- <div class="nwservices-img-block">
                                    <img src="{{ asset('template/images/bookkeeping-section-pic-3.png') }}" class="upload-document-img" />
                                </div> --}}
                                <h3>3. Upload Documents</h3>
                                <p>Access your personal dashboard to upload documents and download reports</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 ">
                            <div class="nwservices-content-block">
                                {{-- <div class="nwservices-img-block">
                                    <img src="{{ asset('template/images/business-achievement.png') }}" />
                                </div> --}}
                                <h3>4. Benefit</h3>
                                <p>Grow your business while we take care of your accounting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <!-- /. VIDEO & GUIDE SECTION -->
            <!-- TESTIMONIAL SECTION -->
            
            <!-- /. TESTIMONIAL SECTION -->	
            
            <!-- Media start-->
            {{-- <div class="section fp-auto-height bkpfeaturedIn" id="section3">
                <section class="home-our-services-section">
                    <!-- HOW IT WORK BLOCK -->
                    <div class="NW-ins-how-it-work-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="NW-ins-HIW-content-block">
                                        <h2 class="bk-section-title2"><strong>Featured In</strong></h2>
                                        <div class="clearfix"></div>
                                        <ul class="mediaul">
                                            <li class="col-md-4 col-sm-4">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('template/images/bk-financial-times.png') }}" />
                                                </a>
                                            </li>
                                            <li class="col-md-4 col-sm-4">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('template/images/bk-yourstory.png') }}" />
                                                </a>
                                            </li>
                                            <li class="col-md-4 col-sm-4">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('template/images/bk-economics-times.png') }}" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / .HOW IT WORK BLOCK -->
                </section>
            </div> --}}
            <!-- Media end-->
            
            <!-- Media start-->
            <div class="section fp-auto-height bkpRecognizedby" id="section3">
                <section class="home-our-services-section">
                    <!-- HOW IT WORK BLOCK -->
                    <div class="NW-ins-how-it-work-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="NW-ins-HIW-content-block">
                                        <h2 class="bk-section-title2"><strong>Recognized by</strong></h2>
                                        <div class="clearfix"></div>
                                        <ul class="mediaul">
                                            <li class="col-md-3 col-sm-3">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('template/images/bk-msme-logo.png') }}" />
                                                </a>
                                            </li>
                                            <li class="col-md-3 col-sm-3">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('template/images/bk-iimb-logo.png') }}" />
                                                </a>
                                            </li>
                                            <li class="col-md-3 col-sm-3">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('template/images/bk-ficci-logo.png') }}" />
                                                </a>
                                            </li>
                                            <li class="col-md-3 col-sm-3">
                                                <a href="javascript:;">
                                                    <img src="{{ asset('template/images/bk-westerwelle-logo.png') }}" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / .HOW IT WORK BLOCK -->
                </section>
            </div>
            <!-- Media end-->
            <!-- ABOUT SECTION -->
            <div class="section fp-auto-height whyInstaCA-section" id="section5">
                <div class="svg-curved curved-whyInstaCA">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L120,117.3C240,107,480,85,720,85.3C960,85,1200,107,1320,117.3L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
                </div>
                <section class="home-about-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                                <div class="about-widget-container-block animated" data-animation="fadeInLeftBig" data-animation-delay="100">
                                    <h2 class="whyInstaCa-title">Why Taxcellent?</h2>
                                    <p>
                                        With over 40 years of experience, our team of expert accountants have extensive knowledge in tax and accounting related matters. We understand each client is unique and hence we offer tailor-made solutions for professionals, entrepreneurs, non-resident Indians, salaried employees and small businesses. We pride ourselves in being technology-driven to make accounting a hassle-free process.
                                    </p>
                                    <a href="aboutus.html" class="btn btn-insGreen waves-effect waves-ripple">Know More</a>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div class="about-wedget-icon-block animated" data-animation="fadeInRightBig" data-animation-delay="100">
                                    <ul class="whyinstaca">
                                        <li>
                                            <div class="ins-sp-block">
                                                <span class="ins-sp-icon">
                                                    <img src="{{ asset('template/images/jigsaw.png') }}" alt="">
                                                </span>
                                                <!--<h5 class="c-darkgreen">Accurate Calculation</h5>-->
                                                <p>With pay-as-you-grow plans, we are set up to scale with you</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ins-sp-block">
                                                <span class="ins-sp-icon">
                                                    <img src="{{ asset('template/images/key.png') }}" alt="">
                                                </span>
                                                <!--<h5 class="c-offgreen">Comprehensive Review</h5>-->
                                                <p>We care about keeping your information secure as much as you do</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ins-sp-block">
                                                <span class="ins-sp-icon">
                                                    <img src="{{ asset('template/images/financial1.png') }}" alt="">
                                                </span>
                                                <!--<h5 class="c-offyellow">Data Security</h5>-->
                                                <p>See “the big picture” with visual reports and insights</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ins-sp-block">
                                                <span class="ins-sp-icon">
                                                    <img src="{{ asset('template/images/entrepreneur.png') }}" alt="">
                                                </span>
                                                <!--<h5 class="c-offred">Customer Support</h5>-->
                                                <p>Get fast, responsive service. Our experts will know your business and books inside out.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /. ABOUT SECTION -->
            <div class="section  fp-auto-height" id="section5-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-8">
                            <h3>Be on top of things.</h3>
                            <p>Join our newsletter and never miss another tax & accounting deadline</p>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            
                            <input type="text" value="" placeholder="Enter address" id="txtnewsletter" class="formInput">
                            <button type="submit" class="input-btn inst-btn-primary applynewsletterclick">Subscribe!</button>
                        </div>
                        </div>
                </div>
            </div>

            <!-- get-started-top popup -->
            <div id="get-started-top-popup" class="modal fade enquire-popup-block" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div id="getstartedfirst" class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                            <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Hey! Let’s get you started!</p>
                        </div>
                        <div class="modal-body">
                            <div class="enquire-popup-form-block">
                                <div class="input-box fnamediv ">
                                    <label class="formLabel" for="">Full Name</label>
                                    <input type="text" class="formInput" id="txtnamegetstartedtop" name="" autocomplete="off">
                                </div>

                                <div class="input-box emailaddressdiv ">
                                    <label class="formLabel" for="">Email Address – We don’t spam.</label>
                                    <input type="text" class="formInput" id="txtenquiryemailgetstartedtop" name="" autocomplete="off">
                                </div>

                                <div class="input-box lnamediv ">
                                    <label class="formLabel" for="">Company website</label>
                                    <input type="text" class="formInput" id="txtlastnamegetstartedtop" name="" autocomplete="off">
                                </div>
                                <div class="input-box phonediv ">
                                    <label class="formLabel" for="">Telephone - We won’t bother. Promise!</label>
                                    <input type="text" class="formInput" id="txtphonegetstartedtop" name="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-insGreen waves-effect waves-ripple nextgetstartedtopclick">Next</button>


                        </div>
                    </div>
                    <div id="getstartedsecond" class="modal-content" style="display:none;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                            <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Almost there..</p>
                        </div>
                        <div class="modal-body">
                            <div class="enquire-popup-form-block">
                                <div class="input-box fnamediv ">
                                    <label class="formLabel" for="">How do you manage your accounting currently?</label>
                                    <select name="" id="ddlmanageaccount" class="formInput" autocomplete="off">
                                        <option>
                                            I have a full time accountant
                                        </option>
                                        <option>
                                            I have a part time accountant
                                        </option>
                                        <option>
                                            I do it myself
                                        </option>
                                        <option>
                                            I am just starting out
                                        </option>
                                        <option>
                                            I outsource
                                        </option>
                                        <option>
                                            Other
                                        </option>
                                    </select>
                                </div>

                                <div class="input-box emailaddressdiv ddlinterestedservice ">
                                    <label class="formLabel" for="">What service are you interested in?</label>
                                    
                                    <label class="container-checkbox">Bookkeeping
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                    </label>
                                    <label class="container-checkbox">GST filing
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    </label>
                                    <label class="container-checkbox">Income Tax Return
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    </label>
                                    <label class="container-checkbox">Business Registration
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    </label>
                                    <label class="container-checkbox">Other
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    </label>

                                    
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-insGreen waves-effect waves-ripple nextthirdgetstartedtopclick">Next</button>


                        </div>
                    </div>
                    <div id="getstartedthird" class="modal-content" style="display:none;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                            <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Thanks! What time works best for a quick call?</p>
                        </div>
                        <div class="modal-body">
                            <div class="enquire-popup-form-block">

                                
                                <!-- Calendly inline widget begin -->
                                <div class="calendly-inline-widget" data-url="https://calendly.com/insta-ca/introcall" style="min-width:320px;height:630px;"></div>
                                <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="../assets.calendly.com/assets/external/widget.js"></script>
                                <!-- Calendly inline widget end -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-insGreen waves-effect waves-ripple nextforgetstartedtopclick">Next</button>


                        </div>
                    </div>
                    <div id="getstartedfor" class="modal-content" style="display:none;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                            <p class="modal-mini-title" style="color: #354855; font-size: 18px;"></p>
                        </div>
                        <div class="modal-body">
                            <div class="enquire-popup-form-block">
                                <h3>
                                    Thank you, you’re all done!

                                    A confirmation email has been sent to you for your call with our expert.
                                </h3>

                            
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @include('layouts.inc.footer')
        </div>
    </div>
    <a href="#" class="scrollToTop"><i class="ion-arrow-up-a"></i></a>
    <!-- GET STARTED POPUP -->
    <div id="modal-container">
        <div id="close" class="modal-close"><i class="ion-close-circled"></i></div>
        <div class="modal-background">
            <div class="modal">
                <div class="container dvfbp" style="display:none;">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fbp_area_box">
								<div class="fbp_title_block">
									<h3>Complete Business Package</h3>
									<h6><em>for businesses</em></h6>
									<div class="fbp_logo"><img class="img-responsive" alt="" src="images"></div>
								</div>
                                <div class="fbp_inner_box">
                                    <label>Nature of Business</label>
                                    <div class="input-box sFirstNamediv">
                                        <select tabindex="" name="" id="ddlBusinessnature" class="formInput" autocomplete="off">
                                            <option value="1">Product based business</option>
                                            <option value="2">Service based business</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="fbp_inner_box">
                                    <label>Structure of Business</label>
                                    <div class="input-box sFirstNamediv">
                                        <select tabindex="" name="" id="ddlTypeofbussiness" class="formInput" autocomplete="off">
                                            <option value="1">Limited Liability Partnership (LLP)</option>
                                            <option value="2">Private Limited Company (PLC)</option>
                                            <option value="3">Sole Proprietorship / Partnership / Hindu Undivided Family</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fbp_inner_box">
                                    <label>Annual Revenue (INR)</label>
                                    <div class="input-box sFirstNamediv">
                                        <select tabindex="" name="" id="ddlTurnopen" class="formInput" autocomplete="off">
                                            
                                            <option value="2" selected><20,00,000</option>
                                            <option value="3"><50,00,000</option>
                                            <option value="4"><1,00,00,000</option>
                                            <option value="5"><2,00,00,000</option>
                                            <option value="6"><3,00,00,000 </option>
											<option value="7"><4,00,00,000 </option>
                                            <option value="8">+4,00,00,000 </option>
                                        </select>
                                    </div>
                                </div>
                                <a href="javascript:;" class="calbussinesspackage">
                                    <div class="arrow-button-block">
                                        <span>
                                            <i class="ion-android-arrow-forward"></i>
                                        </span>
                                        <div></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container dvgetstarted" style="display:none;">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="getstarted-title">Get Started</h2>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="recommend.html">
                                <div class="get-started-box-block">
                                    <h3>Tax Planner</h3>
                                    <div class="get-started-icon">
                                        <img src="images/recommended-icon.png" alt="" />
                                    </div>
                                    <p>We’ll recommend the right tax solution for you!</p>
                                    <div class="arrow-button-block">
                                        <span>
                                            <i class="ion-android-arrow-forward"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="taxsaver.html">
                                <div class="get-started-box-block">
                                    <h3>Tax Saver</h3>
                                    <div class="get-started-icon">
                                        <img src="images/tax-saver-icon.png" alt="" />
                                    </div>
                                    <p>We’ll help you maximize your deductions and savings!</p>
                                    <div class="arrow-button-block">
                                        <span>
                                            <i class="ion-android-arrow-forward"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. GET STARTED POPUP -->
    <!-- income tax return popup -->
    <div id="incometax-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Income Tax Return Services</p>
                </div>
                <div class="modal-body">
                    <h4 class="popup-income-title-block">To know which plan is most suitable for you <a href="recommend.html">click here</a></h4>
                    <ul class="Wrecommend-select-income-block popup-income-block popup-with-description">
                        <li>
                            <a href="service/income-tax-return-filing-salaried-individual.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Individuals</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>
                                    Salary income l Pension income l Capital gain from property l Capital gain from securities l Capital gain from other assets l Rental income l Dividend income l Interest income l Gifts received l Gambling winnings l Winnings from lotteries l ESOPs
                                </p>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="modal" data-target="#incometaxbusiness-popup" data-href="/service/income-tax-return-filing-business">
                                <div class="Wrecommend-income-box">
                                    <h5>Business</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>
                                    Small & Medium enterprises l Startups l Traders l Manufacturers l Independent contractors l Kirana shop owners l Wholesalers l Retailers l E-Commerce Sellers l Bloggers
                                </p>
                            </div>
                        </li>
                        <li>
                            <a href="service/income-tax-return-filing-professional.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Professionals</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>
                                    Doctors l Lawyers l Engineers l Private Tutors l Fashion Designers l Chartered Accountants l Commission Agents l Insurance agents l Web Designers l Securities Traders l Architects l Consultants l Freelancers
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- income tax return popup end -->
    <!-- company incorporation popup -->
    <div id="company-incorporation-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Company Incorporation Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block">
                        <li>
                            <a href="service/ngo-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>NGO <br> Registration</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/proprietorship-firm-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Proprietorship Firm Registration</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/private-limited-company-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Private Limited Company Registration</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/limited-liability-partnership-company-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Limited Liability Partnership</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/one-person-company-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>One Person Company Registration</h5>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- company incorporation popup end -->
    <!-- startup services popup -->
    <div id="startupservices-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Start Up Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block">
                        <li>
                            <a href="service/startups-launching-registration-advisory-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Hand Holding</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/startups-roc-mca-filing-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>ROC Filing</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/startups-accounting-bookkeeping-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Accounting</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- startup services popup end -->
    <!-- income tax business services popup -->
    <div id="incometaxbusiness-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Income Tax Return Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block" style="min-height:500px;">
                        <li>
                            <a href="service/income-tax-return-filing-business.html">
                                <div class="Wrecommend-income-box">
                                    <h5 style="line-height:36px;">Sole Proprietorship</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/income-tax-return-private-limited-company.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Private Limited<br />Company</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/income-tax-return-limited-liability-partnership-partnership-firm.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Limited Liability<br />Partnership</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- income tax business services popup end -->
    <!-- Accounting services popup -->
    <div id="accountingservices-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Accounting Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block popup-with-description">
                        <li>
                            <a href="service/business-accounting-bookkeeping-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Business</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>Small & Medium enterprises l Startups l Traders l Manufacturers l Independent contractors l Kirana shop owners l Wholesalers l Retailers l E-Commerce Sellers l Bloggers</p>
                            </div>
                        </li>
                        <li>
                            <a href="service/professionals-accounting-bookkeeping-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Professionals</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>Doctors l Lawyers l Engineers l Private Tutors l Fashion Designers l Chartered Accountants l Commission Agents l Insurance agents l Web Designers l Securities Traders l Architects l Consultants l Freelancers</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Accounting services popup end -->
    <!-- DSC/DIN services popup -->
    <div id="dsc-din-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">DSC / DIN Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block">
                        <li>
                            <a href="service/digital-signature-certificate-dsc-token.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Digital Signature Certificate</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/director-identification-number-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5> Director Identification No </h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- DSC/DIN services popup end -->
    <!-- alert popup -->
    <div id="ins-alert-popup" class="modal fade ins-alert-dialog-block in" role="dialog" style="background: rgba(0,0,0,0.7);">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body ins-alert-body">
                    <div class="ins-alert-content-block">
                        <div class="ins-alert-icon-block ins-alert-insgreen">
                            <i class="ion-alert-circled"></i>
                        </div>
                        <div class="ins-alert-textbtn-block">
                            <p class="alertmessage">Are you sure you want to submit this?</p>
                            <button type="button" data-dismiss="modal" class="btn btn-insGreen waves-effect waves-ripple okvalidatemodelclick">Ok</button>
                            <button type="button" data-dismiss="modal" class="btn btn-insGreen waves-effect waves-ripple okvalidatemodelclick">Cancel</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- alert popup end -->


    <div id="enquire-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <h4 class="modal-title">We would love to talk to you!</h4>
                    <p class="modal-mini-title">Schedule a callback and we will call you shortly!</p>
                </div>
                <div class="modal-body">
                    <div class="enquire-popup-form-block">
                        <div class="input-box fnamediv activealert">
                            <label class="formLabel" for="">First Name</label>
                            <input type="text" class="formInput" id="txtname" name="" autocomplete="off">
                        </div>
                        <div class="input-box lnamediv activealert">
                            <label class="formLabel" for="">Last Name</label>
                            <input type="text" class="formInput" id="txtlastname" name="" autocomplete="off">
                        </div>
                        <div class="input-box emailaddressdiv activealert">
                            <label class="formLabel" for="">Email</label>
                            <input type="text" class="formInput" id="txtenquiryemail" name="" autocomplete="off">
                        </div>
                        <div class="input-box phonediv activealert">
                            <label class="formLabel" for="">Phone Number</label>
                            <input type="text" class="formInput" id="txtphone" name="" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-insGreen waves-effect waves-ripple enquiryclick">Request A Callback</button>

                    <div class="modal-disclaimer">
                        <p>Your information is 100% safe with us. We will never sell or rent your email id.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>



<div id="otherpackage-popup" class="modal fade enquire-popup-block" role="dialog">
    <div class="modal-dialog">        
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close closeotherpackage-popup" data-dismiss="modal"><i class="ion-close-round"></i></button>
                <h4 class="modal-title">Get a Quote!</h4>
                <p class="modal-mini-title">For your requirement, we need to make you a custom quote, please fill in your contact information and we will call you. We look forward to speaking with you!</p>
            </div>
            <div class="modal-body">
                <div class="enquire-popup-form-block">
                    <div class="input-box fnamediv">
                        <label class="formLabel" for="">First Name</label>
                        <input type="text" class="formInput" id="txtnameenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box lnamediv">
                        <label class="formLabel" for="">Last Name</label>
                        <input type="text" class="formInput" id="txtlastnameenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box emailaddressdiv">
                        <label class="formLabel" for="">Email</label>
                        <input type="text" class="formInput" id="txtenquiryemailenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box phonediv">
                        <label class="formLabel" for="">Phone Number</label>
                        <input type="text" class="formInput" id="txtphoneenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box timediv">
                        <label class="formLabel" for="">Preferred Time For A Call</label>
                        <input type="text" class="formInput" id="txttimeenquire" name="time" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-insGreen waves-effect waves-ripple otherpackageclick">Submit</button>               
            </div>

        </div>

    </div>
</div>
<div class="modal-backdrop otherpackage-extradiv fade in" style="display: none;"></div>

@endsection