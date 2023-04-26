<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ College_info()->website_name}}">
   

        <title>{{ College_info()->website_name}} - @yield('title')</title>

        <!--logo-->
        <link  href="{{ url('storage/photos/logo-icon/'. College_info()->website_icon )}}" rel="shortcut icon">

        <!--Bootstrap CSS-->

        <link  href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

        <!---Styles---->
        <link  href="{{ asset('website/css/websiteStyle.css') }}" rel="stylesheet" type="text/css"  >

	
	@stack('stylesheets')

	<!--Livewire Framework----->
	@livewireStyles

       
    </head>
<body>
<div class="header-background">
    <div id="nav" class="sticky-nav">
     
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <ul class="navbar-nav mr-auto">
          <a class="nav-item" href="/">
            <img src="{{ url('storage/photos/logo-icon/'. College_info()->website_logo )}}" width="50" height="50" class="d-inline-block align-top" alt="">
          </a>
        </ul>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">

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
               
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/organization">Pythons</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="{{route('alumni-tracer-study.home') }}">Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact-us') }}">Contact</a>
            </li>
          
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <div class="d-flex justify-content-center h-100"><form action="{{ url('search')}}" method="GET" role="search">
                  <div class="searchbar">
                    
                      <input class="search_input" type="text" name="search" value="{{ Request::get('search')}}" placeholder="Search..." autocomplete="off">
                      <a style="cursor: default" href="#" class="search_icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255,255,255);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg></a>
                    
            </div></form>
                
            </li>

          </ul>
          
        </div>
      </div>
    </nav>
    </div>

  </div>

 
  @yield('content')
		 <!-- Content Page -->
		
	<!---divider----------------------------------------->
  <div class="container">
    <div class="row gx-5">
      
      <div class="col-md-12 divider-border">
        
      </div>

    </div>
  </div>
  <!---end of divider---------------------------------->
	<!---Footer------------------------------------------>
    <footer class="footer mt-auto">
    <div class="container-fluid footer-section">
    <div class="row gx-5">
      
      <div class="col-md-4">
      @livewire('website.home.home-google-map-link')
      </div>
      <!---Contact----->
      <div class="col-md-4">
      @livewire('website.home.home-contact-footer')
      </div>
      <div class="col-md-4">
      @livewire('website.home.home-social-links')
      </div>
    </div>
     
    
    </div>

    <div class="p-3 copyright text-center">
        <span class=" ">© 2023 {{ College_info()->website_name}} and Constellation WebTech</span>
      </div>
  </footer>
    @stack('scripts')
    <!--Livewire Framework----->
    @livewireScripts
    <script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
    
    
     </body>
</html>
