@extends('back.layouts.pages-layout')
@section('title') {{'Verify Alumni'}} @endsection

@section('content')



	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Alumni</h1>
			<ul class="breadcrumbs">
                <li><a href="{{ route('admin.alumni.alumni-manage')}}">Alumni</a></li> /
				<li><a href="#" class="active" >Verify Alumni Accounts</a></li> 
			
			</ul>

            @livewire('alumni.verify-account')

		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection