<div>
            <div class="data">
				<div class="content-data"> 
                <div class="info">
                    
                    <form wire:submit.prevent="UpdateUserImg()" method="post" class="row g-3" enctype="multipart/form-data">
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
                                
                                <label class="form-label">Profile Image</label>
                                 <br>
                                 @if (!empty($picture))
                                <img  src="{{ url('storage/photos/user/'. $picture)}}" style="width:  150px; height:150px; object-fit:cover;" class="img-fluid img-thumbnail mt-4 mb-2"/>
                                @else
                                <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
                                alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                                style="width: 150px;  z-index: 1">
                                @endif
                                 
                             </div>
                             <div class="col-md-12">
                                
                              
                                <br>
                  
                                <input class="form-control" type="file" wire:model="picture">
                            
                                @error('picture')
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
                    
                    <form wire:submit.prevent="UpdatePersonalDetails()" method="post" class="row g-3" >
                    @csrf
                        <h3>Personal Details</h3>
                        @if(Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success')}}
                            <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif      
                        <div class="col-md-4">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control"  value="" wire:model='name'>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Extended Name</label>
                            <input type="text" class="form-control"  value="" placeholder="example: MIT, PhD" wire:model='extended_name'>
                            @error('extended_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Username</label>
                            <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" aria-describedby="inputGroupPrepend" wire:model='username'  disabled>
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" wire:model='designation'>
                            
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" wire:model='email' disabled>
                            
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" wire:model='title' disabled>
                            
                        </div>
                        
                        <div class="col-md-4">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control" wire:model='department' disabled>
                            
                        </div>
                        <h3>Qualification</h3>
                        <div class="col-md-12" wire:ignore>
                            <textarea type="textarea" class="form-control" rows="12" id="qualification" wire:model.lazy="qualification">{{$qualification}}
                            </textarea>
                        </div>
                        @error('qualification')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
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
        .create(document.querySelector('#qualification'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('qualification', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 

