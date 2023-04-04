<div>
@if($newsmanage->count())  
 <!--fetch  table database---> 
 @foreach($newsmanage as $newsitem )
<div class="card mb-3 card-news" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                @if (!empty($newsitem->feature_image))
                        <img  src="{{ url('storage/photos/news/'. $newsitem->feature_image)}}" style="width:  500px;" class="img-fluid img-thumbnail mx-auto d-block" />
                    @else
                    No Image
                    @endif
               
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$newsitem->news_title}}</h5>
                  <p class="card-text">{{ Str::limit($newsitem->post, '100')}}<a class="readmore"> Read More </a> </p>
                 
                </div>
              </div>
            </div>
          </div>
@endforeach  
@endif        
</div>
</div>
