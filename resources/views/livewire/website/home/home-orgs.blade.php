<div>
 
<div class="data">
  <div class="content-data">
    <div class="info justify-content-center align-items-center h-100 "> 
  
   @foreach ($orgs as $org)
      <div class="d-flex flex-column text-center" >
      
      <a href="{{route('organization-show',[$org->id,preg_replace('/\+/','-',urlencode($org->org_name))])}}" type="submit">
        <img src="{{ url('storage/photos/organization/'. $org->org_image)}}" width="95" height="95" > 
      </a>
     
      </div>
     @endforeach
    
    </div>
  </div>
</div> 
</div>
