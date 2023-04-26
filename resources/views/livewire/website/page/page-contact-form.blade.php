<div class="container p-3">
    <div class="row gx-5 ">
      
      <div class="col-md-12 ">
      <form wire:submit.prevent="SendMessage()" method="post" >
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
        <h1>Contact Us</h1>
            <div class="col-md-6">
                <label class="required form-label">Your Name </label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"  placeholder="Enter your Name here">
                    </div>
                            
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <div class="col-md-6">
                <label class="required form-label">Your Email </label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" wire:model="email"  placeholder="Enter your Email here">
                    </div>
                            
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <div class="col-md-6">
                <label class="required form-label">Your Message </label>
                    <div class="input-group has-validation">
                        <textarea type="text" row="12" style="height:150px" class="form-control @error('message') is-invalid @enderror" wire:model="message" placeholder="Enter your Mesage here"  >
                        </textarea>
                    </div>
                            
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
        <br><br>
        <div class="col-md-6">
            <div class="text-center" >
                <button class="btn btn-main form-control"  type="submit"><span style="color:white;" wire:loading.remove >Send</span><span style="color:white;" wire:loading >Sending...</span></button>
            </div>
      </form>
      </div>
    
    </div>
  </div>
