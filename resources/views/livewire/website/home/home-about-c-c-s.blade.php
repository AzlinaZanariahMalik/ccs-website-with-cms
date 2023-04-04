<div>
<div class="container-fluid about-section">
  <div class="container p-3">
    <div class="row gx-5">
      <div class="col-md-8">
              
              <h2 class="p-3 web-title animate-text">< About {{ College_info()->website_abbv_name}} /></h2>
             
            <span class="text-justify">{!! Str::limit($homeabout->about, '350') !!}
            </span>
            <a href="/about-ccs"><p class="card-text"><small class="text-muted">See More</small></p></a>
          
          
 
    </div>  
   
      <div class="col-md-4 about-link">
         <a href="/vision-mission" class="p-3 web-title-link"> <h6 >Vision Mission</h6></a>
          <a href="/goals" class="p-3 web-title-link"> <h6 >College Goal</h6></a>
          <a href="/history" class="p-3 web-title-link"> <h6 >History</h6></a>
          <a href="/department" class="p-3 web-title-link"> <h6 >Department</h6></a>
          <a href="/faculty-and-staff" class="p-3 web-title-link"> <h6 >Faculty & Staff</h6></a>
         
        
      </div>
      

    </div>
  </div>
  </div>   

</div>
