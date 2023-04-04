<div>
    <div class="info">
                        
        <form class="row g-3"  wire:submit.prevent='UpdateCollegeSocialLink()' method="post">
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
                <h3>College Social Media Links</h3>
                <div class="col-md-12">
                    <label class="form-label">Facebook link</label>
                    <input type="text" class="form-control"  value="" placeholder="Enter Facebook Link" wire:model='college_fb'>
                    @error('college_fb')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror    
                    <br>
                    <label class="form-label">Twitter Link</label>
                    <input type="text" class="form-control"  value="" placeholder="Enter twitter Link" wire:model='college_twit'>   
                    @error('college_twit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror       
                 </div>
                    
                <div class="col-12">
                    <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
                </div>
        </form>
    </div>  
</div>
 