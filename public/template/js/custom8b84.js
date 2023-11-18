/* ----------- WINDOW LOAD ----------- */
$(window).on( "load", function() {
	
});	

/* ----------- DOCUMENT READY ----------- */
$(document).ready(function($) {
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
	sliderPages();
    //sliderPages2();    
    ProcessTopyment();
    ScrollTop();
    navMenu();
	sticky();
	fullSearch();
	Animations();
	bgImage();
	parallaxBg();
	numberCounter();
	owlSlider();
	colorSwitcher();
	IsotopeGrid();
	//bootForm();
	revSlider();
	pieChart();
	GmapInit();     
    taxsaverclick();
    myprofileclick();
    textCount();
    // Mobileftmenu();
    // Mobirightmenu();
    viewDetailsToggle();
    emailReceiptToggle();
    subscriptionQueryToggle();
    sendQueryToggle();
    $('[data-toggle="tooltip"]').tooltip();

    /* ----------- Page Loader ----------- */
    var cururl = window.location.href;
	if(cururl.toLowerCase().search('/thankyou') != -1){
	}
	else{    $("#pageloader").fadeOut(1500);
    $("#pageloader > img").fadeOut(1000);
	}
    prettyPhoto();
    pieChart();
});


/* --------------------------------------------
			MY ACCOUTN SEND QUERY SHOW HIDE
-------------------------------------------- */	

function sendQueryToggle() {
    /*$(".sendquery-click").click(function() {
        $(".myCA-send-query-block").show();
    });*/
}
    
/* --------------------------------------------
			MY ACCOUTN SUBSCRIPTION QUERY SHOW HIDE
-------------------------------------------- */	

function subscriptionQueryToggle(){
    $('#radio2').click(function () {
        $('#show-more-subscription').show();// ALSO SHOW THE DIV.
    });
    // REVERSE ANIMATE.
    $('#radio1').click(function () {
        $('#show-more-subscription').hide();// HIDE THE DIV.
    });
}


/* --------------------------------------------
			MY ACCOUTN EMAIL RECEIPT TOGGLE
-------------------------------------------- */	

function emailReceiptToggle(){
    $('#email-receipt-clickShow').click(function () {
        $('#email-receipt-show-content').show();// ALSO SHOW THE DIV.
    });
    // REVERSE ANIMATE.
    $('#email-receipt-clickHide').click(function () {
        $('#email-receipt-show-content').hide();// HIDE THE DIV.
    });
}


/* --------------------------------------------
			MY ACCOUTN VIEW DETAILS TOGGLE
-------------------------------------------- */	

//function viewDetailsToggle(){
//    $('#View-details-clickShow').click(function () {
//        $('#view-details-show-content').show();// ALSO SHOW THE DIV.
//    });
//    // REVERSE ANIMATE.
//    $('#View-details-clickHide').click(function () {
//        $('#view-details-show-content').hide();// HIDE THE DIV.
//    });
//}
function viewDetailsToggle() {
    $('.View-details-clickShow_class').click(function () {
        var id = $(this).parents('li').attr('id');
        $('.view-details_' + id).find(".view-details-show-content_class").show();
    });
    // REVERSE ANIMATE.
    $('.View-details-clickHide_class').click(function () {
        var id = $(this).parents('li').attr('id');
        $('.view-details_' + id).find(".view-details-show-content_class").hide();
    });
}


/* --------------------------------------------
			SCROLL NAVIGATION
-------------------------------------------- */	

$('.button').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})
$('#close').click(function(){
  $('#modal-container').addClass('out');
  $('body').removeClass('modal-active');
})

/*$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});*/


/* --------------------------------------------
			ANIMATION TEXT
-------------------------------------------- */
    /*$(".animate-text").animatext({speed: 80,
    effect: 'flipInX',
    infinite: false});*/

