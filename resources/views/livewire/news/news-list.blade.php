<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
        <a href="{{ route('admin.news.add-news')}}"><button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#addUsersModal">Add News</button></a>
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
       

        <!---User Table-->
     
        <div class="table-responsive-sm">       
        <table class="table table-light">
            <thead>
                <tr>
                <th scope="col">Featured Image</th>
                <th scope="col">News Title</th> 
                <th scope="col">Author</th>
                <th scope="col">Post</th>
                <th scope="col">Images</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
             @if($newsmanage->count())
            <tbody>
               <!--fetch  table database---> 
               @foreach($newsmanage as $newsitem)
                <tr>
                <td>
                    @if (!empty($newsitem->feature_image))
                        <img width="100px" src="{{ url('storage/photos/news/'. $newsitem->feature_image)}}" />
                    @else
                    No Image
                    @endif
                </td>
                <td>{{$newsitem->news_title}}</td>
                <td>{{$newsitem->userName->name}}</td>
                <td>{{ Str::limit($newsitem->post, '50')}}</td>
                @php
                    $images = App\Models\NewsImage::where('news_unique_id', $newsitem->unique_id)->get();
                @endphp
                <td>@foreach ($images as $item)
                    <img src="{{ url('storage/photos/news/'. $item->image)}}"   style="width: 25px; height:25px; object-fit:cover;" class="img-fluid img-thumbnail mx-auto d-block"> 
                    @endforeach
                </td>
                @if($newsitem->status =='1')
                <td>Publish</td>  
                @else
                    <td>Pending</td>
                @endif 
                <td>
               
                    <a href="{{route('admin.news.show-news', $newsitem->id)}}" class="btn btn-success" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAO1JREFUSEvVldENwjAMRK+b0E1gE5ikMAlsAqOUSUCHkshK48ZO0w/6h2jesy+JO2DnZ9iZj56CO4A3gKssOhccAfDFQ6WzE4CXeIdrzuH3TUpywRMAJWtPDmcxXCeLSpJc8Alka3SEzgEuJRcAD7K2CBgLu2VHUsLqf/AtApk54VGyiLalAwmPQErG0sZ5BSU4uSnzXOIRWOHcl3SErQIPnKcpcS0CK5zpLI65RRAXyXi1zLsI1A3t0cEavDkiz0Rviui/BJZxXeuIl4yzqTjseAsnwzdBk3Am8SCoN7lWnft/64fFDdYiagZpC7+V+kAZgABxUwAAAABJRU5ErkJggg=='}}"/></a>
                    <button wire:click.prevent="deleteNews({{$newsitem}})" class="btn btn-danger" type="submit"><img class="icon" src="{{'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEvtldENgCAMRB+b6ShOok6mo7iJpomRBC0VA3613829cgUu0LhCY33eADpgUQaZgSk3pAXIiYvuBgzAqkFSwF7Jskv3d0ClA0QZbQdfrbrpOSDdmVtk3mK3yC2KDjT/iyTBJGxKSkKnN5/22SDiYwFETTYrMktO8NjbHHAA6kwZGXDWtewAAAAASUVORK5CYII='}}"/></button>
                </td>
                </tr>
              
               @endforeach
                
            </tbody>
            
            @endif

        </table>
        {{ $newsmanage->links()}}
        </div>
        <!--responsive table-->


      <!--MODALS--->

      <!--Add User 
      <div  wire:ignore.self class="modal fade" id="addUsersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="AddUsers()" method="post" class="row g-3">
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
                        <label  class="form-label">Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="name" placeholder="Enter Full Name">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                   
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <input type="email" class="form-control" wire:model="email" placeholder="Enter Email">
                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">User Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" wire:model="username" placeholder="Enter Username">
                            </div>
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">User Type</label>
                        <select class="form-select" aria-label="Default select example" wire:model='user_type'>
                            <option value="">Select User Type</option>
                               
                        </select>
                            @error('user_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Publish Permission</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="publishpermisson" value="1" wire:model='publish_permission' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="publishpermission" value="0" wire:model='publish_permission' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    No
                                </label>
                            </div>
                            <div class="mb-3">
                                @error('publish_permission')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                           
                            
                    </div>

                   
           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-main">Add</button> 
                </form>
                </div>
                </div>
            </div> 
       Modals---->
        </div>
</div>

