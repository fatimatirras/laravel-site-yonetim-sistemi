<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
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
</head>
<body>
<div class="page login-page">
    <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
            <div class="form-inner">
                <div class="logo text-uppercase"><span>Bootstrap</span><strong class="text-primary">Dashboard</strong></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
@include('home.message')
                <form action="{{ route('admin_logincheck') }}" method ="post">
                    @csrf
                    <div class="form-group-material">
                        <input id="email" type="email" name="email" required data-msg="Please enter your username" class="input-material">
                        <label for="email" class="label-material">Username</label>
                    </div>
                    <div class="form-group-material">
                        <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                        <label for="password" class="label-material">Password</label>
                    </div>
                    <div class="form-group text-center"><a id="login" href="{{route('admin_home')}}" class="btn btn-primary"><button type="submit" >Login</button></a>
                        <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                    </div>
                </form><a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small><a href="/register" class="signup">Signup</a>
            </div>
            <div class="copyrights text-center">
                <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="{{ asset('assets') }}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/admin/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="{{ asset('assets') }}/admin/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Main File-->
<script src="{{ asset('assets') }}/admin/js/front.js"></script>
</body>
</html>
