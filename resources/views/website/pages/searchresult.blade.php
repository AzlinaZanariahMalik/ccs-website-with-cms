@extends('website.layouts.pages-layout')
@section('title') {{'Search Result'}} @endsection

@section('content')
 
 <section id="parallax">
    <div class="row justify-content-center">
          <div class="gradient"></div>   
              @livewire('website.page.sub-banner')
            <div class="text-left">
                <h1 class="text-start">Search Result</h1>
                
            </div>
    </div>      
 
</section>
<div class="container p-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Search Result</li>
  </ol> 
</nav>
    <div class="row gx-5 ">
      
      <div class="col-md-8 " id="academic" >
      <div class="row mb-3">
        <div class="col-md-8  flex-start">
       
        </div>
      
        </div>
        

        <div>
            @if($searchNews->count())  
            <!--fetch  table database---> 
            @forelse($searchNews as $newsitem)
            <div class="card mb-3 card-news" style="max-width: 100%;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            @if (!empty($newsitem->feature_image))
                                    <img  src="{{ url('storage/photos/news/'. $newsitem->feature_image)}}" style="width:15rem; height:10rem; object-fit:cover;" class="img-fluid img-thumbnail mx-auto d-block" />
                                @else
                                No Image
                                @endif
                        
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{$newsitem->news_title}}</h5>
                            <p class="text-muted">{{ $newsitem->created_at->format('M d, Y H:i A')}}</p>
                            <p class="card-text">{!! Str::limit($newsitem->post, '100') !!}</p>
                            <a  href="{{route('news-post',[$newsitem->id,preg_replace('/\+/','-',urlencode($newsitem->news_title))])}}"class="readmore"> Read More </a> 
                            </div>
                        </div>
                        </div>
                    </div>
            @empty
            <div class="col-md-8">
                            
                <h3 class="card-title">No Search Results Found</h3>
                          
            </div>
            @endforelse
            @endif        
            </div>
            {{ $searchNews->links()}}
          
      </div>

      <div class="col-md-4 ">
       
        @livewire('website.page.page-certificate')
              
      </div>
    
    </div>
  </div>    

<br><br>
@endsection