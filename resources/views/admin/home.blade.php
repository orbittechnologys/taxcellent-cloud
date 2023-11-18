@extends('layouts.dashboard.dash_master')
@section('css')
<!-- Maps css -->
<link href="{{ asset('dashboard/assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@stop
@section('content')

@include('admin.inc.header')

<div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
                <p class="mg-b-0">{{Auth::guard('admin')->user()->name}}</p>
                </div>
            </div>
            <div class="main-dashboard-header-right">
                <div>
                    <label class="tx-13">Today's Date</label>
                    <h5><?= date_format($date,"d/m/Y") ?></h5>
                </div>
                <div>
                    <label class="tx-13">Last Login</label>
                    <h5>{{Auth::guard('admin')->user()->last_login;}}</h5>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <!-- row -->
        <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                    <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TODAY APPLICATION</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white"><?= $totalApplications; ?></h4>
                                    <p class="mb-0 tx-12 text-white op-7">Today's Applications</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <div class="icon1 mt-2 text-center text-white">
                                        <i class="fe fe-file-text tx-40"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                    <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TOTAL CUSTOMERS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white"><?=  $totalCustumers; ?></h4>
                                    <p class="mb-0 tx-12 text-white op-7">Up to till Date</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <div class="icon1 mt-2 text-center text-white">
                                        <i class="fe fe-users tx-40"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                    <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TOTAL APPLICATIONS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white"><?= $totalApplications; ?></h4>
                                    <p class="mb-0 tx-12 text-white op-7">Numbers of service Applications</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <div class="icon1 mt-2 text-center text-white">
                                        <i class="fe fe-file-text tx-40"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                    <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TOTAL STAFF</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white"><?= $totalStaff; ?></h4>
                                    <p class="mb-0 tx-12 text-white op-7">Taxcellent Staff Members</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <div class="icon1 mt-2 text-center text-white">
                                        <i class="fe fe-users tx-40"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="card">
                    <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Service Application Status</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-0"></p>
                    </div>
                    <div class="card-body">
                        <div class="total-revenue">
                            <div>
                              <h4>120,750</h4>
                              <label><span class="bg-primary"></span>Complete</label>
                            </div>
                            <div>
                              <h4>56,108</h4>
                              <label><span class="bg-danger"></span>Pending</label>
                            </div>
                            <div>
                              <h4>32,895</h4>
                              <label><span class="bg-warning"></span>Inprocess</label>
                            </div>
                          </div>
                        <div id="bar" class="sales-bar mt-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-5">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3 class="card-title mb-2">Recent Services Application</h3>
                        <p class="tx-12 mb-0 text-muted">This Month Serviecs Applications</p>
                    </div>
                    <div class="card-body sales-info ot-0 pb-0 pt-0">
                        <div id="chart" class="ht-150"></div>
                        <div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">
                            <div class="col-md-6 col">
                                <p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Completed</p>
                                <h3 class="mb-1">5238</h3>
                                <div class="d-flex">
                                    <p class="text-muted ">Last 6 months</p>
                                </div>
                            </div>
                            <div class="col-md-6 col">
                                <p class="mb-0 d-flex"><span class="legend bg-info brround"></span>In process</p>
                                    <h3 class="mb-1">3467</h3>
                                <div class="d-flex">
                                    <p class="text-muted">Last 6 months</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->

</div>
<!-- Container closed -->

@endsection

@push('scripts')
<!--Internal  Chart.bundle js -->
<script src="{{ asset('dashboard/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

<!--Internal Sparkline js -->
<script src="{{ asset('dashboard/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!--Internal Apexchart js-->
<script src="{{ asset('dashboard/assets/js/apexcharts.js') }}"></script>
<!-- Internal Map -->
<script src="{{ asset('dashboard/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!--Internal  Perfect-scrollbar js -->
<script src="{{ asset('dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>
<!--Internal  index js -->
<script src="{{ asset('dashboard/assets/js/index.js') }}"></script>
    @endpush