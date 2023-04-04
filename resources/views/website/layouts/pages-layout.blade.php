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
        <link  href="{{ asset('website/css/pageStyle.css') }}" rel="stylesheet" type="text/css"  >

	
	@stack('stylesheets')

	<!--Livewire Framework----->
	@livewireStyles

       
    </head>
<body>
    
 
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
        <span class=" ">© 2023 College of Computing Studies and Constellation WebTech</span>
      </div>
  </footer>
    @stack('scripts')
    <!--Livewire Framework----->
    @livewireScripts
    <script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
    
    
     </body>
</html>
