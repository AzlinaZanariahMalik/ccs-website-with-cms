<div>
    <!--Row End--->
    <form wire:submit.prevent="CreateCertification()" method="post" class="row g-3" >
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
                        
              

                    <div class="mb-3">
                            <label class="required form-label">Certification Logo</label>
                             <br>
                             <input class="form-control @error('cert_image') is-invalid @enderror" type="file" wire:model="cert_image">
                             @error('cert_image')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                             
                         </div>
                   
                        
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Add</span><span wire:loading >Adding...</span></button> 
                </form>
                </div> 
</div>

