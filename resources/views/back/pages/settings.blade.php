@extends('back.layouts.pages-layout')
@section('title') {{'About'}} @endsection

@section('content')



	<!-- end of sidebar menu -->
	<!-- page body content -->
	<section id="content">
		<!-- header-->
		@livewire('nav-header')
		<!-- end of header of main content -->

		<!-- main content -->
		<main>
			<h1 class="title">Setting</h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('admin.home')}}">Home</a></li> / 
				<li><a href="#" class="active" >Website Setting</a></li> 
			
			</ul>
	

        <!---Website General Settings-->

        @livewire('settings.website-general-settings')

        <!--end of End of Website General Settings--->

         <!---Website Logo and Icon-->

         <div class="data">
            <div class="content-data"> 
            <!---Website Logo--->  
            @livewire('settings.college-logo-form')
            </div>
            <!--End of Website Logo--->

            <div class="content-data"> 
            @livewire('settings.fav-icon-form')
            </div>  
                
                
        </div>

        <!--end of End of Website Logo and Icon--->

        <!--Website Map and Social Links--->

        <div class="data">
            <div class="content-data"> 
            @livewire('settings.college-google-map-form')
            </div>   

            <div class="content-data"> 
            @livewire('settings.college-social-media-link-form')
            </div>  
                
                
        </div>
        <!--End of  and social media links-->
		 <!---Website Sub Banner Settings-->

		 @livewire('settings.sub-banner')

		<!--end of End of Website General Settings--->
			
		</main>
		<!-- end of main content -->
		<!--footer section-->
		<div class="footer text-center">
			<span >© 2023 Constellation WebTech </span>
		</div>
	</section>
	<!-- end of body of page content -->

@endsection
@push('scripts')
   
@endpush