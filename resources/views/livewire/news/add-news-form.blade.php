<div wire:ignore>
<div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="CreateNews()" method="post" class="row g-3" enctype="multipart/form-data">
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
                        
                        <div class="col-md-12 ">
                            <label class="form-label">News Title</label>
                           <input type="text"  class="form-control"  placeholder="Enter News Title" wire:model="news_title">
                           </input>
                          
                           @error('news_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                           
                       </div>
                       <div class="col-md-12" >
                           
                            <textarea type="textarea" cols="80" class="form-control" rows="12" id="post"  placeholder="Details....." 
                              wire:model.defer="post"> 
                            </textarea>
                            @error('post')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            
                           <label class="form-label">Feature Image</label>
                            <br>
                            <input class="form-control" type="file" wire:model="feature_image">
                            @error('feature_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                        </div>
                        
                        <div class="col-12">
                            <button class="btn btn-main" type="submit"><span wire:loading.remove >Add</span><span wire:loading >Adding...</span></button>
                        </div>
                </form>
            </div>
        </div>           
    </div>   

</div>
@push('scripts') 
<script>
    ClassicEditor
        .create(document.querySelector('#post'))
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('post', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 