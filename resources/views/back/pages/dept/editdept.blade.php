@extends('back.layouts.pages-layout')
@section('title') {{'Department'}} @endsection

@section('content')



	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Department</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="{{ route('admin.department')}}" >Department</a></li> /
				<li><a href="#" class="active">Edit Department</a></li>
			
			</ul>
		
        
       @livewire('department.dept-edit-form',['id' => Route::current()->parameter('id')])
        

      

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection