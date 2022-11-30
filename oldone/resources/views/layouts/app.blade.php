<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Connexa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="de scription" content="" />
	<meta name="keywords" content="" />

	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ url('css/icofont.css')}}">
	<link rel="stylesheet" href="{{ url('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ url('css/slidr.css')}}">
	<link rel="stylesheet" href="{{ url('css/main.css')}}">
	<link id="preset" rel="stylesheet" href="{{ url('css/presets/preset1.css')}}">
	<link rel="stylesheet" href="{{ url('css/responsive.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

</head>
<body style="background-color:#fff">
<div id="main" style="margin-top:20px ; background-color:#fff" class="clearfix home-default">
<div class="text-right" >
    <div class="col px-md-5">
        <div class="col px-md-5"><img src="images/connexa.png"  class="col-md-2 pull-left" alt="left"></div></div>
	<div class="col px-md-5">	<div class="col px-md-5">
		<div class="col px-md-5"><a href="{{ route('login') }}"><button class="btn btn-info btn-lg ">Sign In</button></a>
		<a href="{{ route('register') }}"><button class="btn btn-info btn-lg ">Sign Up</button></a></div></div><div>
</div>
<br>
<div class="container">

@yield('content')

</div>
<br>
</footer> 
<script src="{{ url('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ url('js/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ url('js/modernizr.min.js')}}" type="text/javascript"></script>
<script src="{{ url('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="{{ url('js/gmaps.min.js')}}" type="text/javascript"></script>
<script src="{{ url('js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{ url('js/scrollup.min.js')}}" type="text/javascript"></script>
<script src="{{ url('js/price-range.js')}}" type="text/javascript"></script>
<script src="{{ url('js/jquery.countdown.js')}}" type="text/javascript"></script>
<script src="{{ url('js/switcher.js')}}" type="text/javascript"></script>
<script src="{{ url('js/custom.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*wel Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

	</script>
<script src="rocket-loader.min.js"></script>
</body>
</html>