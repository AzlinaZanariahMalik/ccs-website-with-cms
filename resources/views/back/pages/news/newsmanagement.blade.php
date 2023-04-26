@extends('back.layouts.pages-layout')
@section('title') {{'News Management'}} @endsection

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
				<li><a href="#">News</a></li> /
                <li><a href="#" class="active">News Management</a></li> 
			
			</ul>
		
       <!---Adding New News and Managing news for user with publish permission-->
       @if(auth()->user()->publish_permission == 1)
       @livewire('news.news-management')
	   @elseif (auth()->user()->publish_permission == 0)
        @livewire('news.news-list')
	   @endif

       <!--end of Adding News for user publish permission--->



			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection
