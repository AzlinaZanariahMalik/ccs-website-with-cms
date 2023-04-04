<div>
            <div class="data">
				<div class="content-data"> 
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
                            <input type="text" class="form-control" aria-describedby="inputGroupPrepend" wire:model='username'>
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
                        
                        <div class="col-12">
                            <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
                        </div>
                        </form>
                    </div>

                    
                </div>
			</div>
</div>
