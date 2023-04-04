<div wire:ignore>
 
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="UpdateMissionContent()" method="post" class="row g-3" >
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
                        
                        <div class="col-md-12 ">
                           <h3>Mission</h3>
                            <textarea type="textarea" cols="80" class="form-control" rows="12" id="mission" placeholder="Details....." wire:model='mission'>{{$vismin->mission}}
                            </textarea>
                            @error('mission')
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
@push('scripts') 
<script>
    ClassicEditor
        .create(document.querySelector('#mission'))
        
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('mission', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 