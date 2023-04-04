<div>
<h2 class="p-3 web-title">Dean's Corner</h2>
            <div class=" d-flex justify-content-center"> 
                
              <div class="card mb-3 card justify-content-center" style="width: 16rem;">
                <div class="card-body">
                <img src="{{ url('storage/photos/dean/'. $dean->dean_image)}}"   width="15" height="15" class="card-img-top" alt="...">
                <h6 class="card-text">{{$dean->dean_title}}</h6>
                  <p class="card-text">{!! Str::limit($dean->dean_desc, '50') !!}</p>
                </div>
              </div>
</div>
</div>

  