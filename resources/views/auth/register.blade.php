@extends('fontend.header')
@section('content')
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-appointment">
    <div class="container py-4">

   <div class="row">

   <div class="col-md-8">
   <img src="https://connexa.biz/images/connexa.png" class="col-md-8 img-fluid" alt="Logo">
   </div>

    <div class="col-md-4">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible" role="alert" >
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                @endif
               
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="appointment bg-white p-4 p-md-5">
                        @csrf
                         <div class="row">

                
                        {{-- <div class="col-md-6"> --}}
                        <div class="form-group">
                        <div class="form-field">
                        <div class="select-wrap">
                        <input id="name" type="text" placeholder="User Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        </div>
                        </div>
                        {{-- </div> --}}

                        {{-- <div class="col-md-6"> --}}
                        <div class="form-group">
                        <div class="form-field">
                        <div class="select-wrap">
                        <select class="form-control" title="Select Gender" name="gender" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        </div>
                        </div>
                        {{-- </div> --}}

                        {{-- <div class="col-md-6"> --}}
                        <div class="form-group">
                        <div class="form-field">
                        <div class="select-wrap">
                        <input id="email" type="email" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        </div>
                        </div>
                        {{-- </div> --}}

                        {{-- <div class="col-md-6"> --}}
                        <div class="form-group">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        {{-- </div> --}}

                        {{-- <div class="col-md-6"> --}}
                        <div class="form-group">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        </div>

                        {{-- <div class="col-md-12"> --}}

                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Signup</button>
                        </div>

                        <div class="form-group">
                        <a href="{{ route('login') }}"><h3 class="btn btn-primary">Sign In</h3></a>
                        </div>

                        </div>

                        </div><!--End Row-->
              </form>
            {{-- </div> --}}

            </div>
            </div>
         

</section>
@endsection
{{-- @section('footer_js')

@endsection --}}
