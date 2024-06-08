@push('style')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

@endpush

<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    @php
                    $user = auth('guru')->user();
                    $userImage = $user->foto ? url('system/public/' . $user->foto) : url('public/images/profile.png');
                    @endphp
                    <img src="{{ $userImage }}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        {{ $user->nama }} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-114px, 70px, 0px);" x-placement="bottom-end">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0" hidden >Welcome !</h6>
                </div>
        
                <!-- item-->
                <a href="{{ url('guru/profile') }}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-outline"></i>
                    <span>Profile</span>
                </a>
        
             
               
        
                <div class="dropdown-divider"></div>
        
                <!-- item-->
             
                <form action="{{ url('logout') }}" method="POST" style="display: none;" id="logout-form">
                    @csrf
                </form>
                <a class="dropdown-item notify-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout-variant"></i>
                    <span> Log Out</span>
                </a>
            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="#" class="logo text-center logo-dark">
            <span class="logo-lg">
                
                <img src="{{url('public/images/logo.png')}}" alt="" height="100">
               
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-lg-text-dark">S</span> -->
                <img src="{{url('public/images/logo.png')}}" alt="" height="50">
            </span>
        </a>

        <a href="index.html" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="{{url('public/template/admin')}}/assets/images/logo-light.png" alt="" height="26">
                <!-- <span class="logo-lg-text-light">Simple</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-lg-text-light">S</span> -->
                <img src="{{url('public/template/admin')}}/assets/images/logo-sm.png" alt="" height="22">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>

        
    </ul>
</div>
@push('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush