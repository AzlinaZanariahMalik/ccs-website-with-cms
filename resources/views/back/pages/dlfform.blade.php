@extends('back.layouts.pages-layout')
@section('title') {{'Downloadable Files'}} @endsection

@section('content')



	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Downloadable Files</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="#" class="active">Downloadable Files</a></li>
			
			</ul>
		
        <!---Banner Form-->
       @livewire('dl-form')
        

        <!--end of Banner Form--->

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection