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
@if($organization->count())  
 <!--fetch  table database---> 
 @foreach($organization as $org)
<div class="card mb-3 card-news" style="max-width: 100%;">
            <div class="row g-0">
            <div class="col-md-4">
                @if (!empty($org->org_image))
                        <img  src="{{ url('storage/photos/Organization/'. $org->org_image)}}" style="width:  150px;" class="img-fluid img-thumbnail mx-auto d-block" />
                    @else
                    No Image
                    @endif
               
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$org->org_name}}</h5>
                  <p class="card-text">{!! Str::limit($org->org_desc, '50') !!}</p>
                 
                </div>
              </div>
            </div>
          </div>
@endforeach  
@endif        
</div>
{{ $organization->links()}}
</div>