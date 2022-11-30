@extends('fontend.meta')

@section('content')


		<section class="companies-info">
			<div class="container">
				<div class="company-title">

					<h3>All Companies</h3>
					<h3><a href="{{ url('new-company') }}">Crate New Company</a></h3>

				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
                    @foreach (App\Company::all() as $company)
                        
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="" alt="">
									<h3>{{ $company->company_name }}</h3>
									<h4> {{ $company->company_from }} </h4>
									<ul>
										<li><a href="#" title="" class="follow">Follow</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<a href="{{ url('company') }}/{{ $company->id }}" title="" class="view-more-pro">View Company Profile</a>
							</div><!--company_profile_info end-->
						</div>
				        @endforeach
					</div>
				</div><!--companies-list end-->
			
			</div>
		</section><!--companies-info end-->


@endsection