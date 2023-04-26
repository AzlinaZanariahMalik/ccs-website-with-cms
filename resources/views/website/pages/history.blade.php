@extends('website.layouts.pages-layout')
@section('title') {{'History'}} @endsection

@section('content')
 
 <section id="parallax">
    <div class="row justify-content-center">
          <div class="gradient"></div>   
              @livewire('website.page.sub-banner')
            <div class="text-left">
                <h1 class="text-start">History</h1>
                
            </div>
    </div>      
 
</section>
<div class="container p-3">
    <div class="row gx-5 ">
      
      <div class="col-md-8 " id="academic">
        
        @livewire('website.page.page-history')
      </div>

      <div class="col-md-4 ">
       
        @livewire('website.page.page-certificate')
            
         
      </div>
    
    </div>
  </div>       
<br><br>  
@endsection