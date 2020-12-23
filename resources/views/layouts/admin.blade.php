<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    @yield('css')
    @yield('javascript')

</head>
<body>

@include('admin._navbar')

<div class="page">
    @include('admin._header')

   @yield('content')
 @include('admin._footer')

</div>
<!-- JavaScript files-->
<script src="{{ asset('assets') }}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/admin/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="{{ asset('assets') }}/admin/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('assets') }}/admin/js/charts-home.js"></script>
<!-- Main File-->
<script src="{{ asset('assets') }}/admin/js/front.js"></script>

@yield('footer')

</body>
</html>
