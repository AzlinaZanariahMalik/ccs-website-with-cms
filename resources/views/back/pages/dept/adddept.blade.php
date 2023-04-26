@extends('back.layouts.pages-layout')
@section('title') {{'Add Department'}} @endsection

@section('content')


	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Add Department</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="{{ route('admin.department')}}" >Department</a></li> /
				<li><a href="#" class="active">Add Department</a></li>
			
			</ul>
		
        <!---Adding New News-->
       @livewire('department.department-form')
        

        <!--end of Adding News--->

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection
