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
                                    <li><a href='../gst-service.html'> GST & TDS</a></li><li> GST Registration</li>


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
                                    <h1> GST is our cup of tea </h1>
                                        <h2>
                                            <span> We take care of the small things so that you can focus on the big picture </span>
                                        </h2>
                                        <ul class="rcb-business-name">
                                            <li>For businesses and professionals   </li>
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
                                                            <p class="pricely-foreword">Business-GST Returns</p>
                                                    </h3>
                                                </th>
                                                <form method="POST" action="{{ route('cart.addToCart') }}">
                                                    <input type="hidden" id="service_id" value="5" name="serviceId">
                                                    <input type="hidden" id="sub_cat_id" value="11" name="sub_cat_id">
                                                    <input type="hidden" id="sub_cat_id" value="3" name="sub_pack_cat_id">
                                                    <input type="hidden" id="serPrice" value="1982" name="servicePrice">
                                                    @csrf
                                                <th class="pricely-inner panel-NW-green1" id="th_Basic">
                                                    <h3 class="panel-heading">                                                    
                                                        <div class="pricely-most-popular-block">
                                                                <span>Most Popular</span>
                                                                <i class="ion-thumbsup"></i>
                                                            </div>
                                                        <span class="pricely-label">
                                                            Basic
                                                        </span>

                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount">1,982</span>

                                                            <span class="per-return-text">per month</span>
                                                        </div>
                                                        <span class="pricely-button"><button class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick" type="submit">Buy plan</button></span>
                                                    </h3>
                                                </th>
                                                </form>
                                                <form method="POST" action="{{ route('cart.addToCart') }}">
                                                <input type="hidden" id="service_id" value="5" name="serviceId">
                                                <input type="hidden" id="sub_cat_id" value="11" name="sub_cat_id">
                                                <input type="hidden" id="sub_cat_id" value="4" name="sub_pack_cat_id">
                                                <input type="hidden" id="serPrice" value="3067" name="servicePrice">
                                                @csrf
                                                <th class="pricely-inner panel-NW-green1" id="th_Pro">
                                                    <h3 class="panel-heading">
                                                            <span class="pricely-label">
                                                            Pro
                                                        </span>

                                                        <div class="pricely-figure">
                                                            <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                            <span class="pricely-amount"> 3,067</span>

                                                            <span class="per-return-text"> per month</span>
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
                                                    For businesses and professionals with no. of invoices / month
                                                </td>
                                                        <td class="list-group-item" id="tdturnover_Basic">
                                                    <span class="planIcon getsBusinesspricetext">
                                                        
                                                        0-50 invoices / month
                                                    </span>
                                                        </td>
                                                        <td class="list-group-item" id="tdturnover_Pro">
                                                    <span class="planIcon getsBusinesspricetext">
                                                        
                                                        50-100 invoices / month
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
                                                        Filing of GST Return 1 &amp; GST Return 3B
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        All returns for 1 year
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                        Dedicated CA
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                        <td class="list-group-item" id="td_Pro">
                                                            <span class="planIcon ion-checkmark-round r"></span>
                                                        </td>
                                                </tr>
                                                <tr class="list-group">
                                                    <td class="list-group-item">
                                                         Assistance in Setting Up of Accounting Systems for generating required reports
                                                    </td>

                                                        <td class="list-group-item" id="td_Basic">
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
                                                    <div class="pricely-most-popular-block">
                                                        <span>Most Popular</span>
                                                        <i class="ion-thumbsup"></i>
                                                    </div>
                                                    <span class="pricely-label">Basic</span>
                                                    <div class="pricely-figure">
                                                        <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                        <span class="pricely-amount">1,982</span>
                                                    </div>
                                                        <span class="per-return-text">per month</span>
                                                    <span class="pricely-button"><a href="javascript:;" id="22" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                </h3>
                                            </div>

                                            <ul class="list-group">
                                                <li class="list-group-item">For businesses and professionals with no. of invoices / month  <br /> 0-50 invoices / month</li>
                                                <li class="list-group-item"><strong> Services included:</strong></li>
                                                <li class="list-group-item">Filing of GST Return 1 &amp; GST Return 3B</li>
                                                <li class="list-group-item">All returns for 1 year</li>
                                                <li class="list-group-item">Dedicated CA</li>
                                                <li class="list-group-item"> Assistance in Setting Up of Accounting Systems for generating required reports</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="pricely-inner panel-NW-green1" id="th_Pro">
                                                <h3 class="panel-heading">
                                                    <span class="pricely-label">Pro</span>
                                                    <div class="pricely-figure">
                                                        <span class="pricely-currency"><i class="fa fa-rupee"></i></span>
                                                        <span class="pricely-amount"> 3,067</span>
                                                    </div>
                                                        <span class="per-return-text"> per month</span>
                                                    <span class="pricely-button"><a href="javascript:;" id=" 23" class="btn btn-teal waves-effect waves-ripple buycartitem_withpackageclick">Buy plan</a></span>
                                                </h3>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">For businesses and professionals with no. of invoices / month  <br />  50-100 invoices / month</li>
                                                <li class="list-group-item"><strong> Services included:</strong></li>
                                                <li class="list-group-item">Filing of GST Return 1 &amp; GST Return 3B</li>
                                                <li class="list-group-item">All returns for 1 year</li>
                                                <li class="list-group-item">Dedicated CA</li>
                                                <li class="list-group-item"> Assistance in Setting Up of Accounting Systems for generating required reports</li>
                                            </ul>
                                        </div>
                                    </div>
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