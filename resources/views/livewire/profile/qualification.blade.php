<div>
    <div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form class="row g-3" wire:submit.prevent='userChangePassword()' method="post">
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
                    <h3>Qualifications</h3>
                    <div class="col-md-4">
                        <label class="form-label">Current Password</label>
                        <input type="password" class="form-control"  value="" placeholder="Enter Current Password" wire:model='current_password'>
                        @error('current_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror    
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" value="" placeholder="Enter New Password" wire:model='new_password'>
                        @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror    
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" value="" placeholder="Enter Confirm New Password" wire:model='confirm_new_password'>
                        @error('confirm_new_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror   
                    </div>
                    <div class="col-md-4">
                    
                    </div>
                    <div class="col-md-4">
                        
                           
                    </div>
                    <div class="col-12">
                        <button class="btn btn-main" type="submit"><span wire:loading.remove >Change Password</span><span wire:loading >Changing Password...</span></button>
                    </div>
                </form>
            </div>               
        </div>
	</div>
</div>
