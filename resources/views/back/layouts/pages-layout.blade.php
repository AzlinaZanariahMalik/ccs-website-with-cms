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
	
	<script src="{{ asset('back/library/ijaboCropTool/ijaboCropTool.min.js') }}" ></script>
	<script src="{{ asset('back/js/main.js')}}"></script>
	@stack('scripts')
	<!--Livewire Framework----->
	@livewireScripts
	<script>
		window.addEventListener('closeModal', event => {
			$('#addProgramModal').modal('hide');
		});
		window.addEventListener('openModal', event => {
			$('#addProgramModal').modal('show');
		});
		window.addEventListener('openDeleteModal', event => {
			$('#ProgramDeleteModal').modal('show');
		});
		window.addEventListener('closeDeleteModal', event => {
			$('#ProgramDeleteModal').modal('hide');
		});
		window
	</script>
	
</body>
</html>