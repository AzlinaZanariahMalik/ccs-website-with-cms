<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>CCS Content Management System - @yield('title')</title>

	<!--logo-->
	<link rel="shortcut icon" href="{{ url('images/CCS_logo.png') }}">

	<!--Bootstrap CSS-->

	<link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css') }}">

	<!---Styles---->
	<link  href="{{ asset('back/css/cmsStyle.css')}}" rel="stylesheet" type="text/css" >

	<!---Library--->
	<link rel="stylesheet" href="{{ asset('back/library/ijaboCropTool/ijaboCropTool.min.css') }}">
	<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	@stack('styles')
	@stack('stylesheets')

	<!--Livewire Framework----->
	@livewireStyles
</head>
<body>
	
	
      
		<!-- Content Page -->
		@yield('content')
		
		
	
	<script src="{{ asset('back/js/sidenav.js')}}"></script>
   
	<script src="{{ asset('back/js/bootstrap.bundle.min.js') }}" ></script>
	<script src="{{ asset('back/js/jquery.min.js') }}" ></script>
	<!---Library--->
	
	<script src="{{ asset('back/library/ckeditor/ckeditor.js') }}" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	<script src="{{ asset('back/library/ijaboCropTool/ijaboCropTool.min.js') }}" ></script>
	<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}"></script>
	<script src="{{ asset('back/js/main.js')}}"></script>

	@stack('scripts')
	<!--Livewire Framework----->
	@livewireScripts
	
	
</body>
</html>