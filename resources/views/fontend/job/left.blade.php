	<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="images/wd-logo.png" alt="">
										<h3>Post a Job</h3>
										<span>Pay only for the Hours worked</span>
										<div class="sign_link">

										<a class="btn btn-primary" data-toggle="modal" data-target="#Job"> Post Job </a>

										</div>
									</div><!--widget-about end-->
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Top Jobs</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior PHP Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Developer Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Most Viewed This Week</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
								</div><!--right-sidebar end-->
							</div>

 <!-- Modal -->
<div class="modal fade" id="Job" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Post a Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('Work_post') }}" method="post">
      @csrf
      <div class="modal-body">
      <div class="container">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Company name</label>
            <input type="text" name="job_company" class="form-control">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Job Title</label>
            <input type="text" name="job_title" class="form-control">
          </div>
		<div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact Email</label>
            <input type="email" name="job_email" class="form-control">
          </div>
		  		<div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact Number</label>
            <input type="text" name="job_number" class="form-control">
          </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Job Type</label>
            <select name="job_type" class="form-control">
            <option value="Full Time"> Full Time </option>
            <option value="Part Time"> Part Time </option>
            </select>
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Skill Requirment</label>
            <input type="text" name="job_skill" class="form-control" >
          </div>
		              <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location</label>
            <input type="text" name="job_location" class="form-control" >
          </div>
               <div class="form-group">
            <label for="recipient-name" class="col-form-label">Salary</label>
            <input type="text" name="job_salary" class="form-control" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" name="job_desc" id="message-text"></textarea>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>

