
<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
            <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addUsersModal">Add User</button>
        </div>
        <!---search --->
        <div class="col-md-4  float-right">
        <form>
            <div class="mb-3 float-right">
            <input class="form-control " type="text" placeholder="Search Here..." wire:model='search'>
            </div>
        </form>
        </div>
        <!--search end-->
        </div>
        <!--Row End--->

        <!---User Table-->
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
            
        <div class="table-responsive-sm">       
        <table class="table table-light">
            <thead>
                <tr>
                
                <th scope="col">Name</th>
                <th scope="col">User Type</th>
                <th scope="col">Email</th>
                <th scope="col">Publish Permission</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
               <!--fetch users from users table database--->
                @forelse ($users as $user)
                <tr>
                
                <td>{{$user->name}}</td>
                <td>{{$user->userType->name}}</td>
                <td>{{$user->email}}</td>
                @if($user->publish_permission =='1')
                    <td>Yes</td>
                @else
                    <td>No</td>
                @endif  
                <td>
                    <a href="#" wire:click.prevent="editUser({{$user}})"  class="btn btn-success"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></a>
                    <button class="btn btn-danger"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button>
                </td>
                </tr>
                @empty
                <h1 class="text-center">No Users Found</h1>
                @endforelse
                
            </tbody>
        </table>
        
        </div> {{ $users->links()}}
        <!--responsive table-->

<!--MODALS--->

      <!--Add User Modals---->
     <div  wire:ignore.self class="modal modal-blur fade" id="addUsersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centerd">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="addUsers()" method="post" class="row g-3">
            @csrf
                    
                   

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
                            <option value="">Select User Type</option>
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
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Add</span><span wire:loading >Adding...</span></button> 
                </form>
                </div>
                </div>
            </div> 

        <!---End---->
     


              <!--Edit User Modals---->
             
      <div wire:ignore.self class="modal modal-blur fade" id="editUsersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centerd" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="updateUsers()" method="post" class="row g-3">
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

                    <input type="hidden" wire:model="user_id">
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
                            
                                @foreach(\App\Models\User_type::all() as $user_type)
                                    <option value="{{ $user_type->id }}">{{ $user_type->name}}</option>
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
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button> 
                </form>
                </div>
                </div>
            </div> 

       
        </div>
        </div>

     
      
</div>
</div>
@push('scripts')
    <script>
        $(window).on('hidden.bs.modal', function(){
            Livewire.emit('resetForms');
        });
        window.addEventListener('hide_add_user_modal', function(event){
            $('#addUsersModal').modal('hide');
        });
		window.addEventListener('openEditModal', function(event) {
            $('#editUsersModal').modal('show');
        });
        window.addEventListener('hideEditModal', function(event) {
            $('#editUsersModal').modal('hide');
        });
    </script>
@endpush