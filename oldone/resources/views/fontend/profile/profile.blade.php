@extends('fontend.meta')

@section('content')


		<section class="cover-sec">
			{{-- <img src="{{ url('images/cover-img.jpg')}}" alt=""> --}}
			<img src="{{ url('public/user')}}/{{ Auth::user()->cover_avatar }}" style="height:250px;" alt="">
		</section>


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="{{ url('public/user')}}/{{ Auth::user()->avatar }}" alt="">
											{{-- <img src="{{ url('images/user-pro-img.png')}}" alt=""> --}}
										</div><!--user-pro-img end-->
										<div class="user_pro_status">
											<ul class="flw-hr">
												<li><a href="#" title="" class="flww"><i class="la la-plus"></i> Follow </a></li>
												<li><a href="#" title="" class="hre">Hire</a></li>
											</ul>
											<ul class="flw-status">
												<li>
													<span>Following</span>
													<b>34</b>
												</li>
												<li>
													<span>Followers</span>
													<b>155</b>
												</li>
											</ul>
										</div><!--user_pro_status end-->
										<ul class="social_links">
										@if (Auth::user()==true)
										<li><a class="btn btn-outline-primary" data-toggle="modal" data-target="#website"> Add Website </a></li>
										@endif

    @php
        $websites = DB::table('websites')->orderBy('id', 'desc')->get();
        $socials  = DB::table('socials')->orderBy('id', 'desc')->get();
        $covers   = DB::table('covers')->orderBy('id', 'desc')->get();
    @endphp

										@foreach ($websites as $websitese)
										
											<li><a href="https://{{ $websitese->user_website_link }}" title=""><i class="la la-globe"></i> {{ $websitese->user_website_name }}</a></li>

		                                @endforeach
											<li>
										@if (Auth::user()==true)
										<a class="btn btn-outline-primary" data-toggle="modal" data-target="#social"> Add Social </a>
										@endif
											</li>
@foreach ($socials as $socials)
	
											<li><a href="https://{{ $socials->user_social_link }}" title="{{ $socials->user_social_name }}"> {{ $socials->user_social_name }} </a></li>
