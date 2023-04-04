<div>
<div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="UpdateBanner()" method="post" class="row g-3" enctype="multipart/form-data">
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
                            <label class="form-label">College Tagline</label>
                           <input type="text"  class="form-control"  placeholder="Enter College Tagline" wire:model="banner_tagline">
                           </input>
                          
                           @error('banner_tagline')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                           
                       </div>
                        
                        <div class="col-md-12">
                            
                           <label class="form-label">Banner Image</label>
                            <br>
                            <input class="form-control" type="file" wire:model="banner_image">
                            @error('banner_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                        </div>
                        <div class="col-md-12">
                            
                            <label class="form-label">Banner Image</label>
                             <br>
                             @if (!empty($banner->banner_image))
                                 <img width="100px" src="{{ url('storage/photos/banner/'. $banner->banner_image)}}" style="width: 100%;" />
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