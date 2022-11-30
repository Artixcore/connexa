
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Connexa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/flatpickr.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/line-awesome-font-awesome.min.css')}}">
	<link href="{{ url('connexa/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('connexa/css/responsive.css')}}">
</head>


<body oncontextmenu="return false;">	

	<div class="wrapper"> 
	
<br><br><br><br>

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">											
						<div class="col-lg-6">
							<div class="login-sec">			
							<img src="images/connexa.png" class="col-md-6 img-fluid pull-left" alt="HR Logo">
							<br><br><br><br><br>
								<div class="sign_in_sec current" id="tab-1">									
									<h3>Sign in</h3>
									<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                        @csrf
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
												<input id="email" type="email" name="email" placeholder="{{ $errors->first('email') ? 'Email & Paasword Not Exist' : 'Email Address' }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
												<i class="la la-user"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
												<input id="password" type="password" name="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required>
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
														<label for="remember">
															<span></span>
														</label>
														<small>Remember me</small>
													</div>
													<a  href="{{ route('password.request') }}" title="">Forgot Password?</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" class="btn btn-primary" >Sign in</button>
											</div>
										</div> 
									</form>
									<div class="login-resources">
										<h4>Login Via Social Account</h4>
										<ul>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
											<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
										</ul>
										<br><br><br><br><br><br><br><br><br>
									</div>
								</div>	
							</div>
						</div>
					</div>		
				</div>
			</div>
			
			{{-- @include('footer') --}}
		</div>
   </div><!--theme-layout end-->

<script type="text/javascript" src="{{ url('connexa/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/popper.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/flatpickr.min.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ url('connexa/js/script.js')}}"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/company-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Oct 2020 13:07:22 GMT -->
</html>




