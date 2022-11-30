@extends('fontend.header')
@section('content')

<div class="container">
  <div class="row">

  {{-- Left Side --}}
    <div class="col-3">
    <figure class="figure">
  <img src="https://www.10wallpaper.com/wallpaper/1366x768/1110/South_Pacific_Sunset-Beautiful_natural_scenery_wallpaper_1366x768.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
</figure>



    </div>{{-- End --}}


    {{-- right Side --}}
    <div class="col-9">
    
      <figure class="figure">
  <img src="https://www.10wallpaper.com/wallpaper/1366x768/1110/South_Pacific_Sunset-Beautiful_natural_scenery_wallpaper_1366x768.jpg" class="figure-img img-fluid rounded" alt="...">
</figure>

{{-- Nav --}}
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Last Project</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Portfolio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Reviews</a>
  </li>
</ul>
{{-- End Nav --}}

<div class="row no-gutters">
  <div class="col-md-12">



  </div>
 </div>

    </div> {{-- End --}}



    {{-- End Row --}}
  </div>
</div>

@endsection
