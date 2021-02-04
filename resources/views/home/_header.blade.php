<!-- Navbar Start-->


<header class="nav-holder make-sticky">
    <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="{{route('home')}}" class="navbar-brand home"><img src="{{ asset('assets') }}/img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="{{ asset('assets') }}/img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown active"><a href="{{route('request')}}"  >Talep Et<b class="caret"></b></a>

                    </li>
                    <li class="nav-item dropdown"><a href="{{route('home')}}"  >Home <b class="caret"></b></a>

                    </li>
                     @include('home._menu')
                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">KURUMSAL <b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-lg-2"><img src="{{ asset('assets') }}/img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                                    <div class="col-lg-3 col-md-6">
                                        <a href="{{route('aboutus')}}" class="nav-link"><h5>About Us</h5></a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <a href="{{route('references')}}" class="nav-link"><h5>References</h5></a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <a href="{{route('faq')}}" class="nav-link"><h5>FAQ</h5></a>
                                    </div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown"><a href="{{route('contact')}}"  >Contact <b class="caret"></b></a>

                    </li>
                    <!-- ========== Contact dropdown end ==================-->
                </ul>
            </div>
            <div id="search" class="collapse clearfix">
                <form role="search" class="navbar-form">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- Navbar End-->
