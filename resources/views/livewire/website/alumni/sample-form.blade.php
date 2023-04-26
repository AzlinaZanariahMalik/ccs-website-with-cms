                            
<div >

<form  action="" method="POST" encytype="multipart/form-data" class="row g-3">
@csrf
    @if(Session::get('fail'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('fail')}}
    </div>
    @endif 

  
       
    <div class="text-start">
        <h5 class="mb-5">Personal Information</h5>
    </div>
    
    <div class="col-md-4">
            <label class="required form-label">Last Name </label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('ln') is-invalid @enderror" wire:model="ln"  >
            </div>
         
            @error('ln')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="required form-label">First Name </label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('fn') is-invalid @enderror" wire:model="fn"  >
            </div>
            @error('fn')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="required form-label">Middle Name </label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('mn') is-invalid @enderror" wire:model="mn"  >
            </div>
            @error('mn')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>
        
    <div class="col-md-4">
    <label class="required form-label">Sex </label>
            <div class="input-group has-validation">
            <div class="form-check-inline">
                <input class="form-check-input" type="radio"  value="1" wire:model='sex' style="background-color:#8D8D8D">
                <label class="form-check-label">
                    Male
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio"  value="0" wire:model='sex' style="background-color:#8D8D8D">
                <label class="form-check-label" >
                    Female
                </label>
            </div>
            </div>
            <div class="mb-3">
                @error('sex')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        <div class="col-md-4">
            <label class="required form-label">Date of Birth </label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('birth') is-invalid @enderror" wire:model="birth">
            </div>
            @error('birth')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="required form-label">Civil Status </label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('cstatus') is-invalid @enderror" wire:model="cstatus"  >
            </div>
            @error('cstatus')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
  
        
        <div class="col-md-12">
            <label class="required form-label">Current Address</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('caddress') is-invalid @enderror" wire:model="caddress"  >
            </div>
            @error('caddress')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-12">
            <label class="required form-label">Permanent Address</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('paddress') is-invalid @enderror" wire:model="paddress"  >
            </div>
            @error('paddress')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
 
        <div class="col-md-4">
            <label class="required form-label">Email address </label>
                <div class="input-group has-validation">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email"  >
                </div>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        <div class="col-md-4">
            <label class="required form-label">Mobile Number</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('mnumber') is-invalid @enderror" wire:model="mnumber"  >
            </div>
            @error('fn')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="required form-label">Facebook Account</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('fb') is-invalid @enderror" wire:model="fb"  >
            </div>
            @error('fn')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    <div><br></div>
    <div class="text-start">
        <h5 class="mb-5">Educational Background</h5>
    </div>
    
   
        <div class="col-md-8">
        <label class="required form-label">Degree</label>
        <select class="form-select @error('degree') is-invalid @enderror" aria-label="Default select example" wire:model='degree'>
            <option value="">Select Degree</option>
                @foreach(\App\Models\AcademicProgram::all() as $deg)
                    <option value="{{ $deg->id }}">{{ $deg->program_name}}</option>
                @endforeach
        </select>
            @error('degree')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
       
        <div class="col-md-4">
            <label class="required form-label">Year Graduated </label>
            <div class="input-group has-validation">
                <input type="text" class="form-control @error('yrgrad') is-invalid @enderror" wire:model="yeargrad"  placeholder="example: 2023">
            </div>
            @error('yeargrad')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
    <div><br></div>
    <div class="text-start">
        <h5 class="mb-5">Employment Information</h5>
    </div>  
    <div class="col-md-8">
        <label class="required form-label">Employment Status</label>
        <select class="form-select @error('EmpStatus') is-invalid @enderror" aria-label="Default select example" wire:model='EmpStatus'>
            <option value="">Select Employment Status</option>
            <option value="1">Employed</option>
            <option value="2">Self Employed</option>
            <option value="3">Unemployed</option>
               
        </select>
       
            @error('EmpStatus')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
     
        <div class="col-md-4">
            
        </div>
      

    

    <div><br></div>
    <div class="text-start">
        <h5 class="mb-5">Survey</h5>
    </div>
    <div class="row mb-3">  
    <label class="required form-label">How was your college overall experience?</label>
    </div>
    <div class="form-check">
                <input class="form-check-input" type="radio" value="1" wire:model='rating' style="background-color:#8D8D8D">
                <label class="form-check-label">
                   Poor
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="2" wire:model='rating' style="background-color:#8D8D8D">
                <label class="form-check-label" >
                   Unsatisfactory
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="3" wire:model='rating' style="background-color:#8D8D8D">
                <label class="form-check-label" >
                   Satisfactory
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="4" wire:model='rating' style="background-color:#8D8D8D">
                <label class="form-check-label" >
                   Very Satisfactory
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="5" wire:model='rating' style="background-color:#8D8D8D">
                <label class="form-check-label" >
                   Outstanding
                </label>
            </div>
          
            <div class="mb-3">
                @error('rating')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
   
          
          
    <div class="row mb-3">
        <label class="required form-label">Comments</label>
        <div class="input-group has-validation">
            <textarea class="form-control @error('email') is-invalid @enderror" wire:model='comment'></textarea>
        </div> 
            <div class="mb-3">
                @error('comment')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
       
    </div>
   
    
                    
    <div class="text-center">
    <a href="/alumni-home"  class="btn btn-main form-control">Submit</a>
    </div>


                         
</form>         


</div>