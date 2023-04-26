    
<div >

<div class="data">
		<div class="content-data" style="width:100%" > 
                   
            <div class="info" >
                    
            <form wire:submit.prevent="UpdateVisionContent()" method="post" class="row g-3" >
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
                    <label  class="form-label">Vision Content</label>
                    <div class="col-md-12" wire:ignore>
                            <textarea type="textarea" class="form-control" rows="12" id="post" wire:model.lazy="vision">{{$vision}}
                            </textarea>
                    </div>
                        @error('history_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  
                        
                    </div>

                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button> 
                </form>
                
            </div>
            
        </div>
                   
    </div>   

</div>
@push('scripts') 
<script>
    ClassicEditor
        .create(document.querySelector('#post'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('vision', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 