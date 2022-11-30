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
										<div class="card-header">Change Password</div>

                                        <div class="card-body">
                                     
<form action="{{ url('change-password') }}" method="post">
@csrf
  <div class="form-row">

    <div class="form-group col-md-4">
     <input id="oldpassword" type="password" class="form-control{{ $errors->has('oldpassword') ? ' is-invalid' : '' }}" placeholder="Old Password" name="oldpassword" required autofocus>

                                    @if ($errors->has('oldpassword'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                    @endif
    </div>

    <div class="form-group col-md-4">
         <input id="password" placeholder="New Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
    </div>

    <div class="form-group col-md-4">
       <input id="password-confirm" placeholder="Retype Password" type="password" class="form-control" name="password_confirmation" required>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </div>

  </div>
</form>



								</div><!--acc-setting end-->
									</div><!--acc-setting end-->
								</div>


<br/>






							{{-- </div>
							</div> --}}
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			
		</section>

        @endsection