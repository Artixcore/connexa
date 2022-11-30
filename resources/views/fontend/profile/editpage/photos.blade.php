@extends('fontend.meta')

@section('content')

		<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">

		@include('fontend.profile.editpage.manu')
 

						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
									
                                    
                                    <div class="card">
										<div class="card-header">User Setting</div>

                                        <div class="card-body">
                                     
<form action="{{ url('change-name') }}" method="post">
@csrf
  <div class="form-row">

    <div class="form-group col-md-4">
      <input placeholder="First Name" value="{{ Auth::user()->f_name }}" name="f_name" type="text" class="form-control">
    </div>

    <div class="form-group col-md-4">
      <input placeholder="Middle Name" value="{{ Auth::user()->l_name }}" name="l_name" type="text" class="form-control">
    </div>

     <div class="form-group col-md-4">
      <input placeholder="Username" value="{{ Auth::user()->name }}" name="name" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </div>

  </div>
</form>



								</div><!--acc-setting end-->
									</div><!--acc-setting end-->

								</div>


							{{-- </div>
							</div> --}}
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			
		</section>

        @endsection