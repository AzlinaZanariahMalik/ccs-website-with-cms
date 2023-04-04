@extends('website.layouts.home-layout')
@section('title') {{'Home'}} @endsection

@section('content')
 <!---HEADER NAVBAR---->
 <div class="header-background fixed-top">
    <div id="nav" class="sticky-nav">
     
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ url('storage/photos/logo-icon/'. College_info()->website_logo )}}" width="105" height="105" class="d-inline-block align-top" alt="">
        </a>
        
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">

          <li class="nav-item">
              <a class="nav-link " href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/about-ccs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About CCS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/vision-mission">Vision Mission</a></li>
                <li><a class="dropdown-item" href="/goals">College Goals</a></li>
                <li><a class="dropdown-item" href="/history">History</a></li>
                <li><a class="dropdown-item" href="/department">Department</a></li>
                <li><a class="dropdown-item" href="/faculty-and-staff">Faculty & Staff</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academic Program
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/undergraduate">Undergraduate Program</a></li>
                <li><a class="dropdown-item" href="/graduate">Graduate Program</a></li>
                <li><a class="dropdown-item" href="#">Undergraduate Admission</a></li>
                <li><a class="dropdown-item" href="#">Graduate Admission</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pythons
              </a>
              <ul class="dropdown-menu">
                
                <li><a class="dropdown-item" href="#">Activites </a></li>
                <li><a class="dropdown-item" href="/organization">Organizations</a></li>
             
              </ul>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#">Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item" style="filter: brightness(0) invert(1);">
              <a class="nav-link" href="#"><img src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASdJREFUSEvVlcENwjAMRX83gUmASYBJgEmASYBJgElAT7IlF5I0KukBX6qW2M/fdkynia2bOL5KgJmkjaSFpKWkh6SrpKekk70P5pcD7CXtCt7AzpI4V7QU4GIZ43iwrMkcRSjh6XC+r0qETwAlOZr8rQVP+QMhEZ4kkVUSARy+WzSyIruSoQYI5comEwFedxqIQ42hFtVZFRHghwkOpMZcRbYXEUB5KNO8dgTtPH6UCb8v+xVAwJdFTY58/OjjWdNgz9SnLtu3Vk2uAowdU9Rk+zb2ovn0+G2vumheVx9X3pF+C5fO10XcU0wQfeNZnKL449Cy88zXNqpZyNC6phS+rglKIBR5SeJOSkJa/OEUIS0AKIuQ3qppBXAIJe3tsZaA5HL8f8AbD75NGeBb0w4AAAAASUVORK5CYII='}}"/></a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    </div>

  </div>
 <!---END OF HEADER NAVBAR---->
 
  <!----Banner--------------------------------------------->
  @livewire('website.home.home-banner')
<!----End of Banner-------------------------------------->
 <!----Date------------------------------------------>
 
<div class="container-fluid  date-section">
  <div class="container-fluid ">
    <div class="row position-relative">
     <div class="card mb-3 position-absolute end-0" style="border-top: 10px solid white;border-bottom: 100px solid white;
     max-width: 18rem; top:-3rem; padding:10px;  transform: skew(-20deg);">
       <div class="date text-center" style="transform: skew(20deg);" >
       <h5 id="current_date"></h5>
       

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
  <div class="container p-3">
    <div class="row gx-5 ">
      
      <div class="col-md-4 " id="academic">
        <a href="/dean-corner">
           @livewire('website.home.home-dean-corner')
        </a>
        
            
          <h2 class="p-3 web-title" >Announcement</h2>
         
            <div class=" justify-content-center">
             
             
            </div>

         
      </div>

      <div class="col-md-8 ">
       
            <h2 class="p-3 web-title text-center">News</h2>

            @livewire('website.home.home-featured-news')
         
      </div>
    
    </div>
  </div>
  <!--END OF Grid Dean's Corner and News--------------> 
  @livewire('website.home.home-about-c-c-s')
 <!----About------------------------------------------>

<!----End of About------------------------------------------>

  <!----Academic Program------------------------------------------>
<div class="container-fluid program-section">
  <div class="container">
     
    <div class="row ">
    <div class="card mb-3 academic-title-program">
    
          <div class="card-group">
            <div class="card">  
              <div class="card-body" style="background-color:#0d3a0d; color:#fff">
                <h5 class="card-title text-center">Undergraduate</h5>
                
              </div>
            </div>
            <div class="card">
              <div class="card-body" style="background-color:#696269; color:#fff">
                <h5 class="card-title text-center">Graduate</h5>
                
              </div>
            </div>
          </div>
          
      </div>
    </div> 
  </div>
  </div>
<!----Academic Program------------------------------------------>
 

 
@endsection
 