<div>
       <h1 class="text-start text-capitalize">{{$an->an_title}}</h1>
     
        
       <br> <br>
       @if (!empty($an->an_image))
       <img src="{{ url('storage/photos/announce/'. $an->an_image)}}"   style="width:25rem; object-fit:cover;" class="img-fluid img-thumbnail mx-auto d-block"> 
        @else
                        
        @endif

      

       <p  style="text-align:justify !important; text-justify: inter-word;">{!! $an->an_desc !!}</p>

   

</div>
 