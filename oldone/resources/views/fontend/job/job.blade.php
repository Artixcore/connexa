@extends('fontend.meta')

@section('content')

		<div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="Search keywords">
						<button type="submit">Search</button>
					</form>
				</div><!--search-box end-->
			</div>
		</div><!--search-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
						
                        @include('fontend.job.right')
							
                            <div class="col-lg-6">
							
                         

                                   	<div class="main-ws-sec">
									<div class="posts-section">
									@foreach ($jobs as $job)
                             
                                    	<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="images/resources/us-pic.png" alt="">
													<div class="usy-name">
														{{-- <h3>{{ $job->user->name }}</h3> --}}
														<span><img src="images/clock.png" alt="">{{ $job->created_at->diffForHumans() }}</span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Unsaved</a></li>
														<li><a href="#" title="">Unbid</a></li>
														<li><a href="#" title="">Close</a></li>
														<li><a href="#" title="">Hide</a></li>
													</ul>
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													{{-- <li><img src="images/icon8.png" alt=""><span>{{ $jobs->job_company }}</span></li> --}}
													{{-- <li><img src="images/icon9.png" alt=""><span>India</span></li> --}}
												</ul>
												<ul class="bk-links">
													<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
													<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
												</ul>
											</div>
											<div class="job_descp">
												<h3>{{ $job->job_title }}</h3>
												<ul class="job-dt">
													<li><a href="#" title="">{{ $job->job_type }}</a></li>
													<li><span>{{ $job->job_salary }}</span></li>
												</ul>
												<p>{{ $job->job_desc }}<a href="#" title="">view more</a></p>
												<ul class="skill-tags">
													<li><a href="#" title="">HTML</a></li>
													<li><a href="#" title="">PHP</a></li>
													<li><a href="#" title="">CSS</a></li>
													<li><a href="#" title="">Javascript</a></li>
													<li><a href="#" title="">Wordpress</a></li> 	
												</ul>
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li>
													<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
												</ul>
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
										</div><!--post-bar end-->
								      
                                    @endforeach

									</div><!--posts-section end-->
								
                                </div><!--main-ws-sec end-->
							</div>
                        @include('fontend.job.left')						

						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

  @endsection