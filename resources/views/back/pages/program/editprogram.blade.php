@extends('back.layouts.pages-layout')
@section('title') {{'Edit Program'}} @endsection

@section('content')

	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Edit Academic Program</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
                <li><a href="{{ route('admin.academic-program')}}">Academic Program</a></li> / 
				<li><a href="#" class="active" >Edit Program</a></li> 
		
			</ul>
		 

        <!---Academic Program-->

        @livewire('program.edit-program', ['id' => Route::current()->parameter('id')] )

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