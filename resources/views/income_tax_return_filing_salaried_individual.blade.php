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
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../services.html"> Services</a></li>
                                <li><a href='../itr-service.html'> Income Tax Return</a></li><li> Salaried Individual</li>


                            </ol>
                        </div>
                    </div>
                </div>
            </div>
			</div>
            <!-- /.CONTAINER -->
            <!-- REQUEST CALL BACK -->
            <div class="insta-request-call-back-block">
                <!-- CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ins-rcb-container-block">
                                    <h1> E-filing Income Tax Returns in India </h1>
                                        <h2>
                                            <span> Maximise Deductions, Minimise Taxes </span>
                                        </h2>
                                        <ul class="rcb-business-name">
                                            <li>Salary income l Pension income l Capital gain from property l Capital gain from securities l Capital gain from other assets l <br> Rental income l Dividend income l Interest income l Gifts received l Gambling winnings l Winnings from lotteries l ESOPs  </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.CONTAINER -->
            </div>
            <!-- /. REQUEST CALL BACK -->
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <!-- CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pricely-chart pricely-professional">
                                <section class="pricely-chart-section">
                                    <div class="pricely-pro-dview pricely-pro">
                                        <table class="table" id="plantable">
                                            <thead>
                                                <tr class="plantableheader">
                                                    <th class="pricely-first-heading panel-default colm-400">
                                                        <h3 class="panel-heading">
                                                            <p class="pricely-paragraph"><span class="planIcon ion-ios-paper"></span></p>
                                                                <p class="pricely-foreword">Individual-Taxation</p>
                                                        </h3>
                                                    </th>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="6" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="13" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="5" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="1068" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Basic">
                                                        <h3 class="panel-heading">
                                                                                                                                    <span class="pricely-label">
                                                                Basic
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount">1,068</span>

                                                                <span class="per-return-text">per return</span>
                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="6" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="13" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="6" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="1352" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Premium">
                                                        <h3 class="panel-heading">
                                                                                                                                        <div class="pricely-most-popular-block">
                                                                    <span>Most Popular</span>
                                                                    <i class="ion-thumbsup"></i>
                                                                </div>
                                                            <span class="pricely-label">
                                                                Premium
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount"> 1,352</span>

                                                                <span class="per-return-text"> per return</span>
                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="6" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="13" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="7" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="2999" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Pro">
                                                        <h3 class="panel-heading">
                                                                                                                                    <span class="pricely-label">
                                                                Pro
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount"> 2,999</span>

                                                                <span class="per-return-text"> per return</span>
                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="6" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="13" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="8" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="3999" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Plus">
                                                        <h3 class="panel-heading">
                                                                                                                                    <span class="pricely-label">
                                                                Plus
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount"> 3,999</span>

                                                                <span class="per-return-text"> per return</span>
                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        Income tax return filing
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                </tr>
                                                <tr class="list-group panle-heading2">
                                                    <td class="list-group-item">
                                                        <h3 class="panel-heading">
                                                            <p class="pricely-foreword"> Ideal for:</p>
                                                        </h3>
                                                    </td>
                                                    <td colspan="4" class="list-group-item">&nbsp;</td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        Single form 16 and / or
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        One house property
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        Interest Income
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        Multiple form 16
                                                    </td>
                                                    <td class="list-group-item" id="td_Basic">
                                                        <span class="planIcon ion-close-round x"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Premium">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Pro">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Plus">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        Other income (dividend etc.)
                                                    </td>
                                                    <td class="list-group-item" id="td_Basic">
                                                        <span class="planIcon ion-close-round x"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Premium">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Pro">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Plus">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        Capital gains from property
                                                    </td>
                                                    <td class="list-group-item" id="td_Basic">
                                                        <span class="planIcon ion-close-round x"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Premium">
                                                        <span class="planIcon ion-close-round x"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Pro">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                    <td class="list-group-item" id="td_Plus">
                                                        <span class="planIcon ion-checkmark-round r"></span>
                                                    </td>
                                                </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            ESOP in Indian company
                                                        </td>
                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            PSU employees with salary arrears under OROP, 6th Pay and 7th Pay commission
                                                        </td>
                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Capital gains from Securities
                                                        </td>
                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Multiple house properties
                                                        </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Partner in a Firm
                                                        </td>
                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            Director of a Private Limited Company
                                                        </td>
                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Premium">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-close-round x"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Plus">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="pricely-pro-Mview">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="pricely-inner panel-NW-green1" id="th_Basic">
                                                    <h3 class="panel-heading">
                                                        <span class="pricely-label">Basic</span>
                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount">1,068</span>
                                                        </div>
                                                            <span class="per-return-text">per return</span>
                                                        <span class="pricely-button"><a href="javascript:;" id="1" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>
                                                <ul class="list-group">
                                                                <li class="list-group-item">Income tax return filing</li>
                                                        <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                    <li class="list-group-item">  Single form 16 and / or </li>
                                                    <li class="list-group-item">  One house property</li>
                                                    <li class="list-group-item">  Interest Income</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="pricely-inner panel-NW-green1" id="th_Premium">
                                                    <h3 class="panel-heading">
                                                        <div class="pricely-most-popular-block">
                                                            <span>Most Popular</span>
                                                            <i class="ion-thumbsup"></i>
                                                        </div>
                                                        <span class="pricely-label">Premium</span>
                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount"> 1,352</span>
                                                        </div>
                                                            <span class="per-return-text"> per return</span>
                                                        <span class="pricely-button"><a href="javascript:;" id=" 2" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>
                                                <ul class="list-group">
                                                                <li class="list-group-item">Income tax return filing</li>
                                                        <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                    <li class="list-group-item">  Single form 16 and / or </li>
                                                    <li class="list-group-item">  One house property</li>
                                                    <li class="list-group-item">  Interest Income</li>
                                                    <li class="list-group-item">  Multiple form 16</li>
                                                    <li class="list-group-item">  Other income (dividend etc.)</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="pricely-inner panel-NW-green1" id="th_Pro">
                                                    <h3 class="panel-heading">
                                                        <span class="pricely-label">Pro</span>
                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount"> 2,999</span>
                                                        </div>
                                                            <span class="per-return-text"> per return</span>
                                                        <span class="pricely-button"><a href="javascript:;" id=" 3" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>

                                                <ul class="list-group">
                                                                <li class="list-group-item">Income tax return filing</li>
                                                        <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                    <li class="list-group-item">  Single form 16 and / or </li>
                                                    <li class="list-group-item">  One house property</li>
                                                    <li class="list-group-item">  Interest Income</li>
                                                    <li class="list-group-item">  Multiple form 16</li>
                                                    <li class="list-group-item">  Other income (dividend etc.)</li>
                                                    <li class="list-group-item">  Capital gains from property</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="pricely-inner panel-NW-green1" id="th_Plus">
                                                    <h3 class="panel-heading">
                                                        <span class="pricely-label">Plus</span>
                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount"> 3,999</span>
                                                        </div>
                                                            <span class="per-return-text"> per return</span>
                                                        <span class="pricely-button"><a href="javascript:;" id=" 4" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>

                                                <ul class="list-group">
                                                                <li class="list-group-item">Income tax return filing</li>
                                                        <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                    <li class="list-group-item">  Single form 16 and / or </li>
                                                    <li class="list-group-item">  One house property</li>
                                                    <li class="list-group-item">  Interest Income</li>
                                                    <li class="list-group-item">  Multiple form 16</li>
                                                    <li class="list-group-item">  Other income (dividend etc.)</li>
                                                    <li class="list-group-item">  Capital gains from property</li>
                                                    <li class="list-group-item">  ESOP in Indian company </li>
                                                    <li class="list-group-item">  PSU employees with salary arrears under OROP, 6th Pay and 7th Pay commission</li>
                                                    <li class="list-group-item">  Capital gains from Securities</li>
                                                    <li class="list-group-item">  Multiple house properties</li>
                                                    <li class="list-group-item">  Partner in a Firm</li>
                                                    <li class="list-group-item">  Director of a Private Limited Company</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dv-Disclaimer">
                                        <h4>Disclaimer</h4>
                                        <ul>
                                            <li class="asterisk">Income tax return will be filed within 7 working days from the date of purchase of the ITR package</li>
                                            <li class="asterisk">We do not provide tax filing services for trading in Futures and Options derivatives</li>
                                            <li class="asterisk">If you need clarification regarding the package that applies in your case, please write to <a href="../cdn-cgi/l/email-protection.html#41282f272e01282f32352022206f282f"><span class="__cf_email__" data-cfemail="01686f676e41686f72756062602f686f">[email&#160;protected]</span></a> with your details</li>
                                            <li class="asterisk">We will get back to you on any ITR related queries in 72 hours</li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @include('layouts.inc.footer')
        </div>
    </div>
    <div id="pageloader" style="display:none">
        <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
    </div>
@endsection