/* --------------------------------------------
			SCROLL NAVIGATION
-------------------------------------------- */	
function navMenu(){
	"use strict";
	$( ".scroll li a" ).on( "click", function(event) {
		var $anchor = $(this);
		var headerH = $('nav').innerHeight();
			$('html, body').stop().animate({					
				scrollTop : $($anchor.attr('href')).offset().top  - headerH + "px"
			}, 1200, 'easeInOutExpo');
		event.preventDefault();
	});
	/* Active When Scroll */
	$('body').scrollspy({ 
		target: '#main-nav'
	});
	/* Responsive Auto Close */
	$( "#main-nav .nav li a" ).on( "click", function() {
		 $('body').removeClass('menu-open');
	});
	/* Smooth Scroll Links */
	$( ".page-scroll" ).on( "click", function(event) {
		var $anchor = $(this);
		var headerH = $('nav').innerHeight();
		$('html, body')
			.stop()
			.animate({
				scrollTop: $($anchor.attr('href'))
					.offset()
					.top - headerH + "px"
			}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
}


/* -------------------------------	
			FULL SCREEN PAGES 1
/* ----------------------------- */
function sliderPages(){
    $('#fullpage').fullpage({
        //anchors: ['firstPage', 'secondPage', '3rdPage'],
        //sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
        //navigation: true,
        //navigationPosition: 'right',
        //navigationTooltips: ['First page', 'Second page', 'Third and last page'],
        //responsiveWidth: 768,
        //afterResponsive: function(isResponsive){},
        autoScrolling: false,
        fitToSection: false
    });
}

/* -------------------------------	
			FULL SCREEN PAGES 2
/* ----------------------------- */
/*function sliderPages2(){
    $('#fullpage2').fullpage({
        autoScrolling: false
    });
}*/


/* --------------------------------------------
			TAX SAVE CLICK EVENT
-------------------------------------------- */

function taxsaverclick() {
    $(".quesNext1").click(function() {
        $("#quesBlock2").show();
        $("#quesBlock1").hide();
    });

    $(".quesNext2").click(function() {
         $("#quesBlock3").show();
         $("#quesBlock2").hide();
    });
    
    $(".quesback1").click(function() {
        $("#quesBlock1").show();
        $("#quesBlock2").hide();
    });

    $(".quesback2").click(function() {
         $("#quesBlock2").show();
         $("#quesBlock3").hide();
    });
    
}

/* --------------------------------------------
			MY PROFILE FORM
-------------------------------------------- */

function myprofileclick() {
    /*Edit profile click function*/
    $(".editprofile-click").click(function() {
        $(".Editmyprofile").show();
        $(".myProfile-user-details-block").hide();
    });

    $(".saveprofile-click").click(function() {
        $(".myProfile-user-details-block").show(); 
        $(".Editmyprofile").hide();
    });
    
    /*changes password click function*/
    $(".editpassword-click").click(function() {
        $(".Editpassword").show();
        $(".myProfile-user-details-block").hide();
    });

    $(".changepassword-click").click(function() {
        $(".myProfile-user-details-block").show(); 
        $(".Editpassword").hide();
    });
}

/* -------------------------------	
			STICKY
/* ----------------------------- */
function sticky() {
	if ($('#sticker').length) {
		$("#sticker").sticky({
			topSpacing:0
		});
	 }
}

/* -------------------------------	
			FULL SEARCH
/* ----------------------------- */
function fullSearch() {
	if($(".search-open").length){
		$( ".search-open, .search-close" ).on( "click", function(event) {
			$( ".full-search-wrapper" ).fadeToggle(300);
			$( ".full-search-wrapper .search-field" ).focus();
			return false;
		});
	}
}

/* ---------------------	
		ANIMATION
/* --------------------- */	
function Animations() {
	"use strict";
	$('.animated').appear(function() {
		var elem = $(this);
		var animation = elem.data('animation');
		if ( !elem.hasClass('visible') ) {
			var animationDelay = elem.data('animation-delay');
			if ( animationDelay ) {			
				setTimeout(function(){
				 elem.addClass( animation + " visible" );
				}, animationDelay);				
			} else {
				elem.addClass( animation + " visible" );
			}
		}
	});
}
/* -------------------------------	
		BACKGROUND IMAGE
/* ----------------------------- */
function bgImage(){	
	"use strict";
	var pageSection = $('[data-background]');
	pageSection.each(function(indx){
		if ($(this).attr("data-background")){
			$(this).css("background-image", "url(" + $(this).data("background") + ")");
		}
	});
	$('[data-bgcolor]').css('background', function () {
		return $(this).data('bgcolor')
	});
}
/* -------------------------------	
		PARALLAX BG IMAGE
/* ----------------------------- */
function parallaxBg(){	
	"use strict";
	if($('.parallax-bg').length != 0 && !navigator.userAgent.match(/iPad|iPhone|Android/i)){	
			$.stellar();
		}
}
 /* -------------------------------	
		NUMBER COUNTER
/* ----------------------------- */	
function numberCounter(){	
	if ($('.number-counter').length) {
		$(".number-counter").appear(function(){
			$(this).each(function(){
				datacount = $(this).attr('data-count');
				$(this).delay(6000).countTo({
					from: 10,
					to: datacount,
					speed: 3000,
					refreshInterval: 50,
				});
			});
		});
	}	
}	

 /* -------------------------------	
		COLOR SWITCHER
/* ----------------------------- */	
function colorSwitcher(){	
	if ($('.switcher').length) {
		// Color Skins
		$('.switcher').on( "click", function(event){								 	
			var title = jQuery(this).attr('title');
			jQuery('#changeable-colors').attr('href', 'css/color-scheme/' + title + '.css');
			return false;
		});
	}	
}
/* -------------------------------	
		PRETTY PHOTO
/* ----------------------------- */ 
 function prettyPhoto() {
	 "use strict";
	if( $("a[rel^='prettyPhoto'], a[data-rel^='prettyPhoto']").length != 0 ) { 
	 $("a[rel^='prettyPhoto'], a[data-rel^='prettyPhoto']").prettyPhoto({hook: 'data-rel', social_tools: false, deeplinking: false});
	}
 }	
 /* -------------------------------	
		OWL SLIDER
/* ----------------------------- */
 function owlSlider() {
	"use strict";
	if ($('.owl-carousel').length) {		    
		  $(".owl-carousel").each(function (index) {
			var autoplay = $(this).data('autoplay');
			var timeout = $(this).data('delay');
			var slidemargin = $(this).data('margin');
			var slidepadding = $(this).data('stagepadding');
			var items = $(this).data('items');
			var animationin = $(this).data('animatein');
			var animationout = $(this).data('animateout');
			var itemheight = $(this).data('autoheight');
			var itemwidth = $(this).data('autowidth');
			var itemmerge = $(this).data('merge');
			var navigation = $(this).data('nav');
			var pagination = $(this).data('dots');
			var infinateloop = $(this).data('loop');
			var itemsdesktop = $(this).data('desktop');
			var itemsdesktopsmall = $(this).data('desktopsmall');
			var itemstablet = $(this).data('tablet');
			var itemsmobile = $(this).data('mobile');
			$(this).owlCarousel({ 
				autoplay: autoplay,
				autoplayTimeout:timeout,
				items : items,
				margin:slidemargin,
				autoHeight:itemheight,
				autoWidth:itemwidth,
				stagePadding:slidepadding,
				URLhashListener:true,
				startPosition: 'one',
				merge:itemmerge,
				nav:navigation,
				dots:pagination,
				loop:infinateloop,
				responsive:{
					0 : {
						items:itemsmobile,
					},
					479:{
						items:itemsmobile,
					},
					768:{
						items:itemstablet,
					},
					980:{
						items:itemsdesktopsmall,
					},
					1199:{
						items:itemsdesktop,
					}
				}
			});
		});
	}  
}
 /* -------------------------------	
		ISOTOPE GRID
/* ----------------------------- */
function IsotopeGrid() {
	$('.isotope-grid').isotope({
	  itemSelector: '.grid-item',
	  percentPosition: true,
	  masonry: {
		// use outer width of grid-sizer for columnWidth
		columnWidth: '.grid-sizer'
	  }
	});
}


/*<!-- REVOLUTION CUSTOM JS -->*/

function revSlider() {
	/* SLIDER 1 */
	if ( $( "#rev-slide1" ).length !== 0 ) {
		var revapi202;
		revapi202 = $("#rev-slide1").show().revolution({
			sliderType: "standard",
			dottedOverlay: "none",
			delay: 6000,
			navigation: {
				keyboardNavigation: "on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation: "off",
				navigationType:"bullet",
				onHoverStop: "off",
				touch: {
					touchenabled: "on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
			},
			responsiveLevels: [1240, 1024, 778, 480],
			visibilityLevels: [1240, 1024, 778, 480],
			gridwidth: [1170, 1024, 778, 480],
			gridheight: [748, 768, 960, 350],
			lazyType: "none",
			parallax: {
				type: "scroll",
				origo: "slidercenter",
				speed: 1000,
				levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
				type: "scroll",
			},
			shadow: 0,
			spinner: "on",
			stopAtSlide: 1,
			shuffle: "off",
			autoHeight: "off",
			fullScreenAutoWidth: "off",
			fullScreenAlignForce: "off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "60px",
			disableProgressBar: "on",
			hideThumbsOnMobile: "off",
			hideSliderAtLimit: 0,
			hideCaptionAtLimit: 0,
			hideAllCaptionAtLilmit: 0,
			debugMode: false,
			fallbacks: {
				simplifyAll: "off",
				nextSlideOnWindowFocus: "off",
				disableFocusListener: false,
			}
		});
	}
	/* SLIDER 2 */
	if ( $( "#rev-slide2" ).length !== 0 ) {
		var revapi626;
		revapi626 = $("#rev-slide2").show().revolution({
			sliderType: "standard",
			dottedOverlay: "none",
			delay: 9000,
			navigation: {
				keyboardNavigation: "off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation: "off",
				mouseScrollReverse: "default",
				onHoverStop: "off",
				touch: {
					touchenabled: "on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
			},
			responsiveLevels: [1240, 1024, 778, 480],
			visibilityLevels: [1240, 1024, 778, 480],
			gridwidth: [1170, 1024, 778, 480],
			gridheight: [640, 750, 960, 400],
			lazyType: "single",
			parallax: {
				type: "mouse",
				origo: "slidercenter",
				speed: 300,
				levels: [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 49, 50, 51, 55],
				type: "mouse",
			},
			shadow: 0,
			spinner: "spinner3",
			stopLoop: "on",
			stopAfterLoops: 0,
			stopAtSlide: 1,
			shuffle: "off",
			autoHeight: "off",
			fullScreenAutoWidth: "off",
			fullScreenAlignForce: "off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			disableProgressBar: "on",
			hideThumbsOnMobile: "off",
			hideSliderAtLimit: 0,
			hideCaptionAtLimit: 0,
			hideAllCaptionAtLilmit: 0,
			debugMode: false,
			fallbacks: {
				simplifyAll: "off",
				nextSlideOnWindowFocus: "off",
				disableFocusListener: false,
			}
		});
	}
	/* SLIDER 3 */
	if ( $( "#rev-slide3" ).length !== 0 ) {
		var revapi202;
		revapi202 = $("#rev-slide3").show().revolution({
			sliderType: "standard",
			dottedOverlay: "none",
			delay: 500,
			navigation: {
				keyboardNavigation: "on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation: "off",
				navigationType:"bullet",
				onHoverStop: "off",
				touch: {
					touchenabled: "on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
			},
			responsiveLevels: [1240, 1024, 778, 480],
			visibilityLevels: [1240, 1024, 778, 480],
			gridwidth: [1170, 1024, 778, 480],
			gridheight: [1140, 822, 960, 450],
			lazyType: "none",
			parallax: {
				type: "scroll",
				origo: "slidercenter",
				speed: 1000,
				levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
				type: "scroll",
			},
			shadow: 0,
			spinner: "on",
			stopAtSlide: 1,
			shuffle: "off",
			autoHeight: "off",
			fullScreenAutoWidth: "off",
			fullScreenAlignForce: "off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "60px",
			disableProgressBar: "on",
			hideThumbsOnMobile: "off",
			hideSliderAtLimit: 0,
			hideCaptionAtLimit: 0,
			hideAllCaptionAtLilmit: 0,
			debugMode: false,
			fallbacks: {
				simplifyAll: "off",
				nextSlideOnWindowFocus: "off",
				disableFocusListener: false,
			}
		});
	}
	/* SLIDER 4 */
	if ( $( "#rev-slide4" ).length !== 0 ) {
		var revapi202;
		revapi202 = $("#rev-slide4").show().revolution({
			sliderType: "standard",
			dottedOverlay: "none",
			delay: 9000,
			navigation: {
				keyboardNavigation: "on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation: "off",
				navigationType:"bullet",
				onHoverStop: "off",
				touch: {
					touchenabled: "on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
			},
			responsiveLevels: [1240, 1024, 778, 480],
			visibilityLevels: [1240, 1024, 778, 480],
			gridwidth: [1170, 1024, 778, 480],
			gridheight: [950, 1200, 1300, 1400],
			lazyType: "none",
			parallax: {
				type: "scroll",
				origo: "slidercenter",
				speed: 1000,
				levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
				type: "scroll",
			},
			shadow: 0,
			spinner: "on",
			stopAtSlide: 1,
			shuffle: "off",
			autoHeight: "off",
			fullScreenAutoWidth: "off",
			fullScreenAlignForce: "off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "60px",
			disableProgressBar: "on",
			hideThumbsOnMobile: "off",
			hideSliderAtLimit: 0,
			hideCaptionAtLimit: 0,
			hideAllCaptionAtLilmit: 0,
			debugMode: false,
			fallbacks: {
				simplifyAll: "off",
				nextSlideOnWindowFocus: "off",
				disableFocusListener: false,
			}
		});
	}
}/* --------------------------------------------
				GOOGLE MAP
-------------------------------------------- */	
function pieChart() {
	var pieChartData = [
		{
			value : 35,
			color : "#E97F29"
		},
		{
			value : 30,
			color : "#28ACEA"
		},
		{
			value: 35,
			color:"#ECC927"
		},
		
	];
	function showPieChart(){
		var ctx = document.getElementById("pieChartmist").getContext("2d");
		new Chart(ctx).Pie(pieChartData,{	responsive: true	});
	}
	$('#pieChart').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showPieChart,300); },{accX: 0, accY: -155},'easeInCubic');
}
/* --------------------------------------------
				GOOGLE MAP
-------------------------------------------- */	
function GmapInit() {
	  Gmap = $('.map-canvas');
	  Gmap.each(function() {
		var $this           = $(this),
			lat             = 0,
			lng             = 0,
			zoom            = 12,
			scrollwheel     = false,
			zoomcontrol 	= true,
			draggable       = true,
			mapType         = google.maps.MapTypeId.ROADMAP,
			title           = '',
			contentString   = '',
			dataLat         = $this.data('lat'),
			dataLng         = $this.data('lng'),
			dataZoom        = $this.data('zoom'),
			dataType        = $this.data('type'),
			dataScrollwheel = $this.data('scrollwheel'),
			dataZoomcontrol = $this.data('zoomcontrol'),
			dataHue         = $this.data('hue'),
			dataSaturation  = $this.data('saturation'),
			dataLightness   = $this.data('lightness'),
			dataTitle       = $this.data('title'),
			dataContent     = $this.data('content');
			
		if( dataZoom !== undefined && dataZoom !== false ) {
			zoom = parseFloat(dataZoom);
		}
		if( dataLat !== undefined && dataLat !== false ) {
			lat = parseFloat(dataLat);
		}
		if( dataLng !== undefined && dataLng !== false ) {
			lng = parseFloat(dataLng);
		}
		if( dataScrollwheel !== undefined && dataScrollwheel !== null ) {
			scrollwheel = dataScrollwheel;
		}
		if( dataZoomcontrol !== undefined && dataZoomcontrol !== null ) {
			zoomcontrol = dataZoomcontrol;
		}
		if( dataType !== undefined && dataType !== false ) {
			if( dataType == 'satellite' ) {
				mapType = google.maps.MapTypeId.SATELLITE;
			} else if( dataType == 'hybrid' ) {
				mapType = google.maps.MapTypeId.HYBRID;
			} else if( dataType == 'terrain' ) {
				mapType = google.maps.MapTypeId.TERRAIN;
			}		  	
		}
		if( dataTitle !== undefined && dataTitle !== false ) {
			title = dataTitle;
		}
		if( navigator.userAgent.match(/iPad|iPhone|Android/i) ) {
			draggable = false;
		}
		
		var mapOptions = {
		  zoom        : zoom,
		  scrollwheel : scrollwheel,
		  zoomControl : zoomcontrol,
		  draggable   : draggable,
		  center      : new google.maps.LatLng(lat, lng),
		  mapTypeId   : mapType
		};		
		var map = new google.maps.Map($this[0], mapOptions);
		
		var image = 'images/map-marker.png';
		if( dataContent !== undefined && dataContent !== false ) {
			contentString = '<div class="map-data">' + '<h6>' + title + '</h6>' + '<div class="map-content">' + dataContent + '</div>' + '</div>';
		}
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		
		var marker = new google.maps.Marker({
		  position : new google.maps.LatLng(lat, lng),
		  map      : map,
		  icon     : image,
		  title    : title
		});
		if( dataContent !== undefined && dataContent !== false ) {
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
		}
		
		if( dataHue !== undefined && dataHue !== false ) {
		  var styles = [
			{
			  stylers : [
				{ hue : dataHue },
				{ saturation: dataSaturation },
				{ lightness: dataLightness }
			  ]
			}
		  ];
		  map.setOptions({styles: styles});
		}
	 });	 
}
	
/* --------------------------------------------
			BACK TO TOP 
-------------------------------------------- */
function ScrollTop(){    
    //Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
}


/* --------------------------------------------
			PROGRESS BAR
-------------------------------------------- */
/* ----------- PROGRESS LOAD ----------- */
$(window).on( "load", function() {
	$("#pageloaderOne").fadeOut(1500);
	$("#pageloaderOne > .progress-loading-block").fadeOut(1000);
});

var $progress = $(".progress"),
    $bar = $(".progress__bar"),
    $text = $(".progress__text"),
    percent = 0,
    update,
    resetColors,
    speed = 200,
    orange = 30,
    yellow = 55,
    green = 85,
    timer;

resetColors = function() {

  $bar
    .removeClass("progress__bar--green")
    .removeClass("progress__bar--yellow")
    .removeClass("progress__bar--orange")
    .removeClass("progress__bar--blue");

  $progress
    .removeClass("progress--complete");

};

update = function() {

  timer = setTimeout( function() {

    percent += Math.random() * 3;
    percent = parseFloat( percent.toFixed(1) );

    $text.find("em").text( percent + "" );

    if( percent >= 100 ) {

      percent = 100;
      $progress.addClass("progress--complete");
      $bar.addClass("progress__bar--green");
      $text.find("em").text( "Complete" );

    } else {

      if( percent >= green ) {
        $bar.addClass("progress__bar--green");
      }

      else if( percent >= yellow ) {
        $bar.addClass("progress__bar--yellow");
      }

      else if( percent >= orange ) {
        $bar.addClass("progress__bar--orange");
      }

      speed = Math.floor( Math.random() * 80 );
      update();

    }

    $bar.css({ width: percent + "%" });

  }, speed);

};
setTimeout( function() {

  $progress.addClass("progress--active");
  update();

},1000);

/*$(document).on("click",  function(e) {
  percent = 0;
  clearTimeout( timer );
  resetColors();
  update();
});*/

/* --------------------------------------------
			TEXT COUNTER
-------------------------------------------- */
function textCount(){
    //$('.Textcounter').counterUp({
    //    delay: 10,
    //    time: 1000
    //});
}

/* --------------------------------------------
			PORCESS TO PYMENT SCRIPT
-------------------------------------------- */
function ProcessTopyment(){
    $("#ProcessPayment").click(function () {
        $("#ProcessPaymentDetails").show();
    });
}

/* --------------------------------------------
			MY ACCOUNT LEFT MENU
-------------------------------------------- */
function Mobileftmenu(){
    var leftslideMenu = new Menu({
        wrapper: '.page-wrapper',
        type: 'leftslide',
        menuOpenerClass: '.slicknav-toggle',
        maskId: '#c-mask'
    });

    var leftslideBtn = document.querySelector('#c-button--leftslide');

    leftslideBtn.addEventListener('click', function(e) {
        e.preventDefault;
        leftslideMenu.open();
    });
}

/* --------------------------------------------
			MY ACCOUNT RIGHT MENU
-------------------------------------------- */
function Mobirightmenu(){
    var rightslideMenu = new Menu({
        wrapper: '.page-wrapper',
        type: 'rightslide',
        menuOpenerClass: '.slicknav-toggle',
        maskId: '#c-mask'
    });

    var rightslideBtn = document.querySelector('#c-button--rightslide');

    rightslideBtn.addEventListener('click', function(e) {
        e.preventDefault;
        rightslideMenu.open();
    });
}

/*******/
/*-- Screenshot Center Active Slider --*/
$(document).ready(function() {
	try{
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true,
      asNavFor: '.slider-nav'
    });
    
    $('.slider-nav').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-for',        
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 800,
        dots: false,
        infinite: true,
        pauseOnHover:false,
        focusOnSelect: true,
        
        centerMode: true,
        centerPadding: '118px',
        slidesToShow: 1,
        
        /*responsive: [
            {
                breakpoint: 1451,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0',
                }
            },
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0',
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0',
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0',
                }
            },
            {
              breakpoint: 768,
              settings: {
                centerPadding: '42px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 481,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 3
              }
            }
        ]*/
    });
	}catch(e){}
});

