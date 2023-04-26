@extends('back.layouts.pages-layout')
@section('title') {{'Faculty'}} @endsection

@section('content')


	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Edit Faculty and Staff</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="{{ route('admin.faculty-and-staff')}}" >Faculty and Staff</a></li> /
				<li><a href="#" class="active">Edit Faculty and Staff</a></li>
			
			</ul>
		
        
       @livewire('edit-faculty',['id' => Route::current()->parameter('id')])
        

      

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection