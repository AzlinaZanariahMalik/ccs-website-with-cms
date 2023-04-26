<div>
<div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="UpdateDeanCorner()" method="post" class="row g-3" enctype="multipart/form-data">
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
                            <label class="form-label">Dean's Corner Title</label>
                            <input type="text"  class="form-control"  placeholder="Enter News Title" wire:model="dean_title">
                        
                          
                           @error('dean_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                           
                       </div>
                       <div class="col-md-12" wire:ignore>
                            <label class="form-label">Dean's Corner Description</label>
                            <textarea type="textarea" cols="80" class="form-control" rows="12" id="dean_desc"  wire:model.lazy="dean_desc">{{$dean_desc}}
                            </textarea>
                        
                          
                           @error('dean_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                           
                       </div>

                    
                        <br>
                        <div class="col-12">
                            <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
                        </div>
                </form>
               
            </div>

            <div class="info">
                    
                <form wire:submit.prevent="UpdateDeanCornerImg()" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf
                    
                    @if(Session::get('successimg'))
                        <div class="alert alert-success"role="alert">
                            {{ Session::get('success')}}
                            <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (Session::get('failimg'))
                        <div class="alert alert-danger"role="alert">
                            {{ Session::get('fail')}}
                        </div>
                    @endif    
                        
                        
                        <div class="col-md-12">
                            
                           <label class="form-label">Dean's Image</label>
                            <br>
                            <input class="form-control" type="file" wire:model="dean_image">
                            @error('dean_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                        </div>
                        <div class="col-md-12">
                            
                            <label class="form-label">Dean's Image</label>
                             <br>
                             @if (!empty($dean->dean_image))
                                 <img width="100px" src="{{ url('storage/photos/dean/'. $dean->dean_image)}}" style="width:  150px;" class="img-fluid img-thumbnail mx-auto d-block"/>
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
        .create(document.querySelector('#dean_desc'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('dean_desc', editor.getData());
            })
        })
        .catch( error => {
            console.error( error );
        } );

   
</script>
@endpush 