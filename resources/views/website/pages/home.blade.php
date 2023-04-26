@extends('website.layouts.home-layout')
@section('title') {{'Home'}} @endsection

@section('content')
 

 
  <!----Banner--------------------------------------------->
  @livewire('website.home.home-banner')
<!----End of Banner-------------------------------------->
 <!----Date------------------------------------------>
 
<div class="container-fluid  date-section">
  <div class="container-fluid ">
    <div class="row position-relative">
     <div class="card mb-3 position-absolute end-0 date-time" style="border-top: 10px solid white;border-bottom: 20px solid white;
     max-width: 15rem; top:-3rem; padding:10px; transform: skew(-20deg); margin-right:-1rem; overflow:hidden;">
       <div class="date text-center" style="transform: skew(20deg);" >
       <h6 id="current_date"></h6>
       

       </div>
   
     
              
    </div>
    </div>
  </div>
  </div>   

<!----End of Date------------------------------------------>

<!----Highlight News------------------------------------------>
 
<div class="container-fluid  high-section" style="margin-top: 1rem;">
  <div class="container p-3">
    <div class="row gx-5">

    @livewire('website.home.home-highlight-news')
     
    </div>
  </div>
  </div>   

     
   
<!----End of Highlist News/Feature------------------------------------------>

  
<!--Grid Dean's Corner and News---------------------->
  <div class="container p-3 corner">
    <div class="row gx-5 ">
      
      <div class="col-md-4 " id="academic">
        <a href="/dean-corner">
           @livewire('website.home.home-dean-corner')
        </a>
        
            
          <h2 class="p-3 web-title text-center" >Announcement</h2>
         
           @livewire('website.home.home-announce')

         
      </div>

      <div class="col-md-8 ">
       
            <h2 class="p-3 web-title text-center">News</h2>

            @livewire('website.home.home-featured-news')
         
      </div>
    
    </div>
  </div>
<!----About------------------------------------------>

<div class="container p-3 about-section">
    <div class="row gx-5 ">
      
      <div class="col-md-8 ">
        @livewire('website.home.home-about-c-c-s')
      </div>

      <div class="col-md-4 about-link">
        <a href="/vision-mission" class="p-3 web-title-link"> <h6 >Vision Mission</h6></a>
        <a href="/goals" class="p-3 web-title-link"> <h6 >College Goal</h6></a>
        <a href="/history" class="p-3 web-title-link"> <h6 >History</h6></a>
        <a href="/department" class="p-3 web-title-link"> <h6 >Department</h6></a>
        <a href="/faculty-and-staff" class="p-3 web-title-link"> <h6 >Faculty & Staff</h6></a>
      </div>
    
    </div>
  </div>
 
<!----End of About------------------------------------------>
<br><br>

<!----Academic Program------------------------------------------>
<div class="container-fluid program-section">

  @livewire('website.home.home-acedemic-program')
  
</div>


<!----Academic Program------------------------------------------>
<!--Organization Logo---------------------->

  <div class="container org">
    <div class="justify-content-center align-items-center">
    </div>
    
    @livewire('website.home.home-orgs')
  </div>
  <div class="container">
    <div class="justify-content-center align-items-center">
    </div>
     @livewire('website.page.page-certificate')
    
  </div>
 
<!--End of Orgs----------------------------------------> 
<br>
<div class="container testimonial">
  <div class="text-center"><h2>What Our Pythons Says</h2></div>
  <br>
    <!-- Carousel wrapper -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
        
          <span class="text-muted qoute-text">
          
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque."
          </span>
         <br><br>
          <h5 class="text-center">Roger Floyd</h5>
          <p class="text-center">BS IT</p>
          <h1 class="text-end qoute">„</h1>
        </div>
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
         
          <span class="text-muted">
          
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </span>
          <br><br>
          <h5 class="text-center">Roger Floyd</h5>
          <p class="text-center">BS IT</p>
          <h1 class="text-end qoute">„</h1>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
         
          <span class="text-muted">
          
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </span>
          <br><br>
          <h5 class="text-center">Roger Floyd</h5>
          <p class="text-center">BS IT</p>
          <h1 class="text-end qoute">„</h1>
        </div>
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    
  </div>

  <br><br>
@endsection
 