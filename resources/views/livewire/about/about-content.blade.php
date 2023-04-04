<div wire:ignore> 
    <div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="UpdateAboutContent()" method="post" class="row g-3" >
                @csrf
                    
                    <h3>College Brief Description</h3>
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
                        
                        
                        <div class="col-md-12 "  >
                           
                            <textarea type="textarea" cols="80" class="form-control @error('about') is-invalid @enderror" rows="12" id="about" placeholder="Details....." wire:model='about'> {{$about_content->about}}
                            </textarea>
                            @error('about')
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
</div>
@push('scripts') 
<script>
    ClassicEditor
        .create(document.querySelector('#about'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('about', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 