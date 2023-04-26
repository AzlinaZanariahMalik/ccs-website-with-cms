<div >

<div class="data">
		<div class="content-data"> 
                  
            <div class="info" >
                    
            <form wire:submit.prevent="UpdateNews()" method="post" class="row g-3" >
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
                
                    <div class="col-md-4">
                            <label  class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" wire:model='status'>
                                <option value="1">Publish</option>
                                <option value="0">Pending</option>
                                   
                            </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                
                    </div>    
                        
                    <div class="col-md-12">
                        <label  class="form-label">News Title</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="news_title">
                            </div>
                            @error('news_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
               
                   
                    
                    <div class="col-md-12" wire:ignore>
                            <textarea type="textarea" class="form-control" rows="12" id="post" wire:model.lazy="an_desc">{{$post}}
                            </textarea>
                    </div>
                        @error('post')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    
                    </div>

                    <div class="col-md-12">
                                
                                <label class="form-label">Images</label>
                                 <br>
                                 <input class="form-control" type="file" wire:model="images" multiple>
                                 @error('images')
                                     <span class="text-danger">{{ $message }}</span>
                                 @enderror
                                 <br>
                                 <div class="wrapper">
                                     <div class="content">
                                      @foreach ($newsImages as $pimages)
                                      
                                     <img src="{{url('storage/photos/news/'. $pimages->image)}}" style=" width: 50px; height:50px; object-fit:cover; ">
                                      <a href="" wire:click.prevent="deleteImage({{$pimages->id}})"><i class="fa fa-times text-danger mr-2"></i></a>
                                      
                                      @endforeach  
                                     </div>
                                 </div>
                                 
                                 
                             </div>
                             <br><br>

                    <button type="submit" class="btn btn-main"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button> 
                </form>
                <br><br>
                <div class="info">
                    
                    <form wire:submit.prevent="UpdateImage()" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                        
                        @if(Session::get('successimg'))
                            <div class="alert alert-success"role="alert">
                                {{ Session::get('successimg')}}
                                <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif (Session::get('failimg'))
                            <div class="alert alert-danger"role="alert">
                                {{ Session::get('failimg')}}
                            </div>
                        @endif    
                            
                           
                          
                            
                            <div class="col-md-12">
                                
                               <label class="form-label">Feature Image</label>
                                <br>
                           
                                <input class="form-control" type="file" wire:model="feature_image">
                            
                                @error('$feature_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                
                            </div>
                            <div class="col-md-12">
                                 <br>
                                 @if (!empty($feature_image))
                                     <img width="100px" src="{{ url('storage/photos/news/'. $feature_image)}}" style="width:  150px;" class="img-fluid img-thumbnail mx-auto d-block"/>
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

</div>
@push('scripts') 
<script>
    ClassicEditor
        .create(document.querySelector('#post'),{
          removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'Table', 'MediaEmbed'],
        })
        .then(editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('post', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 