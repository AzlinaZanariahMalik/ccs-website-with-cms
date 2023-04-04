<div>
  
         <div class="info">
                                          
            <form class="row g-3" method="POST" enctype="multipart/form-data" id="upload-logo" wire:submit.prevent="UpdateLogo()">
            @csrf
                <h3>College Logo</h3>
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
                            @if (!empty($logo->website_logo))
                                 <img width="100px" src="{{ url('storage/photos/logo-icon/'. $logo->website_logo)}}" style="width: 150px" class="img-fluid img-thumbnail mx-auto d-block"/>
                            @else
                            No Image
                            @endif
                     
                    <br>
                        <input class="form-control" type="file" id="formFile"  wire:model="website_logo"/>
                        <label class="form-label">Note: The Only File accepted is png</label>
                         @error('website_logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            
                </div>
                    
                        <div class="col-12">
                            <button class="btn btn-main" type="submit"><span wire:loading.remove >Save</span><span wire:loading >Saving...</span></button>
                        </div>
            </form>
         </div>  
   
</div>
