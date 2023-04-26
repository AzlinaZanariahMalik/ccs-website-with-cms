@extends('back.layouts.pages-layout')
@section('title') {{'Home'}} @endsection

@section('content')



	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
			
				<li><a href="#" class="active"></a></li>
			</ul>
			<div class="data">
            <div class="content-data"> 
			<h6><b>Announcement</b></h6>
			@livewire('announce.for-faculty')
            </div>
          

           
                
                
        </div>
			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection