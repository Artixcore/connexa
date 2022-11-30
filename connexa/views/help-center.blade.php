

@extends('layouts.main')
@section('content')

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<div class="filter-secs">
									<div class="filter-heading">
										<h3>Home</h3>
									</div><!--filter-heading end-->
									<div class="paddy help-paddy">
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<div class="dropdown">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Getting Started</a>
                                                   <div class="dropdown-menu">
                                                       <a href="#" class="dropdown-item top--1 ">Searching of Workwise</a>
                                                       <a href="#" class="dropdown-item">Email from Workwise</a>
                                                       <a href="#" class="dropdown-item">Managing Your Feed</a>
                                                       <a href="#" class="dropdown-item">Post a Job</a>
                                                       <a href="#" class="dropdown-item">Post a Project</a>
                                                   </div>
                                               </div>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<div class="dropdown">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Your Account</a>
                                                   <div class="dropdown-menu">
                                                       <a href="#" class="dropdown-item top--1 ">Account Access</a>
                                                       <a href="#" class="dropdown-item">Account Setting</a>
                                                       <a href="#" class="dropdown-item">Privacy</a>
                                                       <a href="#" class="dropdown-item">Notification</a>                                                     
                                                   </div>
                                               </div>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<div class="dropdown">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Build Your Profile</a>
                                                   <div class="dropdown-menu">
                                                       <a href="#" class="dropdown-item top--1 ">Build User Profile</a>
                                                       <a href="#" class="dropdown-item">Build Company Profile</a>                                                       
                                                   </div>
                                               </div>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">Work with Clients</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">Get Paid</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">Discovering Peoples</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl filter--tt2">
												<a href="#">Billiing & Payments</a>
											</div>
										</div>
										<div class="filter-dd">
											<div class="filter-ttl accountnone filter--tt2">
												<a href="#">Reset Your Account</a>
											</div>
										</div>
									</div>
								</div><!--filter-secs end-->
							</div>
							<div class="col-lg-9 col-md-12">
								<div class="helpforum">
			                     <div class="row">
			                     	<div class="col-lg-9 col-md-12">
			                     		<h3>Visit Our Help Forum</h3>
			                     		<p>View, ask, or answer questions about using LinkedIn. Our moderators and community can help!</p>
			                     	</div>
			                     	<div class="col-lg-3 col-md-12">
			                     		<a href="#">Visit Help Forum</a>
			                     	</div>
			                     </div>
								</div> 
								  <!-- end-helpforum -->
								  <div class="actions">
								  	<div class="actionstitle">
								  	<h3><img src="images/resources/icon1.png" alt="image"> Popular Actions</h3>
								  		<hr>
								  	</div>
								  		<div class="actionstext">
								  	<div class="row">
								  		<div class="col-md-6 col-sm-12">
								  			<a href="#">Change or add email address</a>
								  			<a href="#">Reset your password</a>
								  			<a href="#">Close your account</a>
								  		</div>
								  		<div class="col-md-6 col-sm-12">
								  			<a href="#">Manage emails you get from Workwise</a>
								  			<a href="#">Get Paid</a>
								  			<a href="#">Build Your Profiles</a>
								  		</div>
								  	</div>
								  	</div>
								  </div>
								  <div class="actions">
								  	<div class="actionstitle">
								  	<h3><img src="images/resources/icon2.png" alt="image"> Suggested for you</h3>
								  		<hr>
								  	</div>
								  		<div class="actionstext">
								  	<div class="row">
								  		<div class="col-12">
								  			<a href="#">Workwise Homepage - FAQ</a>
								  			<hr>
								  			<a href="#">Workwise Public Profile Visibility</a>
								  			<hr>
								  			<a href="#">Editing Your Profile</a>
								  			<hr>
								  			<a href="#">Merging or Closing Duplicate Accounts on LinkedIn</a>
								  			<hr>
								  		</div>
								  	</div>
								  	</div>
								  </div>
								  <!-- endactione -->
								  <div class="helpform">
								  			<img src="images/resources/formicon.png" alt="image">
								  			<h3>Help Forum</h3>
								  			<p>Have questions? LinkedIn knowledge you want<br> to share? Head over to the </p>
								  			<a href="#">Workwise Help Forum</a>
								  </div>
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price1" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="inp-field">
									<select>
										<option>Full Time</option>
										<option>Half time</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->


	</div><!--theme-layout end-->
	@endsection


