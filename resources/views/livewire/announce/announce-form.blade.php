    
<div >

<div class="data">
		<div class="content-data"> 
                  
            <div class="info" >
                    
            <form wire:submit.prevent="CreateAnnouncement()" method="post" class="row g-3" >
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
                
                        
                        
                    <div class="col-md-12">
                        <label  class="form-label">Announcement Title</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="an_title">
                            </div>
                            @error('an_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
               
                   
                    
                    <div class="col-md-12" wire:ignore>
                            <textarea type="textarea" class="form-control" rows="12" id="an_desc" wire:model.lazy="an_desc">{{$an_desc}}
                            </textarea>
                    </div>
                        @error('an_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <div class="col-md-12">
                        <label  class="form-label">Announcement For</label>
                        <select class="form-select" aria-label="Default select example" wire:model='an_for'>
                            <option value="">Select Announcement For</option>
                            <option value="public">Public</option>
                            <option value="faculty">Faculty</option>
                               
                        </select>
                            @error('an_for')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    <div class="col-md-12">
                                
                               <label class="form-label">Announcement Image</label>
                                <br>
                               
                              
                                
                                <input class="form-control" type="file" wire:model="an_image">
                            
                                @error('an_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                
                            </div>
                        
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
        .create(document.querySelector('#an_desc'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('an_desc', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 