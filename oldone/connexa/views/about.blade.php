@extends('layouts.main')
@section('content')
		<section class="banner">
			<div class="bannerimage">
			<img src="images/about.png" alt="image">
		</div>
			<div class="bennertext">
			<div class="innertitle">
				<h2>World's largest freelancing and job portal<br> 
                social networking marketplace.</h2>                
                <p>We connect over 3 Million employers and freelancers globally from over 237<br> countries, regions, and territories</p>
            </div>
            </div>
            <span class="banner-title">About us</span>
		</section>	
		<section class="Company-overview">
			<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<h2>
						Company Overview
					</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean felis massa, commodo sed fringilla id, dignissim ut eros. Aliquam at lacinia diam, eget scelerisque massa. Nunc ut porta ante. Praesent blandit, neque nec hendrerit luctus, sem urna imperdiet ligula, eu egestas purus massa dictum arcu. Integer cursus enim nec magna dapibus laoreet. Donec egestas fringilla risus quis volutpat. Aliquam semper massa ut sollicitudin consectetur. Suspendisse ac iaculis ligula. Duis ut velit id nisi vulputate dapibus.
					</p>
				</div>
				<div class="col-md-6 col-sm-12">
					<img src="images/about3.png" alt="image">
				</div>
			</div>
		</div>
		</section>
		<section>
			<div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe><a href="https://www.pureblack.de/"></a></div></div>
		</section>
		<section class="services">
			<div class="container">
				<div class="video">
					<iframe class="video-iframe"  src="https://www.youtube.com/embed/jzCwiu22C_c"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="blog">
							<img src="images/blog.png" alt="image">
							<h2>Our Blog</h2>
							<a href="#">View Blog</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="blog">
							<img src="images/career.png" alt="image">
							<h2>Career Opportunites</h2>
							<a href="#">Join Our Team</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="blog">
							<img src="images/forum.png" alt="image">
							<h2>Help Forum</h2>
							<a href="#">Visit Help Forum</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endsection