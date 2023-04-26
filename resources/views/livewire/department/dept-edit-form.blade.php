    
<div >
<div class="data">
		<div class="content-data"> 
                  
            <div class="info" >
                    
            <form wire:submit.prevent="UpdateDept()" method="post" class="row g-3" >
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
                        <label  class="required form-label">Department Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="dept_name">
                            </div>
                            @error('dept_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
 
                    <div class="col-md-12" wire:ignore>
                            <textarea type="textarea" class="form-control" rows="12" id="dept_desc" wire:model.lazy="dept_desc">{{$dept_desc}}
                            </textarea>
                    </div>
                        @error('dept_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                   
                        
                    <div class="col-md-12">
                        <label  class="form-label">Department Link</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="dept_link">
                            </div>
                            @error('dept_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>

                    <div class="col-12">
                        <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
                    </div>
                </form>
                <br><br>
                
            </div>
            <div class="info">
                    
                    <form wire:submit.prevent="UpdateDeptImg()" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                        
                        @if(Session::get('successimg'))
                            <div class="alert alert-success"role="alert">
                                {{ Session::get('successimg')}}
                                <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif (Session::get('failimg'))
                            <div class="alert alert-danger"role="alert">
                                {{ Session::get('failimg')}}
                            </div>
                        @endif    
                            
                           
                          
                            
                            <div class="col-md-12">
                                
                               <label class="form-label">Department Image</label>
                                <br>
                               
                              
                                
                                <input class="form-control" type="file" wire:model="dept_image">
                            
                                @error('dept_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                
                            </div>
                            <div class="col-md-12">
                                
                                <label class="form-label">deptnouncement Image</label>
                                 <br>
                                 @if (!empty($dept_image))
                                     <img width="100px" src="{{ url('storage/photos/department/'. $dept_image)}}" style="width:  150px;" class="img-fluid img-thumbnail mx-auto d-block"/>
                                @else
                                No Image
                                @endif
                                 
                             </div>
                            <br>
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
        .create(document.querySelector('#dept_desc'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('dept_desc', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 
