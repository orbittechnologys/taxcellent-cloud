@extends('layouts.master')

@section('css')
    <link href="{{ asset('template/css/style.mine568.css?v=15.10.10') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('template/css/servicepagecss17e6.css?v=5.2') }}" rel="stylesheet" async type="text/css" />
    <link href="{{ asset('template/css/servicepagecss17e6.css?v=1') }}" rel="stylesheet" />
    <script src="{{ asset('template/js/customf500.js?v=13') }}"></script>
    @stop
@section('content')

@section('content')

@include('layouts.inc.header')

<div class="fullpageremove">
    <div class="page-wrapper">
        <style>
            .fp-viewing--1 {overflow-y: scroll !important;}
        </style>
        <div class="page-wrapper">
        <style>
            .fp-viewing--1 {overflow-y: scroll !important;}
        </style>
            <!-- REQUEST CALL BACK -->
            <div class="insta-request-call-back-block">
                <!-- CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nav-top-static">
                                <ol class="breadcrumb" style="text-align:left">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="../services.html"> Services</a></li>
                                    <li><a href="{{ url('service-category') }}/{{$mainCatId['slug']}}"> {{ $mainCatId->cat_name }}</a></li>
                                    <li class="active"><a style="color:#909090 !important;">{{ $serviceDet->service_name }}</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.CONTAINER -->
                <div class="LocalNavigation">
                    <div class="container">
                        <nav class="nav">
                            <ul class="menu">
                                <li class="active" style="padding-left:0px;">
                                    <a href="#services-included">Services Included</a>
                                </li>
                                <li>
                                    <a href="#process-details">Registration process</a>
                                </li>
                                <li>
                                    <a href="#documens">Documents Required</a>
                                </li>
                                <li>
                                    <a href="#timeframe">Estimated timeframe</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE CONTENT -->
        <div id="services-included" class="section1 section"></div>
            <!--Add static cintent for page-->
            <div class="other-element-add-wrapper">
                <div class="container">
                    <div class="row">
                    <input type="hidden" id="service_id" value="<?= $serviceDet->id ?>" name="service_id">
                    <input type="hidden" id="sub_cat_id" value="<?= $serviceDet->service_cat_id ?>" name="sub_cat_id">
                    <input type="hidden" id="serPrice" value="<?= $serviceDet->price ?>" name="serPrice">
                        <div class="col-md-4 col-sm-5 col-xs-12 col-md-push-8 col-sm-push-7 col-xs-push-0">
                            <div id="sidStik" class="ins-request-call-back-form2 pricpln_wdget">
                                <div class="panel-heading">
                                    <span class="pricely-label mobile-view-title">{{ $serviceDet->service_name }}</span>
                                    <div class="pricely-figure pric-fig2" style="padding-bottom:0px !important;padding-top:0px !important;">
                                        <span class="pricely-amount" style="margin-bottom:10px !important;"><span class="pricely-currency"><i class="fa fa-rupee"></i></span> {{ number_format($serviceDet->price, 0, '.', ',') }}</span>
                                        <span class="per-return-text"></span>
                                        
                                    </div>
                                    <span class="pricely-amount" style="margin: 0 0 10px 0px !important;padding: 0 !important;line-height: 10px;"> <del style="color:#2f3141"></del><span style="width:auto;float:none;" class="per-return-text" style="">(exclusive &nbsp; of &nbsp; GST)</span></span>
                                    <span class="pricely-button pric-btn-btm"><button class="btn btn-teal waves-effect waves-ripple" onclick="buyNow()">Buy plan</button></span>
                                    <figure class="img-shape absolute-bottom pricpln_btmEfct">
                                        <img src="../images/screenshot/wave.svg" alt="">
                                    </figure>
                                </div>
                                <div class="talktoexpert-form">
                                    <h2>Talk to our experts</h2>
                                   
                                    <div class="input-box Req_emailaddressdiv">
                                        <label class="formLabel" for="">Email</label>
                                        <input type="text" class="formInput" required="" id="Req_txtenquiryemail" name="" autocomplete="off">
                                    </div>
                                    <div class="input-box Req_phonediv">
                                        <label class="formLabel" for="">Phone Number</label>
                                        <input type="text" class="formInput" required="" id="Req_txtphone" name="" autocomplete="off">
                                    </div>
                                    <div class="input-box">
                                        <button type="submit" class="btn btn-insGreen waves-effect waves-ripple requestcallbackclick">Request a Callback</button>
                                    </div>

                                    <div class="information-tag">
                                        <p>Your information is 100% safe with us</p>
                                        <img src="../images/safe-icon.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-12 col-md-pull-4 col-sm-pull-5 col-xs-pull-0">
                            <!--Private limited section start-->
                            <div id="services-included"></div>
                            <div class="pricely-chart2 plcrs-blk">
                                <div class="plan-block">
                                    <div class="plan-inner-block">
                                        <h3>{{ $serviceDet->service_name }}</h3>
                                        <div class="plan-discription">
                                            <h4>Services included:</h4>
                                                {!! html_entity_decode($serviceDet->service_include) !!}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--Private limited section start end-->

                            <!--Process how it works section start-->
                            <!-- <div id="process-details" class="section1 section"></div> -->
                            <div class="services-included-section plcrs-hiw-blk" id="process-details">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pricely-chart2 plcrs-blk">
                                            <div class="plan-inner-block">
                                                <h3>Registration Process:</h3>
                                                <div class="plan-discription">
                                                        {!! html_entity_decode($serviceDet->reg_process) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Process how it works section end-->

                            <!--Document check list section start-->
                            <div id="documentchecklist"></div>
                            <div class="documentchecklist-section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="documens" class="section1 section"></div>
                                        <div class="pricely-chart2 plcrs-blk">
                                            <div class="plan-block">
                                                <div class="plan-inner-block">
                                                    <h3>Document Checklist</h3>
                                                    <div class="plan-discription">
                                                        <h4>Director KYC documents</h4>
                                                        <ul>

                                                            @if($documentAry)
                                                                    @foreach($documentAry as $documentVal)
                                                                            <li>
                                                                                {{$documentVal["doc_name"]}} 
                                                                            </li>        
                                                                    @endforeach
                                                            @endif
                                                            <!--<li>
                                                                Scanned copies of Pan card and Aadhar 
                                                            </li>
                                                            <li>
                                                                Scanned copies of any one of the ID Proof of the Partners/ Directors/ sole proprietor - Driving License/ Voter’s ID/ Passport copy
                                                            </li>
                                                            <li>
                                                                Scanned Passport Size photo of the Partners/ Directors/ sole proprietor
                                                            </li>
                                                            <li>
                                                                </i>Address Proof of individual or registered office of the enterprise - Bank Statement/ Telephone Bill/ Mobile Bill/ Electricity Bill (latest month scanned copies needed)
                                                            </li>-->
                                                        </ul>
                                                        <p class="stepheader"><i >*Please see the detailed documents mentioned in the FAQ section <a class="documents-click" href="javascript:;" style="color:#1fce99;text-decoration: underline;">below</a>.</i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Document check list section end-->

                            <!--Faq section start-->
                            <div id="timeframe" class="section1 section"></div>
                            <div class="documentchecklist-section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pricely-chart2">
                                            <div class="plan-block plcrs-blk">
                                                <div class="plan-inner-block">
                                                    <h3>Estimated timeframe </h3>
                                                    <div class="plan-discription">
                                                    {!! html_entity_decode($serviceDet->timeframe) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Faq section end-->
                        </div>

                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="ins-request-call-back-form2 mobile-ins-rewuest-call-back-form2 fixedpositionleftnav">
                                <div class="talktoexpert-form talktoexpert-form-mobile">
                                    <h2>Talk to our experts</h2>
                                    <div class="input-box Req_fnamediv">
                                        <label class="formLabel" for="">First Name</label>
                                        <input type="text" class="formInput" required="" id="Req_txtname" name="" autocomplete="off">
                                    </div>
                                    <div class="input-box Req_lnamediv">
                                        <label class="formLabel" for="">Last Name</label>
                                        <input type="text" class="formInput" required="" id="Req_txtlastname" name="" autocomplete="off">
                                    </div>
                                    <div class="input-box Req_emailaddressdiv">
                                        <label class="formLabel" for="">Email</label>
                                        <input type="text" class="formInput" required="" id="Req_txtenquiryemail" name="" autocomplete="off">
                                    </div>
                                    <div class="input-box Req_phonediv">
                                        <label class="formLabel" for="">Phone Number</label>
                                        <input type="text" class="formInput" required="" id="Req_txtphone" name="" autocomplete="off">
                                    </div>
                                    <div class="input-box">
                                        <button type="submit" class="btn btn-insGreen waves-effect waves-ripple requestcallbackclick">Request a Callback</button>
                                    </div>

                                    <div class="information-tag">
                                        <p>Your information is 100% safe with us</p>
                                        <img src="../images/safe-icon.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="endstik"></div>
                </div>
            </div>
        @include('layouts.inc.footer')
    </div>
</div>
<div id="pageloader" style="display:none">
    <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
</div>
@endsection

@push('scripts')
<script>
	$(document).ready(function(){
	$(".documents-click").click(function() {
    $('html, body').animate({
        scrollTop: $("#documents").offset().top - 120
    }, 2000);
    });

    $('#wsnavtoggle').click(function(){
		$('body').addClass('wsactive')
	});
	 

	$('.wsmenu .overlapblackbg').click(function(){
		$('body').removeClass('wsactive');
		$('body').removeClass('mrginleft');
		setTimeout(function () {
			$('body').removeClass('mrginleft');
		},100);
	});

	});
	
    $(window).scroll(function () {
        var width = window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;
        var t = $(".page-wrapper").offset().top;
        if ($(window).scrollTop()> t) {
            $('.insta-request-call-back-block').addClass('fixedpositionleftnav-top');
        }
        else {
            $('.insta-request-call-back-block').removeClass('fixedpositionleftnav-top');
        }
    });
</script>
<script>
    $(window).scroll(function () {
        if($(window).scrollTop()> 130) {
            $('#sidStik').css('position','fixed');
            $('#sidStik').css('top','130px'); 
        }
        else if ($(window).scrollTop() <= 130) {
            $('#sidStik').css('position','');
            $('#sidStik').css('top','');
        }  
        if ($('#sidStik').offset().top + $("#sidStik").height()> $("#endstik").offset().top) {
            $('#sidStik').css('top',-($("#sidStik").offset().top + $("#sidStik").height() - $("#endstik").offset().top));
        }
    });
</script>
<script>
        $(document).ready(function () {
            $(document).on("scroll", onScroll);

            //smoothscroll
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('#menu-center a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('#menu-center ul li a').removeClass("active");
                    currLink.addClass("active");
                }
                else {
                    currLink.removeClass("active");
                }
            });
        }
        
</script>

<script>
        var sections = $('a')
         , nav = $('nav')
         , nav_height = nav.outerHeight();

        $(window).on('scroll', function () {
            var cur_pos = $(this).scrollTop();

            sections.each(function () {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

       nav.find('a').on('click', function () {
            var $el = $(this)
              , id = $el.attr('href');
if(id != "#" ){
if(id != "javascript:;" ){
            $('html, body').animate({
                scrollTop: $(id).offset().top - nav_height
            }, 500);
			 return false;
			}
}
           
        });
</script>

<script>
        $('a').click(function () {
		  var $el = $(this)
              , id = $el.attr('href');
		if(id != "#"){
		if(id != "javascript:;" ){
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
			return false;
			}
			}
            
        });

        // Cache selectors
        var topMenu = $(".nav"),
            topMenuHeight = topMenu.outerHeight() + 15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                var item = $($(this).attr("href"));
                if (item.length) { return item; }
            });

        // Bind to scroll
        $(window).scroll(function () {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function () {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            // Set/remove active class
            menuItems
              .parent().removeClass("active")
              .end().filter("[href='#" + id + "']").parent().addClass("active");
        });
</script>
@endpush