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
                                    <li><a href='../itr-service.html'> Income Tax Return</a></li><li> Limited Liability Partnership</li>


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
                                    <h1> Best return filing solutions for your business </h1>
                                        <h2>
                                            <span> Try Taxcellent, you have nothing to lose but your worries </span>
                                        </h2>
                                        <ul class="rcb-business-name">
                                            <li>Small & Medium enterprises l Startups l Traders l Manufacturers l Independent contractors l Kirana shop owners l Wholesalers l Retailers l E-Commerce Sellers l Bloggers l  </li>
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
                                                                    <p class="pricely-foreword">Income Tax Return-Limited Liability Partnership/Partnership Firm</p>
                                                            </h3>
                                                        </th>
                                                        <form method="POST" action="{{ route('cart.addToCart') }}">
                                                            <input type="hidden" id="service_id" value="6" name="serviceId">
                                                            <input type="hidden" id="sub_cat_id" value="18" name="sub_cat_id">
                                                            <input type="hidden" id="sub_cat_id" value="17" name="sub_pack_cat_id">
                                                            <input type="hidden" id="serPrice" value="2999" name="servicePrice">
                                                            @csrf
                                                        <th class="pricely-inner panel-NW-green1" id="th_Basic">
                                                            <h3 class="panel-heading">
                                                                                                                                        <span class="pricely-label">
                                                                    Basic
                                                                </span>

                                                                <div class="pricely-figure">
                                                                    <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                    <span class="pricely-amount">2,999</span>

                                                                    <span class="per-return-text">per return</span>
                                                                </div>
                                                                <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                            </h3>
                                                        </th>
                                                        </form>
                                                        <form method="POST" action="{{ route('cart.addToCart') }}">
                                                        <input type="hidden" id="service_id" value="6" name="serviceId">
                                                        <input type="hidden" id="sub_cat_id" value="18" name="sub_cat_id">
                                                        <input type="hidden" id="sub_cat_id" value="18" name="sub_pack_cat_id">
                                                        <input type="hidden" id="serPrice" value="9534" name="servicePrice">
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
                                                                    <span class="pricely-amount"> 9,534</span>

                                                                    <span class="per-return-text"> per return</span>
                                                                </div>
                                                                <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                            </h3>
                                                        </th>
                                                        </form>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="list-group panle-heading2">
                                                        <td class="list-group-item">
                                                            <h3 class="panel-heading">
                                                                <p class="pricely-foreword"> Services included:</p>
                                                            </h3>
                                                        </td>
                                                        <td colspan="4" class="list-group-item">&nbsp;</td>
                                                    </tr>

                                                        <tr class="list-group">
                                                            <td class="list-group-item">
                                                                Filing of ITR 5 for Firms
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                        </tr>
                                                        <tr class="list-group">
                                                            <td class="list-group-item">
                                                                Dedicated expert for handholding
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                        </tr>
                                                        <tr class="list-group">
                                                            <td class="list-group-item">
                                                                Tax saving &amp; planning advice
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                        </tr>
                                                        <tr class="list-group">
                                                            <td class="list-group-item">
                                                                Computation of tax payable / refundable based on the financials shared 
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
                                                                    <span class="planIcon ion-close-round x"></span>
                                                                </td>
                                                        </tr>
                                                        <tr class="list-group">
                                                            <td class="list-group-item">
                                                                Creation of finacial statements
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-close-round x"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                        </tr>
                                                        <tr class="list-group">
                                                            <td class="list-group-item">
                                                                Computation of tax payable / refundable
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-close-round x"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
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
                                                                Limited Liability Partnership with accurately created financial statements
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-checkmark-round r"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
                                                                    <span class="planIcon ion-close-round x"></span>
                                                                </td>
                                                        </tr>
                                                        <tr class="list-group">
                                                            <td class="list-group-item">
                                                                Limited Liability Partnership without any financial statements
                                                            </td>

                                                                <td class="list-group-item" id="td_Basic">
                                                                    <span class="planIcon ion-close-round x"></span>
                                                                </td>
                                                                <td class="list-group-item" id="td_Premium">
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
                                                                <span class="pricely-amount">2,999</span>
                                                            </div>
                                                                <span class="per-return-text">per return</span>
                                                            <span class="pricely-button"><a href="javascript:;" id="48" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                        </h3>
                                                    </div>

                                                    <ul class="list-group">
                                                    <li class="list-group-item"><strong> Services included:</strong></li>
                                                                    <li class="list-group-item">Filing of ITR 5 for Firms</li>
                                                        <li class="list-group-item">Dedicated expert for handholding</li>
                                                        <li class="list-group-item">Tax saving &amp; planning advice</li>
                                                        <li class="list-group-item">Computation of tax payable / refundable based on the financials shared </li>
                                                            <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                        <li class="list-group-item">  Limited Liability Partnership with accurately created financial statements</li>
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
                                                                <span class="pricely-amount"> 9,534</span>
                                                            </div>
                                                                <span class="per-return-text"> per return</span>
                                                            <span class="pricely-button"><a href="javascript:;" id=" 49" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                        </h3>
                                                    </div>
                                                    <ul class="list-group">
                                                    <li class="list-group-item"><strong> Services included:</strong></li>
                                                                    <li class="list-group-item">Filing of ITR 5 for Firms</li>
                                                        <li class="list-group-item">Dedicated expert for handholding</li>
                                                        <li class="list-group-item">Tax saving &amp; planning advice</li>
                                                        <li class="list-group-item">Creation of finacial statements</li>
                                                        <li class="list-group-item">Computation of tax payable / refundable</li>
                                                            <li class="list-group-item"><strong>Ideal for:</strong></li>
                                                        <li class="list-group-item">  Limited Liability Partnership without any financial statements</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dv-Disclaimer">
                                            <h4>Disclaimer</h4>
                                            <ul>
                                                <li class="asterisk">if you need clarification regarding the package that applies in your case, please write to <a href="../cdn-cgi/l/email-protection.html#ef86818980af86819c9b8e8c8ec18681"><span class="__cf_email__" data-cfemail="472e292128072e293433262426692e29">[email&#160;protected]</span></a></li>
                                                <li class="asterisk">We will get back to you on any ITR related queries  in 72 hours</li>                                            
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