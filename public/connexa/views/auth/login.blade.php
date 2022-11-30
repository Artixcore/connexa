
@extends('layouts.main1')		
@section('content')

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
			
			@include('footer')
		</div>
@endsection





