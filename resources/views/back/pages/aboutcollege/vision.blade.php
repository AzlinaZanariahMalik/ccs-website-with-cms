@extends('back.layouts.pages-layout')
@section('title') {{'Vision'}} @endsection

@section('content')

	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Vision</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="#" class="active" >About CCS</a></li> /
				<li><a href="#" class="active">Vision</a></li>
			</ul>
		

        <!---Vision Mission-->

        <div class="data">
		
                @livewire('about.vission-form')
              
                   
    	</div>

        <!--end of Vision Mission--->

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection