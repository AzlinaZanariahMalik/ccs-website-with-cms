<div>
    <!--Row End--->
    <form wire:submit.prevent="CreateAcademicProgram()" method="post" class="row g-3" >
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
                        <label  class="form-label">Program Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="program_name" placeholder="Enter Name of Academic Program">
                            </div>
                            @error('program_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Program Abbreviation Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="program_abbv" placeholder="Example BSIT">
                            </div>
                            @error('program_abbv')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Program Description</label>
                            <div class="input-group has-validation">
                                <textarea type="textarea" class="form-control" wire:model="program_desc" placeholder="Enter Description here...">
                                </textarea>
                            </div>
                            @error('program_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Program Type</label>
                        <select class="form-select" aria-label="Default select example" wire:model='program_type'>
                            <option value="">Select Program Type</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="graduate">Graduate</option>
                               
                        </select>
                            @error('program_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                        
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Add</span><span wire:loading >Adding...</span></button> 
                </form>
                </div> 
</div>
 