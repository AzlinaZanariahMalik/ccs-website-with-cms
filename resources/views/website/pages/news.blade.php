@extends('website.layouts.pages-layout')
@section('title') {{'News'}} @endsection

@section('content')
 
 <section id="parallax">
    <div class="row justify-content-center">
          <div class="gradient"></div>   
              @livewire('website.page.sub-banner')
            <div class="text-left">
                <h1 class="text-start">News</h1>
                
            </div>
    </div>      
 
</section>
<div class="container p-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">News</li>
  </ol> 
</nav>
    <div class="row gx-5 ">
      
      <div class="col-md-8 " id="academic" >
        @livewire('website.page.page-news')
          
      </div>

      <div class="col-md-4 ">
       
        @livewire('website.page.page-certificate')
              
      </div>
    
    </div>
  </div>    

<br><br>
@endsection

 