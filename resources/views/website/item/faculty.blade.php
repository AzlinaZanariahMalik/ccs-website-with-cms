@extends('website.layouts.pages-layout')
@section('title') {{'News'}} @endsection

@section('content')

 <section id="parallax">
    <div class="row justify-content-center">
          <div class="gradient"></div>   
            <div class="parallax_bg center-block img-responsive"> <img src="{{ url('/images/bg3.jpg') }}"></div> 
            <div class="text-left">
                <h1 class="text-start">Faculty and Staff</h1>
                
            </div>
    </div>      
 
</section>

<div class="container p-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/faculty-and-staff">Faculty and Staff</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{str_replace("-"," ",$name)}}</li>
  </ol> 
</nav>
    <div class="row gx-5 ">
      
      <div class="col-md-8 " id="academic">
       @livewire('website.shows.get-faculty-staff', ['id' => Route::current()->parameter('id')] )
          
      </div>

      <div class="col-md-4 ">
       
        @livewire('website.page.page-certificate')
              
      </div>
    
    </div>
  </div>    

<br><br>
@endsection 