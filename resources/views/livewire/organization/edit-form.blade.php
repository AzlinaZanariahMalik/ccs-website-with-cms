    
<div >
<div class="data">
		<div class="content-data"> 
                  
            <div class="info" >
                    
            <form wire:submit.prevent="UpdateOrg()" method="post" class="row g-3" >
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
                        <label  class="required form-label">organization Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="org_name">
                            </div>
                            @error('org_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
 
                    <div class="col-md-12" wire:ignore>
                            <textarea type="textarea" class="form-control" rows="12" id="org_desc" wire:model.lazy="org_desc">{{$org_desc}}
                            </textarea>
                    </div>
                        @error('org_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                   
                        
                    <div class="col-md-12">
                        <label  class="form-label">organization Link</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="org_link">
                            </div>
                            @error('org_link')
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
                    
                    <form wire:submit.prevent="UpdateOrgImg()" method="post" class="row g-3" enctype="multipart/form-data">
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
                                
                               <label class="form-label">organization Image</label>
                                <br>
                               
                              
                                
                                <input class="form-control" type="file" wire:model="org_image">
                            
                                @error('org_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                
                            </div>
                            <div class="col-md-12">
                                
                                <label class="form-label">deptnouncement Image</label>
                                 <br>
                                 @if (!empty($org_image))
                                     <img width="100px" src="{{ url('storage/photos/Organization/'. $org_image)}}" style="width:  150px;" class="img-fluid img-thumbnail mx-auto d-block"/>
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
        .create(document.querySelector('#org_desc'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('org_desc', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 

