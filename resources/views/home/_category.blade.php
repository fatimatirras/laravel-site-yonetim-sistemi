<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<!-- LOGO -->
<!-- TEXT BASED LOGO -->
<a class="navbar-brand" href="{{ asset('assets') }}/index.html">Intensely</a>
<!-- IMG BASED LOGO  -->
<!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
</div>
<div id="navbar" class="navbar-collapse collapse">
    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
        <li class="active"><a href="{{ asset('assets') }}/index.html">Home</a></li>
        <li><a href="{{ asset('assets') }}/feature.html">Feature</a></li>
        <li><a href="{{ asset('assets') }}/service.html">Service</a></li>
        <li><a href="{{ asset('assets') }}/portfolio.html">Portfolio</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ asset('assets') }}/blog-archive.html">Blog Archive</a></li>
                <li><a href="{{ asset('assets') }}/blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
                <li><a href="{{ asset('assets') }}/blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
                <li><a href="{{ asset('assets') }}/blog-single-with-out-sidebar.html">Blog Single with out Sidebar</a></li>
            </ul>
        </li>
        <li><a href="{{ asset('assets') }}/404.html">404 Page</a></li>
        <li><a href="{{ asset('assets') }}/contact.html">Contact</a></li>
    </ul>
</div><!--/.nav-collapse -->
<a href="#" id="search-icon">
    <i class="fa fa-search">
    </i>
</a>

</section>
