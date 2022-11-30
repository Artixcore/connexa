@extends('layouts.profile')

@section('content')

<div class="container p-3 my-3 text-dark" id="back">
<form id="regForm" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
@csrf
<div>
 <img src="images/connexa.png" class="col-md-8 img-fluid" alt="Logo"><br>
</div>
<div class="tab">
  <label for="email"><h4>Email Address</h4></label>
  <p><input type="text" name="email" id="email" placeholder="{{ $errors->first('email') ? 'This User Is Already Exist' : 'Email Address' }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" oninput="this.className = ''" required autofocus></p>
  <label for="password"><h4>Password</h4></label>
  <p><input type="password" name="password" id="password" placeholder="{{ $errors->has('password') ? 'Password Not Match' : 'xxxxxx' }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  oninput="this.className = ''" required autofocus></p>
  <label for="password"><h4>Confirm Password</h4></label>
  <p><input id="password-confirm" type="password" name="password_confirmation"  placeholder="xxxxxx" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" oninput="this.className = ''" required></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="submit" class="btn btn-info btn-lg" >Agree Join</button>
  </div>
</div>
</form>
</div>
@endsection	
