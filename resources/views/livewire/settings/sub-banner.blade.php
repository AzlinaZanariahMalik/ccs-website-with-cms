<div>
<div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form class="row g-3" wire:submit.prevent='updateWebsiteBanner' method="POST">
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
                    <h3>Sub Banner</h3>
                    <div class="col-md-12">
                            @if (!empty($banner->website_banner))
                                 <img src="{{ url('storage/photos/logo-icon/'. $banner->website_banner)}}" style="width: 300px" class="img-fluid img-thumbnail mx-auto d-block"/>
                            @else
                            No Image
                            @endif
                     
                    <br>
                        <input class="form-control" type="file" id="formFile"  wire:model="ban"/>
                        
                         @error('ban')
                        <div class="alert alert-danger">{{ $message }}</div>
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
