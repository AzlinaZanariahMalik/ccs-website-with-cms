<div>
<div wire:ignore.self class="modal fade" id="editUsersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="UpdateUsers()" method="post" class="row g-3">
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
                    @elseif (Session::get('offline'))
                        <div class="alert alert-danger"role="alert">
                            {{ Session::get('offline')}}
                        </div>
                    @endif 

                    <input type="text" class="form-control" wire:model="select_user_id" >
                    <div class="mb-3">
                        <label  class="required form-label">Name </label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="Enter Full Name">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                   
                    <div class="mb-3">
                        <label  class="required form-label">Email</label>
                            <div class="input-group has-validation">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="Enter Email">
                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label  class="required form-label">User Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" wire:model="username" placeholder="Enter Username">
                            </div>
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                              
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Designation</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="designation" placeholder="Enter Designation">
                            </div>       
                    </div>
                  

                    <div class="mb-3">
                        <label  class="required form-label">User Type</label>
                        <select class="form-select @error('user_type') is-invalid @enderror" aria-label="Default select example" wire:model='user_type'>
                            
                                @foreach(\App\Models\User_type::all() as $uType)
                                    <option value="{{ $uType->id }}">{{ $uType->name}}</option>
                                @endforeach
                        </select>
                            @error('user_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label  class="required form-label">Publish Permission</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="publishpermisson" value="1" wire:model='publish_permission' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="publishpermission" value="0" wire:model='publish_permission' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    No
                                </label>
                            </div>
                            <div class="mb-3">
                                @error('publish_permission')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                           
                            
                    </div>

                   
           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Updating+</span><span wire:loading >Updating...</span></button> 
                </form>
                </div>
                </div>
            </div> 

          
       
       
        </div>
</div>
</div>
