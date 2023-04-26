@extends('back.layouts.pages-layout')
@section('title') {{'News'}} @endsection

@section('content')



	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">News</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="{{ route('admin.news.news-management')}}" >News</a></li> /
				<li><a href="#" class="active">View and Edit News</a></li>
			
			</ul>
		
     

	  
	   @if(auth()->user()->publish_permission == 1)
         
       	@livewire('news.edit-news-form',['id' => Route::current()->parameter('id')])
	   @elseif (auth()->user()->publish_permission == 0)
	   	@livewire('news.edit-news',['id' => Route::current()->parameter('id')])
	   @endif
 
       

			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection