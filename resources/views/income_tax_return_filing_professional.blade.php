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
                                    <li><a href='../itr-service.html'> Income Tax Return</a></li><li> Professionals</li>


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
                                    <h1> Best return filing solutions for professionals </h1>
                                        <h2>
                                            <span> Try Taxcellent, you have nothing to lose but your worries </span>
                                        </h2>
                                        <ul class="rcb-business-name">
                                            <li>Doctors l Lawyers l Engineers l Private Tutors l Fashion Designers l Chartered Accountants l Commission Agents l Insurance agents l           Web Designers l Securities Traders l Architects l Consultants l Freelancers    </li>
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
                                                                <p class="pricely-foreword">Professionals-Taxation  </p>
                                                        </h3>
                                                    </th>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="6" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="14" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="9" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="2133" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Basic">
                                                        <h3 class="panel-heading">
                                                                                                                                    <span class="pricely-label">
                                                                Basic
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount">2,133</span>

                                                                <span class="per-return-text">per return</span>
                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="6" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="14" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="10" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="3209" name="servicePrice">
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
                                                                <span class="pricely-amount"> 3,209</span>

                                                                <span class="per-return-text"> per return</span>
                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                    <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="6" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="14" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="11" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="4284" name="servicePrice">
                                                    @csrf
                                                    <th class="pricely-inner panel-NW-green1" id="th_Pro">
                                                        <h3 class="panel-heading">
                                                                                                                                    <span class="pricely-label">
                                                                Pro
                                                            </span>

                                                            <div class="pricely-figure">
                                                                <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                                <span class="pricely-amount"> 4,284</span>

                                                                <span class="per-return-text"> per return</span>
                                                            </div>
                                                            <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                        </h3>
                                                    </th>
                                                    </form>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="list-group trgetsBusinesspricetext">
                                                    <td class="list-group-item">
                                                        For Professionals with annual receipts
                                                    </td>
                                                    <td class="list-group-item" id="tdturnover_Basic">
                                                <span class="planIcon getsBusinesspricetext">
                                                    &lt;= Rs. 10,00,000
                                                </span>
                                                            </td>
                                                            <td class="list-group-item" id="tdturnover_Premium">
                                                <span class="planIcon getsBusinesspricetext">
                                                    &lt;= Rs. 25,00,000
                                                </span>
                                                            </td>
                                                            <td class="list-group-item" id="tdturnover_Pro">
                                                <span class="planIcon getsBusinesspricetext">
                                                    &gt; Rs. 25,00,000
                                                </span>
                                                            </td>

                                                </tr>
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
                                                            Filing Tax return
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
                                                            <td class="list-group-item" id="td_Pro">
                                                                <span class="planIcon ion-checkmark-round r"></span>
                                                            </td>
                                                    </tr>
                                                    <tr class="list-group">
                                                        <td class="list-group-item">
                                                            email &amp; phone support
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
                                                            <span class="pricely-amount">2,133</span>
                                                        </div>
                                                            <span class="per-return-text">per return</span>
                                                        <span class="pricely-button"><a href="javascript:;" id="24" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>

                                                <ul class="list-group">
                                                    <li class="list-group-item">For Professionals with annual receipts  <br /> &lt;= Rs. 10,00,000</li>
                                                    <li class="list-group-item"><strong> Services included:</strong></li>
                                                    <li class="list-group-item">Filing Tax return</li>
                                                    <li class="list-group-item">Tax saving &amp; planning advice</li>
                                                    <li class="list-group-item">email &amp; phone support</li>
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
                                                            <span class="pricely-amount"> 3,209</span>
                                                        </div>
                                                            <span class="per-return-text"> per return</span>
                                                        <span class="pricely-button"><a href="javascript:;" id=" 25" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>
                                                <ul class="list-group">
                                                    <li class="list-group-item">For Professionals with annual receipts  <br />  &lt;= Rs. 25,00,000</li>
                                                    <li class="list-group-item"><strong> Services included:</strong></li>
                                                    <li class="list-group-item">Filing Tax return</li>
                                                    <li class="list-group-item">Tax saving &amp; planning advice</li>
                                                    <li class="list-group-item">email &amp; phone support</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="pricely-inner panel-NW-green1" id="th_Pro">
                                                    <h3 class="panel-heading">
                                                        <span class="pricely-label">Pro</span>
                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount"> 4,284</span>
                                                        </div>
                                                            <span class="per-return-text"> per return</span>
                                                        <span class="pricely-button"><a href="javascript:;" id=" 26" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                    </h3>
                                                </div>
                                                <ul class="list-group">
                                                    <li class="list-group-item">For Professionals with annual receipts  <br />  &gt; Rs. 25,00,000</li>
                                                    <li class="list-group-item"><strong> Services included:</strong></li>
                                                    <li class="list-group-item">Filing Tax return</li>
                                                    <li class="list-group-item">Tax saving &amp; planning advice</li>
                                                    <li class="list-group-item">email &amp; phone support</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dv-Disclaimer">
                                        <h4>Disclaimer</h4>
                                        <ul>
                                            <li class="asterisk">Income tax return will be filed within 7 working days from the date of purchase of the ITR package</li>
                                            <li class="asterisk">We do not provide tax filing services for trading in Futures and Options derivatives</li>
                                            <li class="asterisk">If you need clarification regarding the package that applies in your case, please write to <a href="../cdn-cgi/l/email-protection.html#6d04030b022d04031e190c0e0c430403"><span class="__cf_email__" data-cfemail="066f686069466f687572676567286f68">[email&#160;protected]</span></a> with your details</li>
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