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
@if($department->count())  
 <!--fetch  table database---> 
 @foreach($department as $dept)
<div class="card mb-3 card-news" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                @if (!empty($dept->dept_image))
                        <img  src="{{ url('storage/photos/department/'. $dept->dept_image)}}" style="width:  150px;" class="img-fluid img-thumbnail mx-auto d-block" />
                    @else
                    No Image
                    @endif
               
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$dept->dept_name}}</h5>
                  <p class="card-text">{!! Str::limit($dept->dept_desc, '100') !!}</p>
                  <a href="{{route('department-show',[$dept->id,preg_replace('/\+/','-',urlencode($dept->dept_name))])}}" type="submit" class="readmore"> View </a> 
                </div>
              </div>
            </div>
          </div>
@endforeach  
@endif        
</div>
{{ $department->links()}}
</div>

