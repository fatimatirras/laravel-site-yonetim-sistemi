@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

<!-- Top bar-->
<div class="top-bar">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
                <p>Contact us on +420 777 555 333 or hello@universal.com.</p>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-md-end justify-content-between">
                    <ul class="list-inline contact-info d-block d-md-none">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                    <div class="info">
                        @auth
                            <a href="{{route('userprofile')}}" class="d-block">{{ Auth::user()->name }}</a>
                        @endauth
                         @guest

                    <div class="login"><a href="/login"  class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="/register" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
                            @endguest
                    </div>

                    <ul class="social-custom list-inline">

                        @if ($setting->facebook != null)<li class="list-inline-item"><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                        @if ($setting->twitter != null)<li class="list-inline-item"><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                        @if ($setting->instagram != null)<li class="list-inline-item"><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif

                            <!--
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top bar end-->
