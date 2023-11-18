<?php
use App\Controllers\IndexController;
?><header>
        <!-- NAVIGATION -->
        <nav id="sticker" class="navbar navbar-default" >
            <div class="hed-tp">
                <div class="container">
                    <div class="hed-tp-cntenr">
                        <div class="hed-ofer">
                            <a href="manageinvoice.html">
                                <span class="newService">Try Now!</span>
                                <span class="text">Create GST compliant invoices for <span class="cl-flashit">FREE </span></span>
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER -->
            <div class="container">
                <div class="hed-lgo-mnu-blk">
                    <div class="navbar-header">
                        <div class="wsmenuexpandermain slideRight wsmobileheader"><a id="wsnavtoggle" class="animated-arrow slideLeft" href="#"><span></span></a></div>
                        <div class="ins-mobile-cartsearch-block">
                            <div class="ins-head-search"><a href="#" class="ion-ios-search search-open"></a></div>
                        </div>
                        <a class="navbar-brand" href="{{ url('/') }}"><img class="img-responsive" alt="Taxcellent" src="{{ asset('template/images/Taxcellent_Logo/Taxcellent-logo2.png') }}"></a>
                    </div>
                    <div class="wsmenucontent overlapblackbg"></div>
                    <div class="wsmenu slideLeft clearfix">
					<div class="overlapblackbg"></div>
                        <ul class="mobile-sub wsmenu-list">
                            <li aria-haspopup="true">
                                <a href="javascript:;">Services <span class="ion-ios-arrow-down"></span></a>
                                <div class="megamenu halfdiv nwstl-srvs-mnu clearfix">
                                    <ul class="megacollink">
                                        @php $headermenuAry=App\Http\Controllers\IndexController::getheaderCat();
                                        if($headermenuAry && $headermenuAry["serviceCategory"])
                                        {$cnt=1;

                                        foreach($headermenuAry["serviceCategory"] as $serviceCatval)
                                        { $serviceCocate="";
                                            if($serviceCatval['service'])
                                            {  
                                                foreach($serviceCatval['service'] as $serviceval)
                                                {
                                                       $serviceCocate.=$serviceval["service_name"]."|"; 
                                                }
                                            }

                                            if($cnt==4){echo '<ul class="megacollink">'; }
                                        @endphp
                                            <li>
                                                <a class="complatebusinesspackage" href="{{ url('service-category') }}/{{$serviceCatval['slug']}}">
                                                    <h6>{{$serviceCatval['cat_name']}} </h6>
                                                    <p>{{rtrim($serviceCocate,"|")}}</p>
                                                </a>
                                            </li>
                                        @php
                                        $cnt++;
                                           if($cnt==4){echo '</ul>'; }
                                            }
                                        }
                                        @endphp

                                            <!--<li>
                                                <a class="complatebusinesspackage" href="{{ url('business-registration-service') }}">
                                                    <h6>Business Registration</h6>
                                                    <p>Private Limited Company I Limited Liability Partnership  I One Person Company I NGO Registration </p>
                                                </a>
                                            </li>

                                        <li>
                                            <a class="complatebusinesspackage" href="{{ url('business-registration-service') }}">
                                                <h6>Business Registration </h6>
                                                <p>Private Limited Company I Limited Liability Partnership  I One Person Company I NGO Registration </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="complatebusinesspackage" href="{{ url('accounting-and-tax-service') }}">
                                                <h6>Accounting & Tax</h6>
                                                <p>Complete business Accounting and Tax Package for SMEs I Bookkeeping Services for Business/ Profession/ Startups</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="complatebusinesspackage" href="{{ url('gst-service') }}">
                                                <h6>GST</h6>
                                                <p>GST Registration I GST return filing I GST invoices </p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="megacollink">
                                        <li>
                                            <a class="complatebusinesspackage" href="{{ url('legal-service') }}">
                                                <h6>Legal</h6>
                                                <p>Website Agreements I Legal Agreements I Trademark Application & Objection</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="complatebusinesspackage" href="{{ url('compliances-service') }}">
                                                <h6>Compliance</h6>
                                                <p>Digital Signature Certificate I Director Identification number I Import Export Code</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="complatebusinesspackage" href="{{ url('itr-service') }}">
                                                <h6>Income Tax Return</h6>
                                                <p>ITR Filing for Individuals I ITR Filing for Businesses</p>
                                            </a>
                                        </li>-->
                                    </ul>
                                </div>
                            </li>
                            <li aria-haspopup="true">
                                <a href="javascript:;" class="hed-tp-btn tp-btn-cllus">Contact Us <span class="ion-ios-arrow-down"></span></a>
                                <ul class="wsmenu-submenu call-more2">
                                    <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                                    <li><a href="mailto:info@taxcellent.in"><i class="ion-ios-email-outline"></i> info@taxcellent.in</a></li>
                                </ul>
                            </li>
                            @if(Auth::check())
                            <li>
                                <a href="javascript:;">  Hello {{ Auth::user()->firstName}}! <span class="ion-arrow-down-b"></span></a>

                                <ul class="wsmenu-submenu">
                                    <li><a href="{{ route('myaccount') }}">My Account</a></li>
                                    <li><a href="{{ route('myprofile') }}">My Profile</a></li>
                                    <li><a href="{{ route('mysubscription') }}">My Subscriptions</a></li>
                                    <li><a href="{{ route('cart.mycart') }}">My Cart</a></li>
                                    <li><a href="{{ route('mydocument') }}">My Documents</a></li>                                                                                                                                                            
                                    <li><a href="{{ route('mypayment') }}">My Payments</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="icon-key"></i> Log Out </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="menu-signup-btn">
                                <a href="{{ route('login') }}">Login/Sign Up</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.CONTAINER -->
        </nav>
        <!-- /. NAVIGATION MENU -->

        <div class="full-search-wrapper typo-white">
            <a href="#" class="search-close"><i class="ion-ios-close-empty"></i></a>
            <div class="search-form">
                <div class="input-group">
                    <input type="search" placeholder="Enter a keyword..." name="s" value="" class="form-control search-field">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><span class="ion-ios-search"></span></button>
                    </span>
                </div>
            </div>
        </div>
</header>