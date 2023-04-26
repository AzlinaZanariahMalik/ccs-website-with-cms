@extends('website.layouts.pages-layout')
@section('title') {{'Alumni Tracer Study'}} @endsection
 
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
                @if(auth()->user()->verify_status == 'unverified')
                    @livewire('website.alumni.header')
                      <img src="{{ asset('website/loading.gif')}}" style="width:150px" class="d-inline-block align-top" alt="">
                      <br>
                     
                        <span class="text-center text-muted" style="font-size:1rem;">Please Wait for at least 2-5 Business Days while we verify your Student ID and Email to confirm your account.</span>
                    
                @else
                        @livewire('website.alumni.header')
                        @livewire('website.alumni.alumni-form')
                @endif
                  
                </div>
            </div>
       

<br><br>
@endsection