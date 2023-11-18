<!DOCTYPE html>
<html>
<head>
    <title>How To Integrate Razorpay Payment Gateway In Laravel - websolutionstuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            

            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
                {{$message}}

            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible" role="alert" style="margin-top:50px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
                <script type="text/javascript">
                    setTimeout(function() {
                       // window.location.href="mysubscription";
                    }, 2500);
                </script>
            @endif
            @php
                                        //print_r(Session::get('cart'));die;
                                        $total = 0;
                                        @endphp
            {!! Session::forget('success') !!}
            {{-- @if (is_array(Session::get('cart')) || is_object(Session::get('cart'))) --}}
            @foreach (Session::get('cart') as $key => $cartItem)
            @php
            $ServiceName = DB::table('service_applications')->find($cartItem['serviceId']);
            $SubCatName = DB::table('service')->find($cartItem['serviceId']);
            
            $mainPrice = ($cartItem['servicePrice']);
            
            $total = ($total + $mainPrice);
            @endphp

            @endforeach
            @php
            $totalAmt=(($total*100)+($total*18));
            @endphp
            {{-- @endif --}}
             @if(Session::get('payment_status')!='success')  
            <div class="alert alert-success" role="alert" style="margin-top:50px;">
              <h4 class="alert-heading" align="center">Please wait.......!</h4>
               <form action="payment" method="POST" align="center">                        
                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_test_pFbOCEkp9YnHup"
                                data-amount=<?php
                                echo round($totalAmt, 5, PHP_ROUND_HALF_DOWN);?>
                                
                                data-buttontext="Pay 100 INR"
                                data-name="Taxcellent India"
                                data-description="Payment"
                                data-image="https://i.ibb.co/8XpvJRW/Taxcellent-logo2.png"
                                data-prefill.name="name"
                                data-prefill.email="email"
                                data-theme.color="#ff7529">
                        </script>
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                      
                    </form>
            </div>
            @endif

            @php
            Session::forget('payment_status','');
            @endphp

           
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    $(".razorpay-payment-button").hide();
    $( ".razorpay-payment-button" ).trigger( "click" );
</script>


