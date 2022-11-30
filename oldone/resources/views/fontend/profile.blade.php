@extends('fontend.header')
@section('content')
<div class="container py-4 emp-profile">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="/user/{{ $user->avatar }}" class="img-rounded" style="height:250px; width:230px;" title="{{$user->name}}" >
                <form enctype="multipart/form-data" method="POST" action="/update-ava">
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                {{ $user->f_name }}
                            </h5>
                            <h6>
                                {{$user->bloodgroup }}
                            </h6>
                            <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="profile" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <a>{{ Auth::user()->bloodgroup }}</a><br/>
                    <a>{{ Auth::user()->f_name }}</a><br/>
                    <a>{{ Auth::user()->l_name }}</a><br/>
                    <a>{{ Auth::user()->gender }}</a><br/>
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                    <label>{{Auth::user()->id}}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $user->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Kshiti Ghelani</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>kshitighelani@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>123 456 7890</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Web Developer and Designer</p>
                                    </div>
                                </div>
                    </div>

                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab">
                        {{-- <form action="{{ route('home.update',) }}" enctype="multipart/form-data" method="POST"> --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" class="toggle-class" data-id="" data-toggle="toggle" data-on="Enabled" data-off="Disabled" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Add Zilla</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddZilla">
                                           Add Zilla
                                          </button></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Add Thana</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddThana">
                                            Add Thana
                                           </button></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>English Level</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Availability</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>6 months</p>
                                    </div>
                                </div>

                               <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                    </div>

                </div>
            </div>
        </div>

</div>

<!-- Button trigger modal -->

  <!-- Thana Modal -->
  <div class="modal fade" id="AddThana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Add Thana

            @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message')}}
                        </div>
                    @endif

                    <form action="{{ url('/ThanaPost')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="categoryInput">Zilla Name</label>
                            <select name="zilla_id" class="form-control">
                                <option>Select One</option>
                                @foreach(App\Zilla::all() as $item)
                                    <option value="{{$item->id}}">{{$item->zilla_name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="thana_name">Thana Name</label>
                            <input type="text" name="thana_name" class="form-control @error('thana_name') is-invalid @enderror" id="thana_name" placeholder="Enter Thana Name">
                            @error('thana_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
    </div>
  </div>

  <!-- Zilla Modal -->
  <div class="modal fade" id="AddZilla" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Add Zilla
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message')}}
            </div>
        @endif?
        </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ url('/ZillaInsert')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="zilla_name" class="form-control @error('zilla_name') is-invalid @enderror" id="zilla_name" placeholder="Enter Your Zilla Name">
                @error('zilla_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                @enderror

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
    </div>
  </div>
@endsection
