@extends('back.layouts.pages-layout')
@section('title') {{'Academic Program'}} @endsection

@section('content')

	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Academic Program</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="#" class="active" >Academic Program</a></li> 
		
			</ul>
		

        <!---Academic Program-->

        @livewire('program.academic-program-page')

        <!--end of Academic Program--->

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

Page 
@endsection