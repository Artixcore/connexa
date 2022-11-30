
<!DOCTYPE html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/line-awesome-font-awesome.min.css')}}">
	<link href="{{ url('vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/responsive.css')}}">
</head>

<body>	

	<div class="wrapper">

@include('fontend.nav')

 @yield('content')



	</div><!--theme-layout end-->



<script type="text/javascript" src="{{ url('connexa/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/popper.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/script.js')}}"></script>

</body>

<!-- Mirrored from gambolthemes.net/workwise-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 07:09:42 GMT -->
</html>