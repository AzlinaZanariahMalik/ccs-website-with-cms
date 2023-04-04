<div>
<div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form class="row g-3" wire:submit.prevent='updateContact' method="POST">
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
                    <h3>College Contact</h3>
                    <div class="col-md-12">
                        <label class="form-label">Address:</label>
                        <input type="text" class="form-control"  value="" placeholder="Enter College Address" wire:model='college_address'>
                        @error('college_address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror    
                    </div>
                    <div class="col-md-8">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control"  value="" placeholder="Enter College Contact Email" wire:model='college_email'>
                        @error('college_email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror    
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telephone</label>
                        <input type="text" class="form-control" value="" placeholder="Enter College Telephone" wire:model='college_telephone'>
                        @error('college_telephone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror    
                    </div>
                     <div class="col-md-6">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" value="" placeholder="Enter College Contact Mobile" wire:model='college_mobile'>
                        @error('college_mobile')
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
