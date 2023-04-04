<div wire:ignore>
    <div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="UpdateGoalContent()" method="post" class="row g-3" >
                @csrf
                  
                    <h3>College Goal Description</h3>
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
                        
                        <div  class="col-md-12">
                           
                            <textarea type="textarea" cols="80" class="form-control" rows="12" id="goal" placeholder="Details....."  wire:model.defer='goal'>{{$goal_content->goal}}
                            </textarea>
                            @error('goal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                           
                           
                        </div>
                     
                        <div class="col-12">
                            <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
                        </div>
                </form>
            </div>
        </div>           
    </div>
</div>

@push('scripts') 
<script>
    ClassicEditor
        .create(document.querySelector('#goal'))
        
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('goal', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush