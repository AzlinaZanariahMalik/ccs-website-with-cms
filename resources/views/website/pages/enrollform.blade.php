@extends('website.layouts.pages-layout')
@section('title') {{'Enroll'}} @endsection
 
@section('content')

<div class="container p-3">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Enroll</li>
    </ol> 
  </nav>
     
  
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    
                        @livewire('website.enroll.enroll-form',['id' => Route::current()->parameter('id')])
                  
                </div>
            </div>
       

<br><br>
@endsection