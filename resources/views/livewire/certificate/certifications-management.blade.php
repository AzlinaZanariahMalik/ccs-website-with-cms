<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
            <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addModal">Add Certification</button>
        </div>
        <br><br>
         <!--Add Certification Modals---->
        <div  wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Certification</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
            
                @livewire('certificate.certifications-form')
                
                    </div>
                </div> 
        
            </div>
     
        </div>
        
     <!--- Table-->
        
            
     <div class="table-responsive-sm">   
            
            <table class="table table-light">
                <thead>
                    <tr>
                   
                    
                    <th scope="col">Certificate</th>
                  
                    
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                 @if($certification->count())
                <tbody>
                   <!--fetch  table database--->
                   @forelse($certification as $cert)
                    <tr>
                   
                    
                    <td>
                        @if (!empty($cert->cert_image))
                            <img width="500px" src="{{ url('storage/photos/Certification/'. $cert->cert_image)}}" />
                        @else
                        No Image
                        @endif
                    </td>
                   
                    <td>
                    <a href="#" wire:click.prevent="deleteCert({{$cert}})"  class="btn btn-danger"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></a>
                    </td>
                    </tr>
                    @empty
                    <h1 class="text-center">No Certification Found</h1>
                   @endforelse
                    
                </tbody>
                
                @endif
    
            </table>
            {{ $certification->links()}}
            </div>
            <!--responsive table-->   
      

  
      <!--MODALS--->
     
     

        <!--Delete Modals---->
        <div   class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Banner</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">You are about to delete this Banner</h4>
           
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="delete" type="submit" class="btn btn-danger">Delete</button> 
                </form>
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
      
		
        window.addEventListener('openDeleteModal', function(event) {
            $('#DeleteModal').modal('show');
        });
        window.addEventListener('hideDeleteModal', function(event) {
            $('#DeleteModal').modal('hide');
        });
    </script>
@endpush