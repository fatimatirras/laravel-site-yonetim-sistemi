<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="{{ asset('assets') }}/admin/img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>

                <div class="info">
                    @auth
                        <a  class="d-block">{{ Auth::user()->name }}</a>

                    @endauth

                </div>

            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="{{ route('admin_login') }}"><img src="{{asset('assets/admin/images')}}/login.png" height="23">  Giriş Sayfası </a></li>
                <li><a href="{{ route('admin_home') }}" > <img src="{{asset('assets/admin/images')}}/home.png" height="23">  Home </a></li>
                <li><a href="{{ route('admin_menu') }}" > <img src="{{asset('assets/admin/images')}}/menu.png" height="23">  Menu      </a></li>
                <li><a href="{{ route('admin_hotels')}}" ><img src="{{asset('assets/admin/images')}}/hotel.png" height="23"> Hotel  </a></li>

                <li><a href="{{ route('admin_setting')}}" ><img src="{{asset('assets/admin/images')}}/setting.png" height="23"> Settings  </a></li>

                <li><a href="forms.html"> <i class="icon-form"></i>Ödemeler                </a></li>
                <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts             </a></li>
                <li><a href="tables.html"> <i class="icon-grid"></i>Tables                    </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Örnek açılır menu </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Sayfa</a></li>
                        <li><a href="#">Sayfa</a></li>
                        <li><a href="#">Sayfa</a></li>
                    </ul>
                </li>
                <li> <a href="#"> <i class="icon-mail"></i>Mesajlar
                        <div class="badge badge-warning">6 yeni</div></a></li>
            </ul>
        </div>

    </div>
</nav>
