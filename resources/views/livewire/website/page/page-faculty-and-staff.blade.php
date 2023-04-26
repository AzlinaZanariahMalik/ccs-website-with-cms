<div>
 
<!--Rank 1--->
<div class="text-center container py-5">
@foreach ($users as $user) 
<div class="row justify-content-center align-items-center">
  <!--Start of Card--->
  @if($user->rank == '1')
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card">
      <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
        data-mdb-ripple-color="light">
        @if (!empty($user->picture))
                            <img src="{{ url('storage/photos/user/'. $user->picture)}}"
                        alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; height:150px; z-index: 1; object-fit:cover;">
                        @else
                         <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
                        alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; height:150px; z-index: 1">
                        @endif
        
        </div>
      <div class="card-body">
        <a style="color:#0d3a0d" href="{{route('faculty-and-staff-show',[$user->id,preg_replace('/\+/','-',urlencode($user->name))])}}">
          <h5 class="card-title mb-3">{{$user->name}}</h5>
        </a>
        <h6 class="mb-3">{{$user->title}}</h6>
      </div>
    </div>
  </div>
  @endif
  <!--end of Card-->
</div>
@endforeach
</div>
<!--End of Rank 2--> 
<!--Rank 1--->
<div class="text-center container py-5">
@foreach ($users as $user) 
<div class="row justify-content-center align-items-center">
  <!--Start of Card--->
  @if($user->rank == '2')
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card">
      <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
        data-mdb-ripple-color="light">
        @if (!empty($user->picture))
                            <img src="{{ url('storage/photos/user/'. $user->picture)}}"
                        alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; height:150px; z-index: 1; object-fit:cover;">
                        @else
                         <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
                        alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; height:150px; z-index: 1">
                        @endif
        </div>
      <div class="card-body">
        <a style="color:#0d3a0d" href="{{route('faculty-and-staff-show',[$user->id,preg_replace('/\+/','-',urlencode($user->name))])}}">
          <h5 class="card-title mb-3">{{$user->name}}</h5>
        </a>
        <h6 class="mb-3">{{$user->title}}</h6>
      </div>
    </div>
  </div>
  @endif
  <!--end of Card-->
</div>
@endforeach
</div>
<!--End of Rank 2--> 

<!--Rank 3--->
<div class="text-center container py-5">

<div class="row justify-content-center align-items-center">
  <!--Start of Card--->
@foreach ($users as $user) 
@if($user->rank == '3')
  <div class="col-lg-4 col-md-12 mb-4">
     
    <div class="card">
      <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
        data-mdb-ripple-color="light">
        @if (!empty($user->picture))
                            <img src="{{ url('storage/photos/user/'. $user->picture)}}"
                        alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; height:150px; z-index: 1; object-fit:cover;">
                        @else
                         <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
                        alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; height:150px; z-index: 1">
                        @endif
        </div>
      <div class="card-body">
      <a style="color:#0d3a0d" href="{{route('faculty-and-staff-show',[$user->id,preg_replace('/\+/','-',urlencode($user->name))])}}">
          <h5 class="card-title mb-3">{{$user->name}}</h5>
        </a>
        <h6 class="mb-3">{{$user->title}}</h6>
      </div>
    </div>
  
  </div>
  @endif
@endforeach
  <!--end of Card-->
</div>

</div>
<!--End of Rank 3--> 
  <!--Rank 4--->
<div class="text-center container py-5">

<div class="row justify-content-center align-items-center">
  <!--Start of Card--->
@foreach ($users as $user) 
@if($user->rank == '4')
  <div class="col-lg-4 col-md-12 mb-4">
     
    <div class="card">
      <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
        data-mdb-ripple-color="light">
        @if (!empty($user->picture))
              <img src="{{ url('storage/photos/user/'. $user->picture)}}"alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"style="width: 150px; height:150px; z-index: 1; object-fit:cover;">
        @else
              <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"style="width: 150px; height:150px; z-index: 1">
        @endif
        </div>
      <div class="card-body">
        <a style="color:#0d3a0d" href="{{route('faculty-and-staff-show',[$user->id,preg_replace('/\+/','-',urlencode($user->name))])}}">
          <h5 class="card-title mb-3">{{$user->name}}</h5>
        </a>
        <h6 class="mb-3">{{$user->title}}</h6>
      </div>
    </div>
  
  </div>
  @endif
@endforeach
  <!--end of Card-->
</div>

</div>
<!--End of Rank 4--> 
  
</div>
  