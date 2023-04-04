<div>
    <div class="info">        
        <form class="row g-3"   wire:submit.prevent='UpdateCollegeGoogleMap()' method="post">
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
                <h3>College Google Map link</h3>
                <div class="col-md-12">
                    <iframe src="{{$college_google_map->college_googlemap}}" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br>
                    <label class="form-label">College Map</label>
                    <input type="text" class="form-control"  value="" placeholder="Enter College Google Map Link" wire:model='college_maplink'>
                    @error('college_maplink')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror           
                </div>
                    
            <div class="col-12">
                <button class="btn btn-main" type="submit"><span wire:loading.remove >Update</span><span wire:loading >Updating...</span></button>
            </div>
        </form>
    </div>  
</div>
 