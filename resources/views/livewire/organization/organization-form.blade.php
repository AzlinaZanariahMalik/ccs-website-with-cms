<div>
    <!--Row End--->
    <form wire:submit.prevent="CreateOrganization()" method="post" class="row g-3" >
                @csrf 
                 
                       
                        
                        
                    <div class="mb-3">
                        <label  class="required form-label">Organization Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('org_name') is-invalid @enderror" wire:model="org_name" placeholder="Enter Name of Organization">
                            </div>
                            @error('org_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
            
                    <div class="mb-3">
                        <label  class="required form-label">Organization Description</label>
                            <div class="input-group has-validation">
                                <textarea type="textarea" class="form-control @error('org_desc') is-invalid @enderror" wire:model="org_desc" placeholder="Enter Description here...">
                                </textarea>
                            </div>
                            @error('org_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>

                    <div class="mb-3">
                            <label class="required form-label">Organization Logo</label>
                             <br>
                             <input class="form-control @error('org_image') is-invalid @enderror" type="file" wire:model="org_image">
                             @error('org_image')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                             
                         </div>
                    <div class="mb-3">
                        <label  class="form-label">Organization Link</label>
                            <div class="input-group has-validation">
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="org_link" placeholder="Enter Organization Website Link">
                            </div>
                            </div>
                            @error('org_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                        
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Add</span><span wire:loading >Adding...</span></button> 
                </form>
                </div> 
</div>


 