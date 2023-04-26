<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
            <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addProgramModal">Add Organizaiton</button>
        </div>
         <!--Add organization Modals---->
      <div  wire:ignore.self class="modal fade" id="addProgramModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add organization</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
           
            @livewire('organization.organization-form')
            
                </div>
            </div> 
       
        </div>
        <!---search --->
        <div class="col-md-4  float-right"> 
        <form>
            <div class="mb-3 float-right">
            <input class="form-control " type="text" placeholder="Search Here...">
            </div>
        </form>
        </div>
        <!--search end-->
        </div>
    <br>
     <!--- Table-->
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
     <br>       
     <div class="table-responsive-sm">   
            
            <table class="table table-light">
                <thead>
                    <tr>
                   
                    <th scope="col">Organization Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Fb Link</th>
                    
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                 @if($organization->count())
                <tbody>
                   <!--fetch  table database--->
                   @forelse($organization as $org)
                    <tr>
                   
                    <td>{{$org->org_name}}</td>
                    <td>{{ Str::limit($org->org_desc, '50')}}</td>
                    <td>
                        @if (!empty($org->org_image))
                            <img width="100px" src="{{ url('storage/photos/organization/'. $org->org_image)}}" />
                        @else
                        No Image
                        @endif
                    </td>
                    <td>{{$org->org_link}}</td>
                    <td>
                    <a href="{{route('admin.edit-organization', $org->id)}}" class="btn btn-success" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></a>
                    <a href="#" wire:click.prevent="deleteOrg({{$org}})"  class="btn btn-danger"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></a>
                </td>
                    </tr>
                    @empty
                    <h1 class="text-center">No organization Found</h1>
                   @endforelse
                    
                </tbody>
                
                @endif
    
            </table>
            {{ $organization->links()}}
            </div>
            <!--responsive table-->   
      


      <!--MODALS--->
     
     

        <!--Delete Modals---->
        <div   class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Organization</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1 class="text-center">Are You Sure?</h1>
                <h6 class="text-center">You are about to delete this Organization</h6>
           
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="delete" type="submit" class="btn btn-danger"><span wire:loading.remove >Delete</span><span wire:loading >Deleting...</span></button> 
                </form>
                </div>     
            </div>
            </div> 
        </div>
      
       <!--Modals---->
        </div>
</div>
@push('scripts')
    <script>
        
        window.addEventListener('openDeleteModal', function(event) {
            $('#deleteModal').modal('show');
        });
        window.addEventListener('hideDeleteModal', function(event) {
            $('#deleteModal').modal('hide');
        });
    </script>
@endpush
 