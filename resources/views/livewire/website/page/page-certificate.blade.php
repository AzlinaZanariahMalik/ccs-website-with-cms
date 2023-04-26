<div>
<h5 class="p-3 web-title text-center">Certificate</h5>
@if($certification->count())  
 <!--fetch  table database---> 
 @foreach($certification as $cert)
   
    @if (!empty($cert->cert_image))
    <img src="{{ url('storage/photos/Certification/'. $cert->cert_image)}}"   style="width:250px;" class="img-fluid img-thumbnail mx-auto d-block" >
    @else
        
    @endif
    @endforeach  
@endif    
</div>
  