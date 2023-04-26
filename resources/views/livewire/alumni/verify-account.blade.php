<div>
<div class="row mb-3">
        <div class="col-md-8  flex-start">
        @if ($checkedStudent)
            <button class="btn btn-main" wire:click="verifyAlumni()">Verify Alumni ({{ count($checkedStudent)}})</button>
        @endif
        
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
                <th></th>
                <th scope="col">Student ID</th>
                <th scope="col">Email</th> 
                <th scope="col">Status</th>
              
                </tr>
            </thead>
            
            <tbody>
            @if($alumni->count())  
                @foreach($alumni as $an)
               <!--fetch  table database---> 
               <tr>
               <td><input type="checkbox" value="{{ $an->id }}" wire:model="checkedStudent" class="form-checkbox"></td>
               <td>{{$an->astudent_id}}</td>
               <td>{{$an->email}}</td>
               <td ><p class="text-capitalize text-danger"><b>{{$an->verify_status}}</b><p></td>
              

              
               </tr>
               @endforeach 
            @endif 
        </table>
        {{ $alumni->links()}}
        </div>
        <!--responsive table-->

 
     
</div>