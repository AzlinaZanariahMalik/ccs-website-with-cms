<div >
   
    <form  wire:submit.prevent="LoginHandler()" method="post" autocomplete="off">
    @csrf
            <div class="text-center">
                <img class="mb-5" style="height:90px" src="{{ url('/images/CCS_logo.png') }}" alt="">
                
                <h5 class="mb-5">Welcome, Please Login</h5>
            </div>
            @if(Session::get('fail'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('fail')}}
            </div>
            @endif                  
            <div class="mb-3">
                <label class="required form-label">Email address </label>
                    <div class="input-group has-validation">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email"  >
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
            </div>
            <div class="mb-3">
               
                <label class="required form-label">Password </label>
                    <div class="input-group has-validation">
                    
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" wire:model="password">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
                                
            <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input type="checkbox" id="showPassword" style="text-end">
                    <label class="form-check-label" for="form2Example31"> Show Password </label>
                </div>
                </div>

                <div class="col">
               
                <a href="{{route('forgot-password') }}">Forgot password?</a>
                </div>
                
            </div>

               
        
            </div> 
                               
            <div class="text-center">
                <button type="submit" class="btn btn-main form-control" wire:loading.attr="disabled">
                    <span wire:loading.remove >Login</span>
                    <span wire:loading>Logging in...</span></button>
            </div>
                                
    </form>
</div>
@push('scripts') 
<script>
   document.getElementById('showPassword').onclick = function() {
    if ( this.checked ) {
       document.getElementById('password').type = "text";
    } else {
       document.getElementById('password').type = "password";
    }
};

</script>
@endpush 