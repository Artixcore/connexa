				<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link" href="{{ url('profile/edit/general') }}/{{ Auth::user()->id }}" role="tab" aria-controls="nav-acc" aria-selected="true">Account Setting</a>
								    <a class="nav-item nav-link" href="{{ url('profile/edit/user') }}/{{ Auth::user()->id }}" role="tab" aria-controls="nav-status" aria-selected="false">User Settings</a>
								    {{-- <a class="nav-item nav-link" href="{{ url('profile/edit/photo') }}/{{ Auth::user()->id }}" role="tab" aria-controls="nav-status" aria-selected="false">Photo Settings</a> --}}
								    <a class="nav-item nav-link" href="{{ url('profile/edit/Deactivation') }}/{{ Auth::user()->id }}" role="tab" aria-controls="nav-status" aria-selected="false">Deactivation Settings</a>
								    <a class="nav-item nav-link" href="{{ url('profile/edit/Security') }}/{{ Auth::user()->id }}" role="tab" aria-controls="nav-status" aria-selected="false">Security Settings</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>