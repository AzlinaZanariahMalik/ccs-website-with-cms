<div >
   
        <div class="text-start">
            <h2 class="mb-2">Alumni Tracer Study</h2>
            <span>Dear Alumni:</span> <br>
            <span style="text-align: justify; text-justify: inter-word;">Please Complete this ATS questionnaire as accurately as possible. Your answer will be used for research purposes in order to asses 
                graduate emploability and eventually, improve course offerings and services. Your answers to this survey will be treated with strictest confidentiality.
            </span>
            <br> <br>
        </div>
                <form  action="" method="POST" encytype="multipart/form-data" class="row g-3">
                @csrf

                    @if(Session::get('success'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('success')}}
                    </div>
                    @elseif(Session::get('fail'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('fail')}}
                    </div>
                    @endif 

                    <div class="text-start">
                        <h5 class="mb-2">Employment Information</h5>
                    </div>
                    <div class="col-md-8">
                        <label class="required form-label">Employment Status</label>
                        <select class="form-select @error('EmpStatus') is-invalid @enderror" aria-label="Default select example" wire:model='EmpStatus'>
                            <option value="">Select Employment Status</option>
                            <option value="1">Employed</option>
                            <option value="2">Unemployed</option>
                               
                        </select>
                       
                            @error('EmpStatus')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($EmpStatus == 1)
                        <div class="col-md-8">
                        <label class="required form-label">Employment Type</label>
                        <select class="form-select @error('EmpType') is-invalid @enderror" aria-label="Default select example" wire:model='EmpType'>
                            <option value="">Select Employment Type</option>
                            <option value="Regular">Regular</option>
                            <option value="Contractual">Contractual</option>
                            <option value="Project">Project</option>
                            <option value="Seasonal">Seasonal</option>
                            <option value="Seasonal">Casual</option>
                            <option value="Self-Employed">Self-Employed</option>
                               
                        </select>
                       
                            @error('EmpType')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                       
                        </div>
                        
                        <div class="col-md-4">
                            <label class="form-label">Occupation</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('empOcc') is-invalid @enderror" placeholder="Enter Occupation or Job" wire:model="empOcc"  >
                            </div>
                         
                            @error('empName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-8">
                       
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Place of Work</label>
                            <div class="input-group has-validation">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="1" wire:model='sex' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Local
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="0" wire:model='sex' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    Abroad
                                </label>
                            </div>
                            </div>
                            <div class="mb-3">
                                @error('sex')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="required form-label">Is your current job related to the degree you earned in college?</label>
                            <div class="input-group has-validation">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="1" wire:model='sex' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="0" wire:model='sex' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    No
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
                            <label class="form-label">Name of Organization/Employer </label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('empOrgname') is-invalid @enderror" placeholder="Enter Organization or Employer Name" wire:model="empOrgname"  >
                            </div>
                         
                            @error('empName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-8">
                        <label class=" form-label">Organization Type</label>
                        <select class="form-select @error('EmpType') is-invalid @enderror" aria-label="Default select example" wire:model='EmpType'>
                            <option value="">Select Organization Type</option>
                            <option value="Regular">Private</option>
                            <option value="Contractual">Public</option>
                            <option value="Project">NGO</option>
                            <option value="Seasonal">Non-profit</option>     
                        </select>
                       
                            @error('EmpType')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                       
                        <div class="col-md-8">  
                            <label class="form-label">Monthly Salary Range</label>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" wire:model='rating' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                   Below  10,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="2" wire:model='rating' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   10,001 - 20,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="3" wire:model='rating' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   20,001 - 30,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="4" wire:model='rating' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   30,001 - 40,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='rating' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   above 40,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='rating' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   prefer not to say
                                </label>
                            </div>
                          
                            <div class="mb-3">
                                @error('rating')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8">  
                            <label class="required form-label">What Competencies you learned in CCS College did you find very useful in your current job?</label>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="background-color:#8D8D8D">
                                <label class="form-check-label">Communication Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="background-color:#8D8D8D">
                                <label class="form-check-label">Human Relation Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="background-color:#8D8D8D">
                                <label class="form-check-label">Entrepreneurial Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="background-color:#8D8D8D">
                                <label class="form-check-label">Problem Solving Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="background-color:#8D8D8D">
                                <label class="form-check-label">Critical Thinking Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="background-color:#8D8D8D">
                                <label class="form-check-label">Time Management Skills</label>
                            </div>
                            <div class="mb-3">
                                @error('rating')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        @elseif ($EmpStatus == 2)
                      
                                    <div class="col-md-12">  
                                        <label class="required form-label">Please state your reason why you are not employed</label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="1" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label">
                                        Advances or Further Study
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="5" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Did not look for a job
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="3" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Family related reason(s)
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="4" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Financial related reason(s)
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="5" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Health related reason(s)
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="5" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Lack of Work Experience
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="5" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        No Job Opportunity
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" type="radio" value="other" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                         Other (Please Specify)
                                        </label>
                                        <input class="form-control" type="text" value="other" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                    </div>
                                    <div class="mb-3">
                                        @error('reasonUnemp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                        @else

                        @endif
                         
                    <div class="text-start">
                        <h5 class="mb-2">Personal Information</h5>
                    </div>
                    
                    <div class="col-md-4">
                            <label class="required form-label">Last Name </label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('ln') is-invalid @enderror" placeholder="Enter Last Name" wire:model="ln"  >
                            </div>
                         
                            @error('ln')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="required form-label">First Name </label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('fn') is-invalid @enderror" placeholder="Enter First Name" wire:model="fn"  >
                            </div>
                            @error('fn')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="required form-label">Middle Name </label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('mn') is-invalid @enderror" placeholder="Enter Middle Name" wire:model="mn"  >
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
                                <input type="text" class="mydatepicker form-control @error('birth') is-invalid @enderror" wire:model="birth">
                            </div>
                            @error('birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                        <label class=" form-label">Civil Status</label>
                        <select class="form-select @error('cstatus') is-invalid @enderror" aria-label="Default select example" wire:model='cstatus'>
                            <option value="">Select Civil Status</option>
                            <option value="Regular">Single</option>
                            <option value="Contractual">Married</option>
                            <option value="Project">Separated</option>
                            <option value="Seasonal">Single Parent</option>   
                            <option value="Seasonal">Widow or Widoewer</option> 
                        </select>
                       
                            @error('cstatus')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                  
                        
                        <div class="col-md-12">
                            <label class="form-label">Current Address</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('caddress') is-invalid @enderror" placeholder="Baranggay, City/Municipality, Province" wire:model="caddress"  >
                            </div>
                            @error('caddress')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="required form-label">Permanent Address</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('paddress') is-invalid @enderror" placeholder="Baranggay, City/Municipality, Province" wire:model="paddress"  >
                            </div>
                            @error('paddress')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                 
                        <div class="col-md-4">
                            <label class="required form-label">Email address </label>
                                <div class="input-group has-validation">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" wire:model="email"  >
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="required form-label">Mobile Number</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('mnumber') is-invalid @enderror" placeholder="ex: 09XXXXXXXXX" wire:model="mnumber"  >
                            </div>
                            @error('fn')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Facebook Account</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('fb') is-invalid @enderror" placeholder="Optional" wire:model="fb"  >
                            </div>
                            @error('fn')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    <div><br></div>
                    <div class="text-start">
                        <h5 class="mb-2">Educational Background</h5>
                    </div>
                    
                   
                        <div class="col-md-8">
                        <label class="required form-label">Degree Graduated</label>
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
                    
               
                    <div><br></div>
                    <div class="text-start">
                        <h5 class="mb-2">General Survey</h5>
                    </div>
                   
                    <div class="col-md-12">  
                            <label class="required form-label">How was your college overall experience?</label>
                        
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
                   
                      </div>

                    <div class="row mb-3">
                        <label class="required form-label">Please Tell us more about your brief experiences in this college</label>
                        <div class="input-group has-validation">
                            <textarea class="form-control @error('email') is-invalid @enderror" wire:model='comment'></textarea>
                        </div> 
                            <div class="mb-3">
                                @error('comment')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                       
                    </div>
                   
                    <div class="row mb-3">
                        <label class="required form-label">List Down suggestions to further improve the course curriculum</label>
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
