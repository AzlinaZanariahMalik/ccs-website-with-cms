<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
       
        </div>
        <!---search --->
        <div class="col-md-4  float-right"> 
       
        </div>
        <!--search end-->
        </div>
       

        <div>
@if($program->count())  
 <!--fetch  table database---> 
 @foreach($program as $prog)
<div class="card mb-3 card-news" style="max-width: 100%;">
            <div class="row g-0">
              
            <div class="col-sm-8">
              <div class="card" >
              <a href="{{route('program.undergraduate',[$prog->id,preg_replace('/\+/','-',urlencode($prog->program_name))])}}" type="submit">
              <div class="card-body" style="background-color:#f7f7f7; color:#262626; margin-top:10px; height: 10rem; border-left: 5px solid #0d3a0d;
                  border-image: linear-gradient(to bottom, rgb(13, 58, 13,0) 25%,rgb(13, 58, 13,1) 25%,rgb(13, 58, 13,1) 75%,rgb(13, 58, 13,0) 75%);
                  border-image-slice: 1; ;
                  border-image-slice: 1;">
                  
                    <h5 class="card-title">{{$prog->program_name}} ({{$prog->program_abbv}}) </h5>
                    <p class="card-text">{!! Str::limit($prog->program_desc, '50') !!}</p>
                    
                  </div>
                </a>
                </div>
            </div>

            </div>
          </div>
@endforeach  
@endif        
</div>
{{ $program->links()}}
</div>
