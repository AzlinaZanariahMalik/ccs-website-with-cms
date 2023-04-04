<div>
<div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form class="row g-3" wire:submit.prevent='updateWebsiteGeneralSettings' method="POST">
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
                    <h3>College Website General Settings</h3>
                    <div class="col-md-6">
                        <label class="form-label">College Website Name</label>
                        <input type="text" class="form-control"  value="" placeholder="Enter Website Name" wire:model='website_name'>
                        @error('website_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror    
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">College Website Abbreviation Name</label>
                        <input type="text" class="form-control" value="" placeholder="example: CCS" wire:model='website_abbv'>
                        @error('website_abbv')
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
