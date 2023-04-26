<div>
<h1 class="text-start text-capitalize">{{$org->org_name}}</h1>
      
       <br><br>
        <img src="{{ url('storage/photos/organization/'. $org->org_image)}}"   style="width:25rem; object-fit:cover;" class="img-fluid img-thumbnail mx-auto d-block"> 
       <br> <br>
       <p  style="text-align:justify !important; text-justify: inter-word;">{!! $org->org_desc !!}</p>
      
      
</div>
