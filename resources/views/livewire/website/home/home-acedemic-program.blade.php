<div>
<div class="container main-tabs ">
      <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-undergraduate" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><h5>Undergraduate</h5></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-graduate" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><h5>Graduate</h5></button>
      </li>
    </ul>
  </div>
  <div class="container main-tabs ">
 
  <div class="tab-content" id="pills-tabContent">
   
   <div class="tab-pane fade show active" id="pills-undergraduate" role="tabpanel" aria-labelledby="pills-home-tab">
    
     <div class="row">  
     @if($academicprogram->count())  
     @foreach($academicprogram as $program)
         @if($program->program_type == 'undergraduate')
     <div class="col-sm-4">
       <div class="card " >
     <a href="{{route('program.undergraduate',[$program->id,preg_replace('/\+/','-',urlencode($program->program_name))])}}" type="submit">
      <div class="card-body" style="background-color:#f7f7f7; color:#262626; margin-top:10px; height: 10rem; border-left: 5px solid #0d3a0d;
         border-image: linear-gradient(to bottom, rgb(13, 58, 13,0) 25%,rgb(13, 58, 13,1) 25%,rgb(13, 58, 13,1) 75%,rgb(13, 58, 13,0) 75%);
         border-image-slice: 1; ;
         border-image-slice: 1;">
          
           <h5 class="card-title">{{$program->program_name}} ({{$program->program_abbv}}) </h5>
           <p class="card-text">{!! Str::limit($program->program_desc, '50') !!}</p>
           
         </div>
       </a>
       </div>
     </div>
       @endif 
   @endforeach
   @endif 
   </div>
    
   </div>  
  
   <div class="tab-pane fade" id="pills-graduate" role="tabpanel" aria-labelledby="pills-profile-tab">
   <div class="row">  
     @if($academicprogram->count())  
     @foreach($academicprogram as $program)
         @if($program->program_type == 'graduate')
         <div class="col-sm-4">
       <div class="card" >
      
         <a href="{{route('program.graduate',[$program->id,preg_replace('/\+/','-',urlencode($program->program_name))])}}" type="submit">
         <div class="card-body" style="background-color:#f7f7f7; color:#262626; margin-top:10px; height: 10rem; border-left: 5px solid #0d3a0d;
         border-image: linear-gradient(to bottom, rgb(13, 58, 13,0) 25%,rgb(13, 58, 13,1) 25%,rgb(13, 58, 13,1) 75%,rgb(13, 58, 13,0) 75%);
         border-image-slice: 1; ;
         border-image-slice: 1;">
            <h5 class="card-title">{{$program->program_name}} ({{$program->program_abbv}}) </h5>
            <p class="card-text">{!! Str::limit($program->program_desc, '50') !!}</p>
         
           
         </div>
       </a>
       </div>
     </div>
       @endif 
   @endforeach
   @endif 
   </div>
   </div>
 
 </div> 
  <!--End-->
  </div>
   

</div>
 