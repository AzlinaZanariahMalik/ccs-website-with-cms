<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
            <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addBannerModal">Add Banner Image</button>
        </div>
       <br><br>
        <!--Add banner Modals must be in this position---->
        <div  wire:ignore.self class="modal modal-blur fade" id="addBannerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centerd">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Banner</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="AddBanner()" method="post" class="row g-3">
            @csrf
            
                    <div class="mb-3">
                        <label  class="required form-label">Banner Image 1920x556</label>
                        <input class="form-control @error('banner_image') is-invalid @enderror" type="file" wire:model="banner_image">
                         @error('banner_image')
                            <span class="text-danger">{{ $message }}</span>
                         @enderror
                            
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Add</span><span wire:loading>Adding...</span></button> 
                </form>
                </div>
                </div>
            </div> 

        <!---End---->
        </div>
        <!--Row End--->
          
    </div> 

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
            @elseif (Session::get('offline'))
                    <div class="alert alert-danger"role="alert">
                        {{ Session::get('offline')}}
                    </div>
            @endif   
       <br><br>             
     <div class="table-responsive-sm">   
            
            <table class="table table-light">
                <thead>
                    <tr>  
                    <th scope="col">Banner Image</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                @if(!empty($banner))
                <tbody>
                   <!--fetch  table database--->
                   @foreach($banner as $ban)
                    <tr>
                   
                   
                    <td>
                       
                        <img width="300px" src="{{ url('storage/photos/banner/'. $ban->banner_image)}}" />
                       
                    </td>
                   
                    <td>
                    <a href="#" wire:click.prevent="deleteBanner({{$ban}})"  class="btn btn-danger"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></a>
                    </td>
                    </tr>
                   
                   @endforeach
                    
                </tbody>
                
                @endif
    
            </table>
            {{ $banner->links()}}
            </div>
            <!--responsive table-->      
      

     
      
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
        window.addEventListener('hide_add_modal', function(event){
            $('#addBannerModal').modal('hide');
        });
		window.addEventListener('openEditModal', function(event) {
            $('#editModal').modal('show');
        });
        window.addEventListener('hideEditModal', function(event) {
            $('#editModal').modal('hide');
        });
        window.addEventListener('openDeleteModal', function(event) {
            $('#DeleteModal').modal('show');
        });
        window.addEventListener('hideDeleteModal', function(event) {
            $('#DeleteModal').modal('hide');
        });
    </script>
@endpush