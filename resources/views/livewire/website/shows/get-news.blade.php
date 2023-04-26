<div>
       <h1 class="text-start text-capitalize">{{$news->news_title}}</h1>
       <p class="text-muted text-capitalize">{{ $news->created_at->format('M d, Y H:i A')}} Written By: {{$news->userName->name}}</p>
       <br><br>
        <img src="{{ url('storage/photos/news/'. $news->feature_image)}}"   style="width:25rem; object-fit:cover;" class="img-fluid img-thumbnail mx-auto d-block"> 
       <br> <br>
       @php
              $images = App\Models\NewsImage::where('news_unique_id', $news->unique_id)->get();
       @endphp

      

       <p  style="text-align:justify !important; text-justify: inter-word;">{!! $news->post !!}</p>

        @foreach ($images as $item)
       <img src="{{ url('storage/photos/news/'. $item->image)}}"   style="width:100%; object-fit:cover;" class="img-fluid img-thumbnail mx-auto d-block"> 
       @endforeach

</div>
 