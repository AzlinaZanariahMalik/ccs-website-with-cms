<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>CCS - @yield('title')</title>

	<!--logo-->
	<link rel="shortcut icon" href="{{ url('images/CCS_logo.png') }}">

	<!--Bootstrap CSS-->

	<link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css') }}">

	<!---Styles---->
	<link rel="stylesheet" href="{{ asset('back/css/styles.css') }}">

	
	@stack('stylesheets')

	<!--Livewire Framework----->
	@livewireStyles
</head>
<body > 
	   

		<!-- Content Page -->
		@yield('content')
		
		
	
	
    @stack('scripts')
	<!--Livewire Framework----->
	@livewireScripts
	<script src="{{ asset('back/js/bootstrap.bundle.min.js') }}" type="type/javascript" ></script>
	<script src="{{ asset('back/js/main.js')}}"></script>
</body>
</html>