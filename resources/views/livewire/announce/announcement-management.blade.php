<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
        <a href="{{ route('admin.add-announce')}}"><button type="button" class="btn btn-main" >Add Announcement</button></a>
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
       

        <!---News Table-->
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
                <th scope="col">Image</th>
                <th scope="col">Title</th> 
                <th scope="col">For</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            
            <tbody>
            @if($announce->count())  
                @foreach($announce as $an)
               <!--fetch  table database---> 
               <tr>
               <td>
                        @if (!empty($an->an_image))
                            <img width="100px" src="{{ url('storage/photos/announce/'. $an->an_image)}}" />
                        @else
                        No Image
                        @endif
                    </td> 
               <td>{{$an->an_title}}</td>
               <td>{{$an->an_for}}</td>
               <td>{{ Str::limit($an->an_desc, '50')}}</td>

               <td>
               <a href="{{route('admin.edit-announcement', $an->id)}}" class="btn btn-success" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></a>
                   <a href="#" wire:click.prevent="deleteannounce({{$an}})"  class="btn btn-danger"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></a>
               </td>
               </tr>
               @endforeach 
            @endif 
        </table>
        {{ $announce->links()}}
        </div>
        <!--responsive table-->

 
      <!--MODALS--->
        <!--Delete announce Modals---->
    <div   class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1 class="text-center">Are You Sure?</h1>
                <h6 class="text-center">You are about to delete this Announcement</h6>
           
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

