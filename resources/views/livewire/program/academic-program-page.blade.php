<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
            <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addProgramModal">Add Program</button>
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
        

        <!--- Table-->
        
            
        <div class="table-responsive-sm">   
            
        <table class="table table-light">
            <thead>
                <tr>
                
                <th scope="col">Program Name</th>
                <th scope="col">Abbr</th>
                <th scope="col">Description</th>
                <th scope="col">Program Type</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
             @if($academicprogram->count())
            <tbody>
               <!--fetch  table database--->
               @foreach($academicprogram as $program)
                <tr>
               
                <td>{{$program->program_name}}</td>
                <td>{{$program->program_abbv}}</td>
                <td>{{ Str::limit($program->program_desc, '50')}}</td>
                <td>{{$program->program_type}}</td>
                <td>
                    <button wire:click="selectItem({{ $program->id }}, 'update')"class="btn btn-success" ><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></button>
                    <button wire:click="selectItem({{ $program->id }}, 'delete')" class="btn btn-danger"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button>
                </td>
                </tr>
              
               @endforeach
                
            </tbody>
            
            @endif

        </table>
        {{ $academicprogram->links()}}
        </div>
        <!--responsive table-->


      <!--MODALS--->
     
      <!--Add Program Modals---->
      <div  wire:ignore.self class="modal fade" id="addProgramModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Academic Program</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
           
            @livewire('program.academic-program-form')
            
                
                </div>
            </div> 
       
        </div>

        <!--Delete Program Modals---->
      <div   class="modal fade" id="ProgramDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Program Item</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">You are about to delete this Program</h4>
           
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="delete" type="submit" class="btn btn-main">Continue</button> 
                </form>
                </div>     
            </div>
            </div> 
        </div>
</div>
 