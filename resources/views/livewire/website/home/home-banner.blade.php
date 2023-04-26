@push('styles')
<style>
 
  .caritembg{
    background-color:#1d7e43;
  }
</style>
@endpush

<div>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  @if(!empty($banner))  
 <!--fetch  table database---> 
    @foreach($banner as $key => $ban)
        <div class="carousel-item caritembg {{$key == 0 ? 'active' : '' }}">
          <img src="{{ url('storage/photos/banner/'. $ban->banner_image)}}" style="width:100%; height:auto; " class="d-block w-100">
        </div>
      @endforeach
  @elseif(empty($banner))
  <div class="carousel-item active">
      <img src="{{ url('/images/pythons.jpg')}}" style="width:1920px; height:320px;" class="d-block w-100" >
  </div>
@endif 
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>
 