@push('styles')
 <style>
    .announce{
        min-height:15rem;
        overflow: auto;
    }
    .an{
        color:#0d3a0d;

    }
    .an:hover{
        text-decoration:underline;
    }

 </style>
@endpush
<div>
    <div class="announce justify-content-center">
    @if($announce->count())  
     @foreach($announce as $an)
             <a class="an" href="{{route('current-announcement',[$an->id,preg_replace('/\+/','-',urlencode($an->an_title))])}}"><li>{{$an->an_title}}</li></a>
     @endforeach
    @endif 
    </div>
</div>
