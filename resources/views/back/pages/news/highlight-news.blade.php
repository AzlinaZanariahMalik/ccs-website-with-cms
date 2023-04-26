@extends('back.layouts.pages-layout')
@section('title') {{'Highlight News'}} @endsection

@section('content')



	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">News Management</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="{{ route('admin.news.news-management')}}">News</a></li> /
                <li><a href="active">Highlight News</a></li>
			
			</ul>
		
   
       @livewire('news.highlight')
	   

     



			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection
