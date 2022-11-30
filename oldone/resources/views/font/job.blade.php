@extends('layouts.app')

@section('content')




@foreach (App\NewJob::all() as $jobs)
<div class="col-md-3">
<div class="card">
  <div class="card-body text-center">
    <h5 class="card-title">{{ $jobs->job_title }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $jobs->job_company }}</h6>
    <p class="card-text">{{ $jobs->job_desc }}</p>
    <a href="{{ url('jobs') }}/{{ $jobs->id }}" class="card-link">{{ $jobs->id }}</a>
    <a href="#" class="card-link">{{ $jobs->job_location }}</a>
  </div>
</div>
       </div>

@endforeach

 
@endsection