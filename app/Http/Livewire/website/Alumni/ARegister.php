<?php

namespace App\Http\Livewire\Website\Alumni;

use Livewire\Component;
use App\Models\Alumni;
use App\Models\AlumniStudentInfo;
use App\Models\AlumniEmploymentInfo;
use App\Models\AlumniSurvey;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class ARegister extends Component
{

    public $astudent_id, $email, $password;

    public function RegisterHandler()
    {
        $this->validate([
            'astudent_id'=>'required|unique:alumnis',
            'email'=>'required|email|unique:alumnis',
            'password'=>[
                'required',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ],
        ],[
            'astudent_id.required'=>'Please Enter Your Student ID',
            'astudent_id.unique'=>'The Student ID you have entered is not available',
            'email.required'=>'Please Enter Your Email Address',
            'email.unique'=>'The Email you have entered is not available',
            'email.email'=>'Invalid Email Address',
            'password.required'=>'Please Enter Your Password',
            'password.min'=>'The Password should be at least 6 characters long',
            'password.regex'=>'The Password should be at least with upper and lower case letter, numbers and symbols like !? $ % &',
          
        ]);
                $status = 'unverified';
                $alumni = new Alumni();
                $alumni->astudent_id = $this->astudent_id;
                $alumni->email = $this->email;
                $alumni->password = Hash::make($this->password);
                $alumni->verify_status = $status;
                $alumni->created_at = Carbon::now();
                $saved = $alumni->save();  

                $alumnistud = new AlumniStudentInfo();
                $alumnistud->astudent_id = $this->astudent_id;
                $saved = $alumnistud->save();

                $alumniemp = new AlumniEmploymentInfo();
                $alumniemp->astudent_id = $this->astudent_id;
                $saved = $alumniemp->save();

                $alumnisurv = new AlumniSurvey();
                $alumnisurv->astudent_id = $this->astudent_id;
                $saved = $alumnisurv->save();

                $this->resetForms();

                //show success message
                session()->flash('success', 'Successfully Register Account');
                //remove alert success message
                $this->emit('alert_remove');
                //function for refresh page

    }
    private function resetForms()
    {
        $this->astudent_id = null;
        $this->email = null;
        $this->password = null;
    }
    public function render()
    {
        return view('livewire.website.alumni.a-register');
    }
}
 