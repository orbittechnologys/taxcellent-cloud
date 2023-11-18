




<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="{{ url('/') }}"><img src="{{ asset('template/images/Taxcellent_Logo/Taxcellent-logo1.png') }}" class="main-logo" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="{{ url('/') }}"><img src="{{ asset('template/images/Taxcellent_Logo/AppIcons/playstore.png') }}" class="logo-icon" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class="">
                        <img alt="user-img" class="avatar avatar-xl brround" src="{{ asset('template/images/Taxcellent_Logo/AppIcons/playstore.png') }}"><span class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="fw-semibold mt-3 mb-0">{{ Auth::user()->firstName}}</h4>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                <li class="side-item side-item-category">Main</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('home') }}"><i class="si si-grid side-menu__icon"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="side-item side-item-category">User Profile</li>
                
                <!-- <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="fa fa-user-circle side-menu__icon"></i><span class="side-menu__label">Profile</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="{{ route('myprofile') }}">My Profile</a></li>
                        <li><a class="slide-item" href="{{ route('editprofile') }}">Edit Profile</a></li>
                    </ul>
                </li> -->
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('myprofile') }}"><i class="fa fa-user-circle side-menu__icon"></i><span class="side-menu__label">My Profile</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('mysubscription') }}"><i class="far fa-credit-card side-menu__icon"></i><span class="side-menu__label">My Subscriptions</span></a>
                </li>
                <li class="side-item side-item-category">Subscriptions</li>
                @php
                $orderDetails= DB::table('order_details')->select('service_cat_id')
                ->groupBy('service_cat_id')
                ->where('user_id','=',Auth::user()->id)->get();

                $orderDetailsCategory= DB::table('order_details')
                ->select('service_id')
                ->groupBy('service_id')
                ->where('user_id','=',Auth::user()->id)->get();
                // $serviceDetails=DB::table('service_category')->where("id", $serviceOrder->service_cat_id)->first();
                  
                  
                @endphp
                {{-- @if($serviceDetails->id=='1') --}}
                @if(count($orderDetails)>0)
                        @foreach($orderDetails as $row)
                <li class="slide">
                    @php
                    $serviceDetails=DB::table('service_category')->where("id", $row->service_cat_id)->first();
                   @endphp
                    <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="si si-badge side-menu__icon"></i>
                        <span class="side-menu__label">My {{$serviceDetails->cat_name}}</span>
                        <i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @if(count($orderDetailsCategory)>0)
                        @foreach($orderDetailsCategory as $row1)
                        @php
                        $subCategory=DB::table('service')->where("id", $row1->service_id)->first();
                        @endphp
                         
                         @if($row->service_cat_id== $subCategory->service_cat_id)
                        <li><a class="slide-item" href="{{ route('purchase.privateLimitedCompany',[$row->service_cat_id,$row1->service_id]) }}">{{$subCategory->service_name}}</a></li>
                         @endif
                        @endforeach
                        @endif
                    </ul> 
                </li>
                @endforeach
                @endif
               
                
            </ul>
        </div>
    </aside>
    <!-- main-sidebar -->