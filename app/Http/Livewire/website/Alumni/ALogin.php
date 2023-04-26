<?php

namespace App\Http\Livewire\Website\Alumni;

use Livewire\Component;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;

class ALogin extends Component
{
    public $email, $password; //variable name for table's fields
    public function LoginHandler(){

        $this->validate([
            'email'=>'required|email|exists:alumnis',
            'password'=>'required',
           
        ],[
            'email.required'=>'Enter Your Email Address',
            'email.exists'=>'Your Email Does Not Exist',
            'email.email'=>'Invalid Email Address', 

            'password.required'=>'Enter Your Password',
            
           
            
        ]);  
        $cred = array('email'=>$this->email,'password'=>$this->password);

        if( Auth::guard('alu')->attempt($cred)){
               
            redirect()->route('alumni-tracer-study.home');
               
        } else{
            session()->flash('fail', 'Incorrect Email or Password');
            //remove alert success message
            $this->emit('alert_remove');
        }
    }
    public function render()
    {
        return view('livewire.website.alumni.a-login');
    }
}
