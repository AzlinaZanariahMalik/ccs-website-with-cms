<div>
    <!--Row End--->
    <form wire:submit.prevent="CreateDepartment()" method="post" class="row g-3" >
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
                        <label  class="required form-label">Department Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('dept_name') is-invalid @enderror" wire:model="dept_name" placeholder="Enter Name of Department">
                            </div>
                            @error('dept_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
            
                    <div class="mb-3">
                        <label  class="required form-label">Department Description</label>
                            <div class="input-group has-validation">
                                <textarea type="textarea" class="form-control @error('dept_desc') is-invalid @enderror" wire:model="dept_desc" placeholder="Enter Description here...">
                                </textarea>
                            </div>
                            @error('dept_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>

                    <div class="mb-3">
                            <label class="required form-label">Department Logo</label>
                             <br>
                             <input class="form-control @error('dept_image') is-invalid @enderror" type="file" wire:model="dept_image">
                             @error('dept_image')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                             
                         </div>
                    <div class="mb-3">
                        <label  class="form-label">Department Link</label>
                            <div class="input-group has-validation">
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="dept_link" placeholder="Enter Department Website Link">
                            </div>
                            </div>
                            @error('dept_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                        
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Add</span><span wire:loading >Adding...</span></button> 
                </form>
                </div> 
</div>

