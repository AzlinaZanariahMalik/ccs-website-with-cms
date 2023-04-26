<div >
    <div class="card">
        <div class="card-body p-5 ">
                <form wire:submit.prevent="LoginHandler()" method="post" autocomplete="off">
                @csrf
                
                    <div class="text-center">
                        <img class="mb-5" style="height:90px" src="{{ url('/images/alumni.jpg') }}" alt="">
                        
                        <h5 class="mb-5">Welcome, Please Sign In</h5>
                    </div>
                    @if(Session::get('success'))
                        <div class="alert alert-success"role="alert">
                            {{ Session::get('success')}}
                            <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(Session::get('fail'))
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
                        <div class="col d-flex justify-content-end">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input type="checkbox" id="showPassword" style="text-end">
                                <label class="form-check-label" for="form2Example31"> Show Password </label>
                            </div>
                           </div>
                    </div>
                                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-main form-control"><span style="color:white;" wire:loading.remove >Sign In</span><span wire:loading >Signing In...</span></button>
                    </div>
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                       
                        <span>Don't have an Account? <a style="color:#0d3a0d;" href="{{route('alumni-tracer-study.sign-up') }}">Sign Up</a> here</span>
                  
                        </div>
                         
                    </div>
                
                                        
            </form>         
        </div>
    </div> 
    
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
