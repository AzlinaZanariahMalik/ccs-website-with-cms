<div>
<div class="col-md-8  flex-start">
            <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addUsersModal">Assign Faculty</button>
</div>
<h3 class="text-center">Organizational Chart</h3>
<div class="data">
        <div class="content-data"> 
    <!--For Rank 1-->
    <div class="data">
        <div class="content-data"> 
        <h5 class="text-start">Rank 1</h5>
        <div class="info justify-content-center align-items-center h-100"> 
            
        @foreach ($users as $user)
        <div class="d-flex flex-column text-center" >
       
            @if($user->rank == '1')
               
                <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
                alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 150px; z-index: 1">
             
                <p>{{$user->name}}</p>
                <p>{{$user->designation}}</p>
                <p>{{$user->title}}</p>
                <p><button class="btn btn-success" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></button> 
                    <button wire:click="selectItem({{ $user->id }}, 'delete')" class="btn btn-danger" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button>
                </p>
                @elseif($user->rank == '1' and $user->rank == null)
                <div class="col-md-8  flex-center">
                    <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addUsersModal">Assign Faculty</button>
                </div>
                
            @endif
        </div> 
    
        @endforeach
        </div>
        </div>  
    </div>  

      <!--For Rank 2-->
    <div class="data">
        <div class="content-data"> 
        <h5 class="text-start">Rank 2</h5>
        <div class="info justify-content-center align-items-center h-100">
          
            @foreach ($users as $user)
                <div class="d-flex flex-column text-center" >
                   
                    @if($user->rank == '2')
                    <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
                    alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
                    style="width: 150px; z-index: 1">
                
                    <p>{{$user->name}}</p>
                    <p>{{$user->designation}}</p>
                    <p>{{$user->title}}</p>
                    <p><button class="btn btn-success" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></button> 
                    <button wire:click="selectItem({{ $user->id }}, 'delete')" class="btn btn-danger" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button>
                    </p>
                    
                    @endif
                    
                </div> 
            
                    
            @endforeach
       
        </div>
        </div>  
    </div>  
    <!--For Rank 3-->  
    <div class="data">
        <div class="content-data"> 
        <h5 class="text-start">Rank 3</h5>
        <div class="info justify-content-center align-items-center h-100">
        @foreach ($users as $user)
        <div class="d-flex flex-column text-center" >
            @if($user->rank == '3')
            <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
            alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
            style="width: 150px; z-index: 1">
           
            <p>{{$user->name}}</p>
            <p>{{$user->designation}}</p>
            <p>{{$user->title}}</p>
            <p><button class="btn btn-success" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></button> 
                <button wire:click="selectItem({{ $user->id }}, 'delete')" class="btn btn-danger" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button>
            </p>
            @endif
        </div> &nbsp &nbsp
        @endforeach   
         
        
        </div>
        </div>  
    </div>  
    <!--For Rank 4-->
    <div class="data">
        <div class="content-data">
        <h5 class="text-start">Rank 4</h5>
        <div class="info justify-content-center align-items-center h-100">
        @foreach ($users as $user)
        <div class="d-flex flex-column text-center" >
            @if($user->rank == '4')
            <img src="{{ url('/images/user/defaultprofileimg.jpg') }}"
            alt="user image" class="img-fluid img-thumbnail mt-4 mb-2"
            style="width: 150px; z-index: 1">
           
            <p>{{$user->name}}</p>
            <p>{{$user->designation}}</p>
            <p>{{$user->title}}</p>
            <p><button class="btn btn-success" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></button> 
               <button wire:click="selectItem({{ $user->id }}, 'delete')" class="btn btn-danger" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button>
            </p>
            @endif
        </div> &nbsp &nbsp
        @endforeach   
        
        </div>
        </div>  

    </div>  
</div>
</div>
  <!--Add User Modals---->
  <div  wire:ignore.self class="modal modal-blur fade" id="addUsersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centerd">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="AssignFaculty()" method="post" class="row g-3">
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

                    <div class="mb-3">
                        <label  class="required form-label">Faculty</label>
                        <select class="form-select @error('faculty') is-invalid @enderror" aria-label="Default select example" wire:model='faculty'>
                            <option value="">Select Faculty</option>
                                @foreach(\App\Models\User::where('user_type', 'like', '2')->where('rank', NULL)->get() as $ufaculty)
                                    <option value="{{ $ufaculty->id }}">{{ $ufaculty->name}}</option>
                                @endforeach
                        </select>
                            @error('faculty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>

                    <div class="mb-3">
                        <label  class="required form-label">Rank</label>
                        <select class="form-select @error('faculty') is-invalid @enderror" aria-label="Default select example" wire:model='rank'>
                           
                              
                                    <option value="">Select Order Ranking</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                             
                          
                            
                        </select>
                            @error('rank')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    
                    <div class="mb-3">
                        <label  class="required form-label">Title</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" placeholder="Enter Username">
                            </div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                              
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Department</label>
                        <select class="form-select" aria-label="Default select example" wire:model='dept'>
                            <option value="">Select Faculty</option>
                                @foreach(\App\Models\Department::all() as $dept)
                                    <option value="{{ $dept->id }}">{{ $dept->dept_name}}</option>
                                @endforeach
                        </select>
                         
                            
                    </div>
                   

                   
           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Assign</span><span wire:loading >Assigning...</span></button> 
                </form>
                </div>
                </div>
            </div> 

</div>
@push('scripts')
    <script>
        $(window).on('hidden.bs.modal', function(){
            Livewire.emit('resetForms');
        });
      
    </script>
@endpush