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
              
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$prog->program_name}}</h5>
                  <p class="card-text">{!! Str::limit($prog->program_desc, '50') !!}</p>
                 
                </div>
              </div>
            </div>
          </div>
@endforeach  
@endif        
</div>
{{ $program->links()}}
</div>

