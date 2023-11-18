<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Taxcellent') }}</title>

    <!-- css -->
    <!--- Favicon --->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

    <!--- Icons css --->
    <link href="{{ asset('dashboard/assets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--- Right-sidemenu css --->
    <link href="{{ asset('dashboard/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{ asset('dashboard/assets/plugins/perfect-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/sidemenu.css') }}">

    <!--- Style css --->
    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">


    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{ asset('dashboard/assets/plugins/sidemenu-responsive-tabs/sidemenu-responsive-tabs.css') }}" rel="stylesheet">
    <!--  Owl-carousel css-->
	<link href="{{ asset('dashboard/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
     <!-- Internal Data table css -->
    <link href="{{ asset('dashboard/assets/plugins/datatable/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/plugins/datatable/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--- Animations css --->
    <link href="{{ asset('dashboard/assets/css/animate.css') }}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{ asset('dashboard/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/switcher/demo.css') }}" rel="stylesheet">
    <!-- // css -->
    <style>
        .side-menu .side-menu__icon {
            line-height: 20px!important;
        }
    </style>
    @yield('css')
    <!-- Scripts -->
    <!--- JQuery min js --->
	<script src="{{ asset('dashboard/assets/plugins/jquery/jquery.min.js') }}"></script>
    
   
</head>

<body class="main-body app sidebar-mini">
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('dashboard/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->
    <!-- Page -->
    <div class="page">
        @include('user.inc.sidebar')
        <!-- main-content -->
        <div class='main-content app-content'>
            @yield('content')  
        </div>
    </div>
    <!-- main-content closed -->
    <!--- Bootstrap Bundle js --->
    <script src="{{ asset('dashboard/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--- Ionicons js --->
    <script src="{{ asset('dashboard/assets/plugins/ionicons/ionicons.js') }}"></script>

    <!--- Moment js --->
    <script src="{{ asset('dashboard/assets/plugins/moment/moment.js') }}"></script>
    <!-- P-scroll js -->
    <script src="{{ asset('dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!--- Rating js --->
    <script src="{{ asset('dashboard/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/rating/jquery.barrating.js') }}"></script>

    <!-- Sticky js -->
	<script src="{{ asset('dashboard/assets/js/sticky.js')}}"></script>
    <!-- Sidebar js -->
    <script id="sidemenu" src="{{ asset('dashboard/assets/plugins/side-menu/sidemenu.js') }}"></script>
    <!-- Right-sidebar js -->
    <script src="{{ asset('dashboard/assets/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/sidebar/sidebar-custom.js')}}"></script>
    <!-- eva-icons js -->
	<script src="{{ asset('dashboard/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>
    <!-- Moment js -->
    <script src="{{ asset('dashboard/assets/plugins/raphael/raphael.min.js') }}"></script>
   <!-- Internal Data tables -->
   <script src="{{ asset('dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>

    <script src="{{ asset('dashboard/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/js/form-elements.js')}}"></script>

    <!--Internal  Datatable js -->
    <script src="{{ asset('dashboard/assets/js/table-data.js')}}"></script>
    <!--- Custom js --->
    <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('dashboard/assets/switcher/js/switcher.js') }}"></script>  
    
    @stack('scripts')     
</body>
</html>
