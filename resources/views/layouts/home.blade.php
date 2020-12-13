<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> @yield('title') </title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets') }}/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="{{ asset('assets') }}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/animate.css"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap-progressbar-3.3.4.css"/>
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets') }}/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('assets') }}/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


@include('home._header')

<div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
        @include('home._login')
        @include('home._signup')

    </div>
</div>

<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">

                @include('home._navheader')

                @include('home._navcoll')

        </div>
    </nav>
</section>


@include('home._slider')
@include('home._feature')
@include('home._about')
@include('home._counter')
@include('home._service')
@include('home._table')
@include('home._Testimonial')
@include('home._Clients')
@include('home._latestNews')
@include('home._subscribeUs')

@section('content')
    içerik alan
@show


@include('home._footer')

</body>
</html>

