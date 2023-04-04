<div>
<h5 class="p-3 web-title text-start">Certificate</h5>
@if($certification->count())  
 <!--fetch  table database---> 
 @foreach($certification as $cert)
   
    @if (!empty($cert->cert_image))
    <img src="{{ url('storage/photos/Certification/'. $cert->cert_image)}}"   width="15" height="15" class="card-img-top" alt="...">
    @else
        
    @endif
    @endforeach  
@endif    
</div>
 