    
<div >

<div class="data">
		<div class="content-data"> 
                  
            <div class="info" >
                    
            <form wire:submit.prevent="UpdateAcademicProgram()" method="post" class="row g-3" >
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
                        <label  class="form-label">Program Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="program_name" placeholder="Enter Name of Academic Program">
                            </div>
                            @error('program_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
               
                    <div class="col-md-12">
                        <label  class="form-label">Program Abbreviation Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="program_abbv" placeholder="Example BSIT">
                            </div>
                            @error('program_abbv')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>  
                    
                    <div class="col-md-12" wire:ignore>
                            <textarea type="textarea" class="form-control" rows="12" id="program_desc" wire:model.lazy="program_desc">{{$program_desc}}
                            </textarea>
                    </div>
                        @error('program_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <div class="col-md-12">
                        <label  class="form-label">Program Type</label>
                        <select class="form-select" aria-label="Default select example" wire:model='program_type'>
                            <option value="">Select Program Type</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="graduate">Graduate</option>
                               
                        </select>
                            @error('program_type')
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
        .create(document.querySelector('#program_desc'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('program_desc', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 