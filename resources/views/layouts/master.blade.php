<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Taxcellent') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('template/scriptsmin/scripts.min3860.js?v=1') }}"></script>
    <!-- <script data-cfasync="false" src="{{ asset('template/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('template/js/webslidemenu3860.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/sliderscreenshot7b30.js') }}"></script>
    <script src="{{ asset('template/js/custom8b84.js') }}"></script>
    <script src="{{ asset('template/js/jquery.timeselector3860.js') }}"></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

    <!-- css -->
    <link href="{{ asset('template/cssmin/webslidemenu85ac.css?v=2.20.5') }}" rel="stylesheet" async type="text/css" />
    <link href="{{ asset('template/cssmin/landing-slider07b2.css') }}" rel="stylesheet" async type="text/css" />
    <link href="{{ asset('template/cssmin/style.minf9e3.css?v=1.1') }}" rel="stylesheet" async type="text/css" />
    <link href="{{ asset('template/css/style.min0ac5.css?v=15.10.8') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('template/cssmin/landing-slider07b2.css?v=90') }}" rel="stylesheet" async type="text/css" />
    <style>
        .plan-discription ul {
            list-style: disc !important;
        }
    </style>
    @yield('css')
</head>



<body class="wsmenucontainer">
    <div id="pageloader">
        <img src="{{ asset('template/images/loaderd41d.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
    </div>

    @yield('content')


    <script>
        function showFrontendAlert(type, message) {
            if (type == 'danger') {
                type = 'error';
            }
            swal({
                position: 'top-end',
                type: type,
                title: message,
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>
    @foreach (session('flash_notification', collect())->toArray() as $message)
    <script>
        showFrontendAlert("{{ $message['level '] }}", "{{ $message['message '] }}");
    </script>
    @endforeach
    <script>
        function buyNow() {
            var login_or_not = "{{json_encode(Auth::check())}}";
            console.log(login_or_not);

            var postData = {
                "serviceId": $("input[id=service_id]").val(),
                "sub_cat_id": $("input[id=sub_cat_id]").val(),
                "servicePrice": $("input[id=serPrice]").val(),
                "sub_pack_cat_id": '0'
            };

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },

                type: 'POST',
                url: "{{ route('cart.addToCart') }}",
                data: postData,
                success: function() {
                    if (login_or_not != 'false') {
                        window.location.replace("{{ route('cart.mycart') }}");
                    } else {
                        <?php session()->put('redirectToCart', 'yes'); ?>
                        window.location.replace("{{ route('login') }}");
                    }
                }
            });
        }

        function removeFromCart(key) {
            $.post("{{ route('cart.removeFromCart') }}", {
                    _token: '{{ csrf_token() }}',
                    key: key
                },
                function(data) {
                    $('#cart-summary').html(data);
                });
        }
    </script>
    @stack('scripts')
</body>

</html>