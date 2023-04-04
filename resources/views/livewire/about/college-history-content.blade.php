<div>
<div class="data">
		<div class="content-data"> 
            <div class="info">
                    
                <form wire:submit.prevent="UpdateHistory()" method="post" class="row g-3" enctype="multipart/form-data">
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
                            <label class="form-label">History Description</label>
                            <textarea type="textarea" cols="80" class="form-control" rows="12"  placeholder="Details....." wire:model="history_desc">
                            </textarea>
                        
                          
                           @error('history_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                           
                       </div>

                        
                        <div class="col-md-12">
                            
                           <label class="form-label">History Image</label>
                            <br>
                            <input class="form-control" type="file" wire:model="history_image">
                            @error('history_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                        </div>
                        <div class="col-md-12">
                            
                            <label class="form-label">History Image</label>
                             <br>
                             @if (!empty($history->history_image))
                                 <img width="100px" src="{{ url('storage/photos/history/'. $history->history_image)}}" style="width:  150px;" class="img-fluid img-thumbnail mx-auto d-block"/>
                            @else
                            No Image
                            @endif
                             
                         </div>
                        <br>
                        <div class="col-12">
                            <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
                        </div>
                </form>
            </div>
        </div>           
    </div>   

</div>
 