@extends('layouts.profile')

@section('content')

<div class="container p-3 my-3  text-dark" id="back">
<form id="regForm" method="POST" action="{{ url('/profile') }}">
@csrf
<div>
 <img src="images/connexa.png" class="col-md-8 img-fluid" alt="Logo"><br>
</div>
<div class="tab">
  <label for="first_name"><h4>First Name</h4></label>
  <p><input type="text" name="first_name" id="first_name" placeholder="eg:Ahmad" oninput="this.className = ''"></p>
  <label for="last_name"><h4>Last Name</h4></label>
  <p><input type="text" name="last_name" id="last_name" placeholder="eg:Ali" oninput="this.className = ''"></p>
</div>

@php( $countries = \App\Model\Countries::all() ) 
@php( $cities = \App\Model\Cities::all() ) 
<div class="tab">
  <label for="country"><h4>Country</h4></label>
  <select id="country" name="country" class="browser-default custom-select custom-select-lg mb-3" data-size="5" >
  <option value="" disabled selected>Select Country</option>
     @foreach ($countries as $country)
    <option value="{{$country->id}}" >{{$country->country_name}} </option>
    @endforeach
  </select>
  <label for="city"><h4>City</h4></label>
  <select id="city" name="city" class="browser-default custom-select custom-select-lg mb-3" data-size="5" >
  <option value="" disabled selected>Select City</option>
     @foreach ($cities as $city)
    <option value="{{$city->id}}" >{{$city->city_name}} </option>
    @endforeach
  </select>
 </div>
<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" class="btn btn-info btn-lg" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
</div>
</form>
</div>
@endsection	