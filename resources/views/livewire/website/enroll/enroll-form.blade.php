<div >

                <form  action="" method="POST" encytype="multipart/form-data" class="row g-3">
                @csrf
                    @if(Session::get('fail'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('fail')}}
                    </div>
                    @endif 

                    <h2>Enrollment Application Form</h2>
                    <span class="text-muted">This Application form is serve for upcoming 1st year only after submitting your information please visit the college to submit the required documents.</span>
                    <div class="col-md-8">
                        <label class="required form-label">Course</label>
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
                       
                        
                    <div class="text-start">
                        <h5>Personal Information</h5>
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
                 
                        <div class="col-md-6">
                            <label class="required form-label">Email address </label>
                                <div class="input-group has-validation">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email"  >
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="required form-label">Mobile Number</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('mnumber') is-invalid @enderror" wire:model="mnumber"  >
                            </div>
                            @error('fn')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                     
                    <div><br></div>
                    
                   
                    
                                    
                    <div class="text-center">
                    <a href="/alumni-home"  class="btn btn-main form-control">Submit</a>
                    </div>

                
                                         
            </form>         
 
    
</div>
