<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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



    <!--- Animations css --->
    <link href="{{ asset('dashboard/assets/css/animate.css') }}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{ asset('dashboard/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/switcher/demo.css') }}" rel="stylesheet">
    <!-- // css -->
    <!-- Scripts -->
    <!--- JQuery min js --->
	<script src="{{ asset('dashboard/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!--- Bootstrap Bundle js --->
    <script src="{{ asset('dashboard/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--- Ionicons js --->
    <script src="{{ asset('dashboard/assets/plugins/ionicons/ionicons.js') }}"></script>

    <!--- Moment js --->
    <script src="{{ asset('dashboard/assets/plugins/moment/moment.js') }}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!--- Eva-icons js --->
    <script src="{{ asset('dashboard/assets/plugins/eva-icons/eva-icons.min.js') }}"></script>

    <!--- Rating js --->
    <script src="{{ asset('dashboard/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/rating/jquery.barrating.js') }}"></script>

    <!--- JQuery sparkline js --->
    <script src="{{ asset('dashboard/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>



    <!--- Custom js --->
    <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('dashboard/assets/switcher/js/switcher.js') }}"></script>
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    
    @yield('css')
</head>



<body class="">
    <div class="error-page1 main-body bg-light text-dark">  
        @yield('content')
    </div>   
</body>
@stack('scripts')
</html>
