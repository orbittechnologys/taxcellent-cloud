<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="index.html"><img src="{{ asset('template/images/Taxcellent_Logo/AppIcons/playstore.png') }}" class="main-logo" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="{{ asset('template/images/Taxcellent_Logo/AppIcons/playstore.png') }}" class="logo-icon" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class="">
                        <img alt="user-img" class="avatar avatar-xl brround" src="{{ asset('template/images/Taxcellent_Logo/AppIcons/playstore.png') }}"><span class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="fw-semibold mt-3 mb-0">{{Auth::guard('admin')->user()->name}}</h4>
                        <span class="mb-0 text-muted"> @php $adminuser = Auth::guard('admin')->user()->is_super @endphp
                                        @if( $adminuser == 1 )
                                            Super Admin
                                        @else
                                        Admin
                                        @endif</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                <li class="side-item side-item-category">Main</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.home') }}"><i class="si si-grid side-menu__icon"></i><span class="side-menu__label">Dashboard</span><span class="badge bg-success text-light" id="bg-side-text">1</span></a>
                </li>
                <li class="side-item side-item-category">Users</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.uersProfile') }}"><i class="si si-people side-menu__icon"></i><span class="side-menu__label">User Profile</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.uersSubscription') }}"><i class="si si-user-following side-menu__icon"></i><span class="side-menu__label">User Subscription</span></a>
                </li>
                <li class="side-item side-item-category">Service Applications</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.serviceCategory') }}"><i class="si si-badge side-menu__icon"></i><span class="side-menu__label">Service Category</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.service') }}"><i class="si si-badge side-menu__icon"></i><span class="side-menu__label">Service</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.documentList') }}"><i class="si si-docs side-menu__icon"></i><span class="side-menu__label">Documents List</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.packages') }}"><i class="si si-badge side-menu__icon"></i><span class="side-menu__label">Packages</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.businessService') }}"><i class="si si-badge side-menu__icon"></i><span class="side-menu__label">Business Registration</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.legalService') }}"><i class="fa fa-balance-scale side-menu__icon"></i><span class="side-menu__label"> legal </span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.uersAccountingService') }}"><i class="fa fa-calculator side-menu__icon"></i><span class="side-menu__label">Accounting and Tax</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.uersCompliancesService') }}"><i class="typcn typcn-messages side-menu__icon"></i><span class="side-menu__label"> Compliances </span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.uersGSTService') }}"><i class="fas fa-chart-line side-menu__icon"></i><span class="side-menu__label"> GST</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.uersTaxService') }}"><i class="fas fa-file-alt side-menu__icon"></i><span class="side-menu__label"> Income Tax Return </span></a>
                </li>
                <li class="side-item side-item-category">Payments</li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="fas fa-money-bill side-menu__icon"></i><span class="side-menu__label">Payment</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="{{ route('admin.paymentStatus') }}">Payment Status</a></li>
                        <li><a class="slide-item" href="{{ route('admin.paymentSummary') }}">Payment Summary</a></li>
                    </ul>
                </li>
                <li class="side-item side-item-category"></li>
            </ul>
        </div>
    </aside>
    <!-- main-sidebar -->