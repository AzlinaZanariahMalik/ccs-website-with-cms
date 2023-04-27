<div >
   
        <div class="text-start">
            <h2 class="mb-2">Alumni Tracer Study</h2>
            <span>Dear Alumni:</span> <br>
            <span style="text-align: justify; text-justify: inter-word;">Please Complete this ATS questionnaire as accurately as possible. Your answer will be used for research purposes in order to asses 
                graduate emploability and eventually, improve course offerings and services. Your answers to this survey will be treated with strictest confidentiality.
            </span>
            <br> <br>
        </div>
                <form  wire:submit.prevent="AlumniUpdateForm()" method="POST" encytype="multipart/form-data" class="row g-3">
                @csrf

                  

                    <div class="text-start">
                        <h5 class="mb-2">Employment Information</h5>
                    </div>
                    <div class="col-md-8">
                        <label class="required form-label">Employment Status</label>
                        <select class="form-select @error('EmpStatus') is-invalid @enderror" aria-label="Default select example" wire:model='EmpStatus'>
                            <option value="">Select Employment Status</option>
                            <option value="Employed">Employed</option>
                            <option value="Unemployed">Unemployed</option>
                               
                        </select>
                       
                            @error('EmpStatus')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($EmpStatus == 'Employed')
                        <div class="col-md-8">
                        <label class="required form-label">Employment Type</label>
                        <select class="form-select @error('empType') is-invalid @enderror" aria-label="Default select example" wire:model='empType'>
                            <option value="">Select Employment Type</option>
                            <option value="Regular">Regular</option>
                            <option value="Contractual">Contractual</option>
                            <option value="Project">Project</option>
                            <option value="Seasonal">Seasonal</option>
                            <option value="Seasonal">Casual</option>
                            <option value="Self-Employed">Self-Employed</option>
                               
                        </select>
                       
                            @error('empType')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-md-4">
                       
                        </div>
                        
                        <div class="col-md-4">
                            <label class="form-label">Occupation</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('empJob') is-invalid @enderror" placeholder="Enter Occupation or Job" wire:model="empJob"  >
                            </div>
                         
                            @error('empJob')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-8">
                       
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Place of Work</label>
                            <div class="input-group has-validation">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="Local" wire:model='empPlaceWork' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Local
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="Abroad" wire:model='empPlaceWork' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    Abroad
                                </label>
                            </div>
                            </div>
                            <div class="mb-3">
                                @error('empPlaceWork')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="required form-label @error('empJobRelated') is-invalid @enderror">Is your current job related to the degree you earned in college?</label>
                            <div class="input-group has-validation">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="Yes" wire:model='empJobRelated' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="No" wire:model='empJobRelated' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    No
                                </label>
                            </div>
                            </div>
                            <div class="mb-3">
                                @error('empJobRelated')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="required form-label @error('empFirstJob') is-invalid @enderror">Is this your first job after college?</label>
                            <div class="input-group has-validation">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="Yes" wire:model='empFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio"  value="No" wire:model='empFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    No
                                </label>
                            </div>
                            </div>
                            <div class="mb-3">
                                @error('empFirstJob')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8">  
                            <label class="required form-label @error('empNYFirstJob') is-invalid @enderror">How long did it take you to land your first job?</label>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" wire:model='empNYFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                   Less than a month
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="2" wire:model='empNYFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   1 to 6 months
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="3" wire:model='empNYFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   7 to 11 months
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="4" wire:model='empNYFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   1 year to less than 2 years
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='empNYFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   2 years to less than 3 years
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='empNYFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   more than 3 years
                                </label>
                            </div>
                          
                            <div class="mb-3">
                                @error('empNYFirstJob')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8">  
                            <label class="required form-label @error('empFindFirstJob') is-invalid @enderror">How did you find your first job?</label>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                   Response to an advertisement
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="2" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   As walk-in applicant
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="3" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Recommended by someone
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="4" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Information from friends
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Arranged by school's job placement officer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Family business
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Job Fair or Public Employment Office (PESO)
                                </label>
                            </div>
                            <div class="col-md-12 form-check">
                                       
                                       <label class="form-check-label" >
                                        Other (Please Specify)
                                       </label>
                                       <input class="form-control" type="text" wire:model='empFindFirstJob' style="background-color:#8D8D8D">
                                   </div>

                          
                            <div class="mb-3">
                                @error('empFindFirstJob')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                       
                       </div>
                    

                        <div class="col-md-4">
                            <label class="form-label">Name of Organization/Employer </label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" placeholder="Enter Organization or Employer Name" wire:model="empOrgName"  >
                            </div>
                         
                          
                        </div>
                        <div class="col-md-8">
                        <label class=" form-label">Organization Type</label>
                        <select class="form-select" aria-label="Default select example" wire:model='EmpOrgType'>
                            <option value="">Select Organization Type</option>
                            <option value="Regular">Private</option>
                            <option value="Contractual">Public</option>
                            <option value="Project">NGO</option>
                            <option value="Seasonal">Non-profit</option>     
                        </select>
                       
                        </div>

                       
                        <div class="col-md-8">  
                            <label class="form-label">Monthly Salary Range</label>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" wire:model='empIncome' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                   Below  10,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="2" wire:model='empIncome' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   10,001 - 20,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="3" wire:model='empIncome' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   20,001 - 30,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="4" wire:model='empIncome' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   30,001 - 40,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='empIncome' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   above 40,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="5" wire:model='empIncome' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   prefer not to say
                                </label>
                            </div>
                          
                          
                        </div>

                        <div class="col-md-8">  
                            <label class="required form-label @error('empSkills') is-invalid @enderror">What is the MOST Competency you learned in CCS College did you find very useful in your current job?</label>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option1" value="Communication Skills" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Communication Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="option1" value="Technical Skills" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Human Relation Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="option1" value="something" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Technical Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="option1" value="Entrepreneurial Skills" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Entrepreneurial Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="option1" value="Problem Solving Skills" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Problem Solving Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="option1" value="Critical Thinking Skills" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Critical Thinking Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="option1" value="Time Management Skills" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Time Management Skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="check1" name="option1" value="Did not apply any skills I learned in college" wire:model='empSkills' style="background-color:#8D8D8D">
                                <label class="form-check-label">Did not apply any skills I learned in college</label>
                            </div>
                            <div class="mb-3">
                                @error('empSkills')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        @elseif ($EmpStatus == 'Unemployed')
                      
                                    <div class="col-md-12">  
                                        <label class="required form-label ">Please state your reason why you are not employed</label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" name="reason" type="radio" value="Advances or Further Study" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label">
                                        Advances or Further Study
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" name="reason" type="radio" value="Did not look for a job" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Did not look for a job
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input " name="reason" type="radio" value="Family related reason(s)" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Family related reason(s)
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input" name="reason" type="radio" value="Financial related reason(s)" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Financial related reason(s)
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input " name="reason" type="radio" value="Health related reason(s)" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Health related reason(s)
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input " name="reason" type="radio" value="Lack of Work Experience" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        Lack of Work Experience
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input class="form-check-input " name="reason" type="radio" value="No Job Opportunity" wire:model='reasonUnemp' style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                        No Job Opportunity
                                        </label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                    <input class="form-check-input " name="reason" type="radio"  style="background-color:#8D8D8D">
                                        <label class="form-check-label" >
                                         Other (Please Specify)
                                        </label>

                                        <input class="form-control" name="reason" type="text" wire:model='reasonUnemp' style="background-color:#8D8D8D">
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
                      
                    <div class="col-md-4">
                    <label class="required form-label ">Sex </label>
                            <div class="input-group has-validation @error('sex') is-invalid @enderror">
                            <div class="form-check-inline">
                                <input class="form-check-input" name="sex" type="radio"  value="Male" wire:model='sex' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                    Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" name="sex" type="radio"  value="Female" wire:model='sex' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                    Female
                                </label>
                            </div>
                            </div>
                           
                                @error('sex')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           
                        </div>
                        
                        <div class="col-md-4">
                            <label class="required form-label">Date of Birth </label>
                            <div class="input-group has-validation">
                                <input type="date" class="form-control mydatepicker form-control @error('birth') is-invalid @enderror" wire:model="birth">
                            </div>
                            @error('birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                        <label class=" form-label">Civil Status</label>
                        <select class="form-select @error('cstatus') is-invalid @enderror" aria-label="Default select example" wire:model='cstatus'>
                            <option value="">Select Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option value="Single Parent">Single Parent</option>   
                            <option value="Widow or Widower">Widow or Widower</option> 
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
                                    <input type="email" class="form-control" wire:model='email' readonly>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="required form-label">Mobile Number</label>
                            <div class="input-group has-validation">
                                <input type="number" class="form-control @error('mnumber') is-invalid @enderror" placeholder="ex: 09XXXXXXXXX" wire:model="mnumber"  >
                            </div>
                            @error('mnumber')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Facebook Account</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control @error('fb') is-invalid @enderror" placeholder="Optional" wire:model="fb"  >
                            </div>
                            @error('fb')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                   <br>
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
                                <input type="number" class="form-control @error('yeargrad') is-invalid @enderror" wire:model="yeargrad"  placeholder="example: 2023">
                            </div>
                            @error('yeargrad')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                  <br>
                    

                    <br>
                   
                    <div class="text-start">
                        <h5 class="mb-2">General Survey</h5>
                    </div>
                   
                    <div class="col-md-12">  
                            <label class="required form-label">How was your college overall experience?</label>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Poor" wire:model='surv_exp' style="background-color:#8D8D8D">
                                <label class="form-check-label">
                                   Poor
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Unsatisfactory" wire:model='surv_exp' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Unsatisfactory
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Satisfactory" wire:model='surv_exp' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Satisfactory
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Very Satisfactory" wire:model='surv_exp' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Very Satisfactory
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Outstanding" wire:model='surv_exp' style="background-color:#8D8D8D">
                                <label class="form-check-label" >
                                   Outstanding
                                </label>
                            </div>
                          
                            <div class="mb-3">
                                @error('surv_exp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                   
                      </div>

                    <div class="row mb-3">
                        <label class="required form-label">Please Tell us more about your brief experiences in this college</label>
                        <div class="input-group has-validation">
                            <textarea class="form-control @error('surv_comment') is-invalid @enderror" wire:model='surv_comment'></textarea>
                        </div> 
                            <div class="mb-3">
                                @error('surv_comment')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                       
                    </div>
                    
                    <div class="row mb-3">
                        <label class="form-label">List Down suggestions to further improve the course curriculum</label>
                        <div class="input-group has-validation">
                            <textarea class="form-control @error('surv_suggestion') is-invalid @enderror" wire:model='surv_suggestion'></textarea>
                        </div> 
                            <div class="mb-3">
                                @error('surv_suggestion')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                       
                    </div>
                    
                    <input type="hidden" class="form-control" wire:model='student_id' readonly>    
                    <div class="text-center">
                        <button type="submit" class="btn btn-main form-control"><span style="color:white;" wire:loading.remove >Submit</span><span wire:loading >Submitting...</span></button>
                    </div>

                    @if(Session::get('success'))
                        <div class="alert alert-success"role="alert">
                            {{ Session::get('success')}}
                            <button style="float:right" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(Session::get('fail'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('fail')}}
                    </div>
                    @endif   
                                         
            </form>         
 
    
</div>
