<div>
<div class="data">
		<div class="content-data">  
        <h5 class="text-start">Highlight News</h5>
        <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#assignModal">Assign</button>
        <br>
        <div class="info justify-content-center align-items-center h-100"> 
        <div class="d-flex flex-column" >
        
        <br><br>
        <div  wire:ignore.self class="modal modal-blur fade" id="assignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centerd">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Assign Highlight News</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="AssignNews()" method="post" class="row g-3">
            @csrf
            @if(Session::get('success'))
                        <div class="alert alert-success"role="alert">
                            {{ Session::get('success')}}
                            <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (Session::get('fail'))
                        <div class="alert alert-danger"role="alert">
                            {{ Session::get('fail')}}
                        </div>
                    @endif   
                     <input type="hidden" value="true" autocomplete="off" wire:model='highlight'/>
                    <div class="col-md-12">
                        <label  class="required form-label">News</label>
                        <select class="form-select @error('news') is-invalid @enderror" aria-label="Default select example" wire:model='news'>
                            <option value="">Select News</option>
                                @foreach(\App\Models\News::where('status', 'like', '1')->get() as $unews)
                                    <option value="{{ $unews->id }}">{{ $unews->news_title}}</option>
                                @endforeach
        
                        </select>
                            @error('news')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            
                            
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Add</span><span wire:loading>Adding...</span></button> 
                </form>
                </div>
                </div>
            </div> 
        </div> 
       
        
       
           
        </div> 
        <div class="info justify-content-center align-items-center h-100"> 

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
                        <p class="text muted">{{ $newsitem->created_at->format('M d, Y H:i A')}}</p>
                        <a class="readmore"> <button wire:click="selectItem({{ $newsitem->id }}, 'delete')" class="btn btn-danger" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button></a> 
                        
                        </div>
                    </div>
                    </div>
                </div>
        @endforeach  
        @endif        
        </div>
        </div>
        </div> 
</div>



</div>

