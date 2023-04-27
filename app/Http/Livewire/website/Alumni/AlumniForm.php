<?php

namespace App\Http\Livewire\Website\Alumni;

use Livewire\Component;
use App\Models\Alumni;
use App\Models\AlumniStudentInfo;
use App\Models\AlumniEmploymentInfo;
use App\Models\AlumniSurvey;
use Carbon\Carbon;
class AlumniForm extends Component
{
    //for Employ info
    public $astudent_id, $EmpStatus = NULL;
    public $empType, $empJob, $empPlaceWork, $empJobRelated, $empFirstJob, $empNYFirstJob, $empFindFirstJob, $empOrgname, $EmpOrgType, $empIncome, $empSkills, $reasonUnemp;
    //alumni user info
    public $ln, $fn, $mn;
    //for Student info
    public $sex, $birth, $cstatus, $caddress, $paddress, $mnumber, $fb, $degree, $yeargrad;
    //generalsurvey
    public $surv_exp, $surv_comment, $surv_suggestion;

    public function mount(){
        $this->alumni = Alumni::find(auth('alu')->id());
        $this->ln = $this->alumni->lname;
        $this->fn = $this->alumni->fname;
        $this->mn = $this->alumni->mname;
        $this->email = $this->alumni->email;
        $this->student_id = $this->alumni->astudent_id;

       


    }
    public function AlumniUpdateForm()
    {
             $this->validate([
            'EmpStatus'=>'required',
            'empType'=>'required_if:EmpStatus,==,Employed',
            'empJobRelated'=>'required_if:EmpStatus,==,Employed',
            'empFirstJob'=>'required_if:EmpStatus,==,Employed',
            'empNYFirstJob'=>'required_if:EmpStatus,==,Employed',
            'empFindFirstJob'=>'required_if:EmpStatus,==,Employed',
            'empSkills'=>'required_if:EmpStatus,==,Employed',
            'reasonUnemp'=>'required_if:EmpStatus,==,Unemployed',
            'ln'=>'required',
            'fn'=>'required',
            'mn'=>'required',
            'sex'=>'required',
            'birth'=>'required',
            'cstatus'=>'required',
            'paddress'=>'required',
            'mnumber'=>'required|numeric|digits:11',
            'degree'=>'required',
            'yeargrad'=>'required|digits:4|integer|min:2016|max:'.(date('Y')),
            'surv_exp'=>'required',
            'surv_comment'=>'required|min:100|max:300',
            

           
        ],[
            'EmpStatus.required'=>'Please Select Your Employment Status',
            'empType.required_if'=>'Please Select Your Employment Type',
            'empJobRelated.required_if'=>'Please Choose an Answer',
            'empFirstJob.required_if'=>'Please Choose an Answer',
            'empNYFirstJob.required_if'=>'Please Choose an Answer',
            'empFindFirstJob.required_if'=>'Please Choose an Answer',
            'empSkills.required_if'=>'Please Select an Answer',
            'reasonUnemp.required_if'=>'Please Choose an Answer',
            'ln.required'=>'Please Enter your Last Name',
            'fn.required'=>'Please Enter your First Name',
            'mn.required'=>'Please Enter your Middle Name',
            'sex.required'=>'Please Enter your Sex',
            'birth.required'=>'Please Enter your Birthdate',
            'cstatus.required'=>'Please Select Your Status',
            'paddress.required'=>'Please Enter Your Permanent Address',
            'mnumber.required'=>'Please Enter Your Mobile Number',
            'mnumber.digits'=>'Invalid Mobile Number',
            'degree.required'=>'Please Select your Degree',
            'yeargrad.required'=>'Please Enter the year you have graduated',
            'yeargrad.min'=>'The College was founded in year 2016 your year is invalid',
            'yeargrad.max'=>'Invalid year',
            'surv_exp.required'=>'Please Choose an Answer',
            'surv_comment.required'=>'Please Enter at least a minimum of 100 words',
            'surv_comment.min'=>'Please Enter at least a minimum of 100 words',

            'surv_comment.max'=>'You have reach the maximum of 300 words',
           
            
        ]);  

        Alumni::where('astudent_id', $this->student_id)->update([
            'lname'=>$this->ln,
            'fname'=>$this->fn,
            'mname'=>$this->mn,
            'updated_at'=>Carbon::now(),
        ]);
        AlumniEmploymentInfo::where('astudent_id', $this->student_id)->update([
            'emp_status'=>$this->EmpStatus,
            'emp_job'=>$this->empJob,
            'emp_type'=>$this->empType,
            'emp_orgtype'=>$this->EmpOrgType,
            'emp_orgname'=>$this->empOrgname,
            'emp_placeofwork'=>$this->empPlaceWork,
            'emp_jobrelated'=>$this->empJobRelated,
            'emp_firstjob'=>$this->empFirstJob,
            'emp_nyfirstjob'=>$this->empNYFirstJob,
            'emp_findfirstjob'=>$this->empFindFirstJob,
            'emp_income'=>$this->empIncome,
            'emp_skills'=>$this->empSkills,
            'emp_unemp'=>$this->reasonUnemp,

            'updated_at'=>Carbon::now(),
        ]);
           
        AlumniStudentInfo::where('astudent_id', $this->student_id)->update([
            'asex'=>$this->sex,
            'abirthdate'=>$this->birth,
            'acivilstatus'=>$this->cstatus,
            'acaddress'=>$this->caddress,
            'apaddress'=>$this->paddress,
            'amobile'=>$this->mnumber,
            'afb'=>$this->fb,
            'adegree_id'=>$this->degree,
            'ayearbatch'=>$this->yeargrad,
            'updated_at'=>Carbon::now(),
            

        ]);

        AlumniSurvey::where('astudent_id', $this->student_id)->update([
            'surv_exp'=>$this->surv_exp,
            'surv_comment'=>$this->surv_comment,
            'surv_suggestion'=>$this->surv_suggestion,
            'updated_at'=>Carbon::now(),
        ]);

             //show success message
             session()->flash('success', 'Thank You for Answering the Alumni Tracer Study. Your Answers has been Submitted');
             $this->emit('alert_remove'); 


        
       
    }
    
    public function render()
    {
        return view('livewire.website.alumni.alumni-form');
    }
}