@endforeach
										</ul>
									</div><!--user_profile end-->
									{{-- <div class="suggestions full-width">
										<div class="sd-title">
											<h3>Suggestions</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
										<div class="suggestions-list">
										
											<div class="suggestion-usd">
												<img src="images/resources/s6.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div> --}}
									<!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3> {{ Auth::user()->name }} </h3>
										<div class="star-descp">
											<span>
											{{-- Graphic Designer at Self Employed --}}
											</span>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div><!--star-descp end-->
										<div class="tab-feed">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="images/ic1.png" alt="">
														<span>Feed</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="images/ic2.png" alt="">
														<span>Info</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="images/ic3.png" alt="">
														<span>Portfolio</span>
													</a>
												</li>
												<li>
													<a href="{{ url('profile/edit/general') }}/{{ Auth::user()->id }}" title="Settings">
														<span>Settings</span>
													</a>
												</li>
											</ul>
										</div><!-- tab-feed end-->

									</div><!--user-tab-sec end-->
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
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
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Senior Wordpress Developer</h3>
													<ul class="job-dt">
														<li><a href="#" title="">Full Time</a></li>
														<li><span>$30 / hr</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
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
															<a href="#"><i class="fas fa-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
													</ul>
													<a href="#"><i class="fas fa-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->

											<div class="process-comm">
												<div class="spinner">
													<div class="bounce1"></div>
													<div class="bounce2"></div>
													<div class="bounce3"></div>
												</div>
											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
										
											<ul class="bk-links">
																								
										@if (Auth::user())
										<h3>Overview</h3><li><a class="btn btn-outline-primary" data-toggle="modal" data-target="#coverletter"> Cover Letter </a> </li>
										@endif
												</ul>
												@foreach ($covers as $cover)
													
											
											<p> <h3> {{ $cover->cover_header }}</h3> </p>
											
											<p> 
											
											{{ $cover->cover_body }}
												 </p>
											@endforeach
										</div><!--user-profile-ov end-->
										
										
										<div class="user-profile-ov st2">
											<h3>Experience</h3>
											<h4>Web designer</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
											<h4>UI / UX Designer</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>
											<h4>PHP developer</h4>
											<p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Education</h3>
											<h4>Master of Computer Science</h4>
											<span>2015 - 2018</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Location</h3>
											<h4>India</h4>
											<p>151/4 BT Chownk, Delhi </p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Skills</h3>
											<ul>
												<li><a href="#" title="">HTML</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">CSS</a></li>
												<li><a href="#" title="">Javascript</a></li>
												<li><a href="#" title="">Wordpress</a></li>
												<li><a href="#" title="">Photoshop</a></li>
												<li><a href="#" title="">Illustrator</a></li>
												<li><a href="#" title="">Corel Draw</a></li>
											</ul>
										</div><!--user-profile-ov end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Portfolio</h3>
											<div class="gallery_pf">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img1.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img2.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img3.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img4.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img5.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img6.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img7.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img8.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img9.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img10.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
												</div>
											</div><!--gallery_pf end-->
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="#" data-target="#avatar_up" data-toggle="modal" title="">Upload DP</a>
										<a href="#" data-target="#cover_avatar_up" data-toggle="modal" title="">Upload Cover </a>
										
										{{-- <a href="#" title=""><i class="fa fa-envelope"></i> Message</a> --}}
									</div>
									<div class="widget widget-portfolio">
										<div class="wd-heady">
											<h3>Portfolio</h3>
											<img src="images/photo-icon.png" alt="">
										</div>
										<div class="pf-gallery">
											<ul>
												<li><a href="#" title=""><img src="images/resources/pf-gallery1.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery2.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery3.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery4.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery5.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery6.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery7.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery8.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery9.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery10.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery11.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery12.png" alt=""></a></li>
											</ul>
										</div><!--pf-gallery end-->
									</div><!--widget-portfolio end-->
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>




<!-- Modal -->
{{-- <div class="modal fade" id="avatar_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="{{ url('update_ava') }}" method="post" enctype="multipart/form-data">
	@csrf
    <div class="container">
    <input type="file" class="form-control-file" name="avatar">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div> --}}



<!-- Modal -->
{{-- <div class="modal fade" id="cover_avatar_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Cover Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="{{ url('cover_avatar') }}" method="post" enctype="multipart/form-data">
	@csrf
    <div class="container">
    <input type="file" class="form-control-file" name="cover_avatar">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div> --}}




{{-- <!-- Modal -->
<div class="modal fade" id="website" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Website</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form method="post" action="{{ url('user-website') }}">
	  @csrf
      <div class="modal-body">
        
		<input type="text" name="user_website_name" placeholder="Website Name" class="form-control"><br/>>
		<p></p>
		<input type="text" name="user_website_link" placeholder="Website Link" class="form-control">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="social" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your Social</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="{{url('social')}}" method="post">
	  @csrf
      <div class="modal-body">
        
		<input type="text" name="user_social_name" placeholder="Website Name" class="form-control">
		<input type="text" name="user_social_link" placeholder="Website Link" class="form-control">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div> --}}


<!-- Modal -->
{{-- <div class="modal fade" id="coverletter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Cover Letter</h5>
     
      </div>
	  <form>
      <div class="modal-body">
       <form action="{{ url('cover') }}" method="post">
	   @csrf
	   <div class="container py-3">
	       
    <div class="form-group">
    <input type="text" name="cover_header" class="form-control" placeholder="Cover Title">
  </div>
  <div class="form-group">
     <textarea placeholder="Cover Body" name="cover_body" class="form-control"></textarea>
  </div>
   
  
    </div>
<button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>

      </div> --}}
     
	  {{-- </form> --}}
    </div>
  </div>
</div>
@endsection