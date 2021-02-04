<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            @if(Auth::user()->profile_photo_path)
            <div class="sidenav-header-inner text-center"><img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="person" class="img-fluid rounded-circle">
                @endif
                @auth
                <h2 class="h5">{{ Auth::user()->name }}</h2>
                @endauth
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">

                <li><a href="{{ route('admin_home') }}" > <img src="{{asset('assets/admin/images')}}/home.png" height="23">  Home </a></li>
                <li><a href="{{ route('admin_menu') }}" > <img src="{{asset('assets/admin/images')}}/menu.png" height="23">  Menu      </a></li>
                <li><a href="{{ route('admin_contents')}}" ><img src="{{asset('assets/admin/images')}}/content.png" height="23"> Contents  </a></li>

                <li><a href="{{ route('admin_setting')}}" ><img src="{{asset('assets/admin/images')}}/setting.png" height="25"> Settings  </a></li>
                <li><a href="{{ route('admin_message')}}" ><img src="{{asset('assets/admin/images')}}/message.png" height="25"> Messages  </a></li>

                <li><a href="{{ route('admin_payments')}}"> <img src="{{asset('assets/img')}}/pay.png" height="25">Ödemeler                </a></li>
                <li><a href="{{ route('admin_review')}}"> <img src="{{asset('assets/img')}}/comment.png" height="25">Yorumlar            </a></li>
                <li><a href="{{ route('admin_requestmng')}}"> <img src="{{asset('assets/img')}}/request.png" height="25">Talepler                 </a></li>
                <li><a href="{{ route('admin_users') }}"><img src="{{asset('assets/admin/images')}}/login.png" height="23">Users</a></li>
                <li> <a href="{{ route('admin_faq')}}"> <img src="{{asset('assets/img')}}/faq.png" height="25">FAQ</a></li>
            </ul>
        </div>

    </div>
</nav>