//var sliderScreenshotActive = $('.slider-screenshot-active');
//sliderScreenshotActive.slick({
    
//    arrows: false,
//    autoplay: false,
//    dots: true,
//    autoplaySpeed: 5000,
//    
//    speed: 500,
//    fade: true,
//    cssEase: 'linear',
//    
//    infinite: true,
//    centerMode: true,
//    centerPadding: '118px',
//    slidesToShow: 3,
//    
//    pauseOnHover:false,
//    
//    focusOnSelect: true,
//    responsive: [
//        {
//            breakpoint: 1451,
//            settings: {
//                slidesToShow: 3,
//                centerPadding: '0',
//            }
//        },
//        {
//            breakpoint: 1300,
//            settings: {
//                slidesToShow: 3,
//                centerPadding: '28px',
//            }
//        },
//        {
//            breakpoint: 1200,
//            settings: {
//                slidesToShow: 3,
//                centerPadding: '72px',
//            }
//        },
//        {
//            breakpoint: 991,
//            settings: {
//                slidesToShow: 3,
//                centerPadding: '87px',
//            }
//        },
//        {
//          breakpoint: 768,
//          settings: {
//            centerPadding: '42px',
//            slidesToShow: 3
//          }
//        },
//        {
//          breakpoint: 480,
//          settings: {
//            arrows: false,
//            centerMode: true,
//            centerPadding: '0px',
//            slidesToShow: 3
//          }
//        }
//    ]
// });
/*-- Screenshot Center Active Slider end--*/

/* END */