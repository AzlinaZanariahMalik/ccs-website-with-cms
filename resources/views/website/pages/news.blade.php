@extends('website.layouts.pages-layout')
@section('title') {{'News'}} @endsection

@section('content')
 <!---HEADER NAVBAR---->
 <div class="header-background fixed-top">
    <div id="nav" class="sticky-nav">
      <div ></div>
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ url('/images/CCS_logo.png') }}" width="100" height="100" class="d-inline-block align-top" alt="">
          
        </a>
       
        
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">

          <li class="nav-item">
              <a class="nav-link " href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About CCS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/vision-mission">Vision Mission</a></li>
                <li><a class="dropdown-item" href="/goals">College Goals</a></li>
                <li><a class="dropdown-item" href="/history">History</a></li>
                <li><a class="dropdown-item" href="/department">Department</a></li>
                <li><a class="dropdown-item" href="/faculty-and-staff">Faculty & Staff</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academic Program
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/undergraduate">Undergraduate Program</a></li>
                <li><a class="dropdown-item" href="/graduate">Graduate Program</a></li>
                <li><a class="dropdown-item" href="#">Undergraduate Admission</a></li>
                <li><a class="dropdown-item" href="#">Graduate Admission</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pythons
              </a>
              <ul class="dropdown-menu">
                
                <li><a class="dropdown-item" href="#">Activites </a></li>
                <li><a class="dropdown-item" href="/organization">Organizations</a></li>
             
              </ul>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#">Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item" style="filter: brightness(0) invert(1);">
              <a class="nav-link" href="#"><img src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASdJREFUSEvVlcENwjAMRX83gUmASYBJgEmASYBJgElAT7IlF5I0KukBX6qW2M/fdkynia2bOL5KgJmkjaSFpKWkh6SrpKekk70P5pcD7CXtCt7AzpI4V7QU4GIZ43iwrMkcRSjh6XC+r0qETwAlOZr8rQVP+QMhEZ4kkVUSARy+WzSyIruSoQYI5comEwFedxqIQ42hFtVZFRHghwkOpMZcRbYXEUB5KNO8dgTtPH6UCb8v+xVAwJdFTY58/OjjWdNgz9SnLtu3Vk2uAowdU9Rk+zb2ovn0+G2vumheVx9X3pF+C5fO10XcU0wQfeNZnKL449Cy88zXNqpZyNC6phS+rglKIBR5SeJOSkJa/OEUIS0AKIuQ3qppBXAIJe3tsZaA5HL8f8AbD75NGeBb0w4AAAAASUVORK5CYII='}}"/></a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    </div>

  </div>
 <!---END OF HEADER NAVBAR---->
 <section id="parallax">
    <div class="row justify-content-center">
          <div class="gradient"></div>   
            <div class="parallax_bg center-block img-responsive"> <img src="{{ url('/images/bg3.jpg') }}"></div> 
            <div class="text-left">
                <h1 class="text-start">News</h1>
                
            </div>
    </div>      
 
</section>
<div class="container p-3">
    <div class="row gx-5 ">
      
      <div class="col-md-8 " id="academic">
        @livewire('website.page.page-news')
          
      </div>

      <div class="col-md-4 ">
       
        @livewire('website.page.page-certificate')
              
      </div>
    
    </div>
  </div>    

<br><br>
@endsection

 