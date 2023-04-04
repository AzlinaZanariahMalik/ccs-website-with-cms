<div >
   
    <form  wire:submit.prevent="ResetPasswordHandler()" method="post" autocomplete="off">
    @csrf
            <div class="text-center">
                <img class="mb-5" style="height:90px" src="{{ url('/images/CCS_logo.png') }}" alt="">
                
                <h5 class="mb-5">Reset Password</h5>
            </div>
            @if(Session::get('success'))
            <div class="alert alert-danger"role="alert">
                {{ Session::get('success')}}
            </div>
            @elseif (Session::get('fail'))
            <div class="alert alert-danger"role="alert">
                {{ Session::get('fail')}}
            </div>
            @endif      

            <input type="hidden" class="form-control" wire:model="email"  >
            <div class="mb-3">
                <label class="required form-label">New Password </label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" wire:model="new_password">
                    </div>
                    @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="required form-label">Confirm New Password </label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" wire:model="confirm_password">
                    </div>
                    @error('confirm_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
                                
            <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Checkbox 
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>-->
                 </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Simple link -->
                        <a href="{{route('admin.login') }}">back to login</a>
                </div>
            </div> 
                               
            <div class="text-center">
                <button type="submit" class="btn btn-main form-control"><span wire:loading.remove >Reset</span><span wire:loading >Resetting...</span></button>
            </div>
                                
    </form>
</div>
 