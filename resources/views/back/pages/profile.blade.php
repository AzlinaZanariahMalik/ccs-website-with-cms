@extends('back.layouts.pages-layout')
@section('title') {{'Profile'}} @endsection

@section('content')



	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Profile</h1>
			<ul class="breadcrumbs">
			
				<li><a href="#" class="active">Profile Setting</a></li>
			</ul>
		<!---profile--->
			
        @livewire('profile.user-profile-header')
	     
        <!---end of profile---->

        <!---personal details-->

        @livewire('profile.user-personal-details')

        <!--end of personal details--->

		

        <!--change password----->

        @livewire('profile.user-change-password-form')

        <!--end of change password--->
				
			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection
 