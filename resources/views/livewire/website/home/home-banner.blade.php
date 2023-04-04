<div>
<!--<section id="parallax">
    <div class="row justify-content-center">
          <div class="gradient"></div>   
            <div class="parallax_bg center-block img-responsive"> <img src="{{ url('storage/photos/banner/'. $banner->banner_image)}}"></div> 
            <div class="center-text">
                <h1>{{$banner->banner_tagline}}</h1>
                
            </div>
    </div>      
 
</section>-->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="{{ url('storage/photos/banner/'. $banner->banner_image)}}">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="{{ url('storage/photos/banner/'. $banner->banner_image)}}">
    </div>
    <div class="carousel-item">
    <img src="{{ url('storage/photos/banner/'. $banner->banner_image)}}">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
 