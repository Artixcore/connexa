<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
	<title>Connexa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="new/css/bootstrap.min.css">
	<link rel="stylesheet" href="new/css/font-awesome.min.css">
	<link rel="stylesheet" href="new/css/icofont.css">
	<link rel="stylesheet" href="new/css/owl.carousel.css">
	<link rel="stylesheet" href="new/css/slidr.css">
	<link rel="stylesheet" href="new/css/main.css">
	<link id="preset" rel="stylesheet" href="new/css/presets/preset1.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="new/images/ico/favicon.ico">

</head>
<body style="background-color:#fff">
<div id="main" style="margin-top:20px ; background-color:#fff" class="clearfix home-default">
<div class="text-right" >
    <div class="col px-md-5">
        <div class="col px-md-5"><img src="{{ url('connexa/images/connexa.png')}}" class="col-md-2 pull-left" alt="left"></div></div>
	<div class="col px-md-5">	<div class="col px-md-5">
		<div class="col px-md-5"><a href="{{ route('login') }}"><button class="btn btn-info btn-lg ">Sign In</button></a>
		<a href="{{ route('register') }}"><button class="btn btn-info btn-lg ">Sign Up</button></a></div></div><div>
</div>
<br>
<div class="container">
<div class="banner-section text-center">	
<div class="banner-form">
<form action="#">
<div class="dropdown category-dropdown">
<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu category-change">
<li><a href="#">Person</a></li>
<li><a href="#">Job</a></li>
<li><a href="#">Training</a></li>
<li><a href="#">Event</a></li>
<li><a href="#">Company</a></li>
</ul>
</div>
<input type="text" class="form-control" placeholder="Type Your key word">
<button type="submit" class="btn btn-info pull-right btn-lg " value="Search">Search</button>
</form>
</div>
</div>

<div class="main-content">
<div class="row">
<div class="d-none d-md-block col-md-2 text-center">
<div class="advertisement">
</div>
</div>
<div class="col-md-8 text-center" style="background-color:#F0F0F0; margin-bottom:40px;border-radius:5px 5px 5px 5px">
         
	<ul class="category-list" style="margin-top:20px">
		{{-- <li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/7.png" alt="images" class="img-fluid"></div>
		<span class="text-info">Find Person</span><br>
		<span class="text-dark">({{ App\User::all()->count() }})</span>
		</a>
		</li> --}}
		<li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/12.png" alt="images" class="img-fluid"></div>
		<span class="category-title text-info">Search Job</span>
		<span class="text-dark"><a href="{{url('all-jobs')}}">({{ App\JobPost::all()->count() }})</a></span>
		</a>
		</li>
		{{-- <li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/9.png" alt="images" class="img-fluid"></div>
		<span class="category-title text-info">Attend Training</span>
		<span class="text-dark">(1298)</span>
		</a>
		</li> --}}
		<li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/3.png" alt="images" class="img-fluid"></div>
		<span class="category-title text-info"> Find Event </span>
		<span class="text-dark"><a href="#">({{ App\Event::all()->count() }})</a></span>
		</a>
		</li>
		<li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/5.png" alt="images" class="img-fluid"></div>
		<span class="category-title text-info">Find Trainer</span>
		<span class="text-dark">({{ App\Training::all()->count() }})</span>
		</a>
		</li>
		{{-- <li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/11.png" alt="images" class="img-fluid"></div>
		<span class="category-title text-info">Search Recruiter</span>
		<span class="text-dark">(212)</span>
		</a>
		</li> --}}

		{{-- <li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/10.png" alt="images" class="img-fluid"></div>
		<span class="category-title text-info">Meet Coach</span>
		<span class="text-dark">(124)</span>
		</a>
		</li> --}}
		<li class="category-item">
		<a href="#">
		<div class="category-icon"><img src="new/images/icon/8.png" alt="images" class="img-fluid"></div>
		<span class="category-title text-info">Freelancer</span>
		<span class="text-dark">({{ App\Freelancer::all()->count() }})</span>
		</a>
		</li>
		<br><br><br><br><br><br>
</ul>
</div>
</div>
  <br><br><br><br>
</div>
<footer id="footer" class="clearfix" style="background-color:#F0F0F0">
<div class="container">
<div class="row d-flex justify-content-center" style="margin-top:40px">
<div class=" col-sm-1.5 d-flex justify-content-center ">
	<a href="#" title="" class="text-dark">Help Center</a> 
</div>
<div class="col-sm-1 d-flex justify-content-center">
	<a href="#" title="" class="text-dark">About</a> 
</div>
<div class="col-sm-1.5 d-flex justify-content-center">
	<a href="#" title="" class="text-dark">Privacy Policy</a> 
</div>
<div class="col-sm-2 d-flex justify-content-center">
	<a href="#" title="" class="text-dark">Cookies Policy</a> 
</div>
<div class="col-sm d-flex justify-content-center">
	<a href="#" title="" class="text-dark">Career</a> 
</div>
<div class="col-sm d-flex justify-content-center">
	<a href="#" title="" class="text-dark">Forum</a> 
</div>
<div class="col-sm d-flex justify-content-center">
	<a href="#" title="" class="text-dark">Language</a>
</div>
<div class="col-sm-3 d-flex justify-content-center">
	<a href="#" title="" class="text-dark">Community Guidelines</a> 
</div>

</div>
</div>
<br>
</footer> 
<script src="new/js/jquery.min.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/popper.min.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/modernizr.min.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/bootstrap.min.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/gmaps.min.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/owl.carousel.min.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/scrollup.min.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/price-range.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/jquery.countdown.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/switcher.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script src="new/js/custom.js" type="c53e2a4027c3e1eade13ca6e-text/javascript"></script>
<script type="c53e2a4027c3e1eade13ca6e-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

	</script>
<script src="new/rocket-loader.min.js" data-cf-settings="c53e2a4027c3e1eade13ca6e-|49" defer=""></script>
</body>
</html>