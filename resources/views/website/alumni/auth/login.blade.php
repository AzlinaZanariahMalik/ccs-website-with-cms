@extends('website.layouts.pages-layout')
@section('title') {{'Login'}} @endsection
 
@section('content')

<div class="container p-3">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Alumni Tracer Study</li>
    </ol> 
  </nav>
     
  
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        @livewire('website.alumni.a-login')
                    </div>
                </div>
            </div>
       

<br><br>
@endsection