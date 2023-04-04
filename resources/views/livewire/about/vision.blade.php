<div wire:ignore>
  
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="UpdateVisionContent()" method="post" class="row g-3" >
                @csrf
                    
                      
                        
                   
                        <div class="col-md-12 ">
                           <h3>Vision</h3>
                            <textarea type="textarea" cols="80" class="form-control" rows="12" id="vision" placeholder="Details....." wire:model='vision'>{{$vismin->vision}}
                            </textarea>
                            @error('vision')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        
                        
                        <div class="col-12">
                            <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
                        </div>
                    
                </form>
          
        </div>           
    </div>
</div>
@push('scripts') 
<script>
    ClassicEditor
        .create(document.querySelector('#vision'),{
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