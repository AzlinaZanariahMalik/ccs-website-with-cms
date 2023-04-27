@extends('website.layouts.pages-layout')
@section('title') {{'About Project'}} @endsection

@section('content')
 
 
<div class="container p-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Project</li>
  </ol>
</nav>
    <div class="row gx-5 ">
      
      <div class="col-md-12">
      <br><br>
      <h3 class="text-start">The Client</h3>
      <div class="d-flex">
        
        <span>Roderick P. Go, MIT, PhD the client of the CCS Website with content management system project and the dean of the College of Computing who oversees and manage the ccs college. earned his Doctor of Philosophy degree in Technology Management Program (PhdD TM) from Zamboanga City State Polytechnic College and his Master Information Technology degree from the Mindanao University of Science and Technology in Cagayan de Oro City Philippines. Prior to that, he received his Bachelor of Science in Computer Science Degree from STI Zamboanga in 2005. 
        In addition to his computer studies, Dr. Go has also pursued Professional Course in Education and Master in Public Administration in Western Mindanao State University and a Bachelor of Science Commerce, Accounting from Zamboanga A.E Colleges in the Philippines.
        </span>
      </div>
      <br>
      </div>
    
      <div class="col-md-6">
 
        <img class="mb-5"  src="{{ url('/images/collage.jpg') }}" alt="" class="img-fluid img-thumbnail mt-4 mb-2">
      </div>
      <div class="col-md-6">
      <h3 class="text-start">The System</h3>
      <div class="d-flex">
        <span>The College of Computing Studies Website with Content Management System engage in developing using Laravel, Livewire and Bootstrap Framework. 
        The Content Management System of CCS stores the data such as text and images that helps a website provide detailed information and the Alumni Tracer Study System, a survey of alumni or graduates from the CCS College.
      </span>
      </div>  
      <br>
      <span>Technology Used:</span>
      <div class="social-link text-center">
            <img class="mb-5" style="height:40px" src="{{ url('/images/laravel.png') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Laravel" >
            <img class="mb-5" style="height:40px" src="{{ url('/images/livewire.png') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Laravel Livewire" >
            <img class="mb-5" style="height:40px" src="{{ url('/images/Bootstrap.png') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="Bootstrap">
      </div>
        
      </div>
   

      <div class="col-md-4">
      </div> 
      <div class="col-md-4">
      <h3 class="text-center">Meet the <i>Developer</i></h3>
      <img  src="{{ url('/images/az.jpg') }}" alt="">
      <div class="p-3 d-flex">
            <span>Azlina Zanariah M. Malik, a BSIT Student from class A S.Y 2022-2023 who develop this project for the partial fulfillment of the requirements in 
             IT 132 Software Engineering.
            </span>
        </div>
       <div class="social-link text-center">
            <a href="https://www.linkedin.com/in/azlina-zanariah-malik-394115163" style="color:#1d7e43;" class="social-link-ln" ><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-linkedin social-icon" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
            </a> 
            <a href="https://github.com/AzlinaZanariahMalik" style="color:#1d7e43;" class="social-link-git"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github social-icon" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </svg>
            </a>
      </div>
      </div>

      <div class="col-md-4">
      </div> 
      
      <div class="col-md-12"><br>
      <h3 class="text-start">Class Adviser</h3>
      <span>Sir Jason A. Catadman, a WMSU CCS IT Instructor and also a subject instructor for this project who is responsible for imparting knowledge to the students and are well-versed in different topics related to his area of teaching.</span>
      </div>

     

    </div>
    </div>
  </div>       
<br><br>  
@endsection
@push('scripts')
<script>
    $(function(){
       $('[rel="tooltip"]').tooltip();
    });
</script>
@endpush