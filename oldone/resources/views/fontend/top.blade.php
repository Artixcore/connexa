							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
								
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Top Jobs</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
@foreach (App\JobPost::paginate(6) as $jobs)
											<div class="job-info">
												<div class="job-details">
													<h3>{{ $jobs->job_title }}</h3>
													<p>{{ $jobs->job_desc }}</p>
												</div>
												<div class="hr-rate">
													<span>{{$jobs->job_price_start}}/hr</span>
												</div>
											</div><!--job-info end-->
@endforeach