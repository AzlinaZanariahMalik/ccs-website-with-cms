<div>
    <form wire:submit.prevent='ForgotHandler()' method="post">
        <div class="text-center">
            <img class="mb-5" style="height:90px" src="{{ url('/images/CCS_logo.png') }}" alt="">
                <h5 class="mb-5">Forgot Password</h5>
            @if(Session::get('success'))
                <div class="alert alert-success"role="alert">
                    {{ Session::get('success')}}
                </div> 
            @endif                       
        </div>
            <p class="text-justify">Enter your account's Email Address below and click "send email" button. You will recieve an email
            that contains a link to reset a password.
            </p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
                <div class="input-group has-validation">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model='email'>
                </div>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
                               
       
                               
            <div class="text-center">
                <button type="submit" class="btn btn-main form-control"><span wire:loading.remove >Send</span><span wire:loading >Sending Email...</span></button>
            </div>
                                
    </form>
</div>
  