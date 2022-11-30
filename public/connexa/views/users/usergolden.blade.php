<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Theme Region">
<meta name="description" content="">
<title>Hr Lagends</title>
	<link rel="stylesheet" href="new/css/bootstrap.min.css">
	<link rel="stylesheet" href="new/css/font-awesome.min.css">
	<link rel="stylesheet" href="new/css/icofont.css">
	<link rel="stylesheet" href="new/css/owl.carousel.css">
	<link rel="stylesheet" href="new/css/slidr.css">
	<link rel="stylesheet" href="new/css/main.css">
	<link id="preset" rel="stylesheet" href="new/css/presets/preset1.css">
	<link rel="stylesheet" href="new/css/responsive.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="new/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="new/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="new/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="new/images/ico/apple-touch-icon-72-precomposed.html">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="new/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    <h1>Welcome To Golden User Dashbord</h1><br><br><br>
	<h2> User Name : <b>{{Auth::user()->profiles->first_name}} {{Auth::user()->profiles->last_name}}</b></h2>
    <br><br>
	<h3> User Address : <b>{{Auth::user()->profiles->country->country_name}} {{Auth::user()->profiles->city->city_name}}</h3>
	<br><br>
	
    <br><br>
	 <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
</body>
</html>