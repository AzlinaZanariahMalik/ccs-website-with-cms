<div>
<h2 class="p-3 web-title text-center ">{{$dean->dean_title}}</h2>
            <div class=" d-flex justify-content-center"> 
              <div class="card mb-3 card justify-content-center" style="width: 16rem;">
                <div class="card-body">
                <img src="{{ url('storage/photos/dean/'. $dean->dean_image)}}"   style="width:15rem; height:10rem; object-fit:cover;" class="img-fluid img-thumbnail mx-auto d-block">
                  <p class="card-text">{!! Str::limit($dean->dean_desc, '50') !!}</p>
                </div>
              </div>
</div>
</div>

  