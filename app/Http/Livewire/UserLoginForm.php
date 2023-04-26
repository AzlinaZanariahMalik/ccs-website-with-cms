<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
 
class UserLoginForm extends Component
{
    public $email, $password; //variable name for table's fields
    public $visible;
    //return url
    public $returnURL;

    //for returnURL
    public function mount(){
        $this->returnUrl = request()->returnURL;
        $this->visible = false;
    }

    public function LoginHandler(){

        $this->validate([
            'email'=>'required|email|exists:users,email|regex:/(.*)wmsu\.edu\.ph$/i',
            'password'=>'required|min:8',
           
        ],[
            'email.required'=>'Enter Your Email Address',
            'email.exists'=>'Email Does Not Exist',
            'email.email'=>'Invalid Email Address', 
            'email.regex'=>'We only accept WMSU email address', 
           
            'password.required'=>'Enter Your Password',
            
           
            
        ]);
        $credentials = array('email'=>$this->email,'password'=>$this->password);

        if( Auth::guard('web')->attempt($credentials)){
            $checkUser = User::where('email', $this->email)->first();
            if($checkUser->status == 1){
                Auth::guard('web')->logout();
                return redirect()->route('login')->with('fail','Your account has been disabled.');
            }else{
            //return redirect()->route('admin.home');
                if( $this->returnURL != null){
                    return redirect()->to($this->returnURL);
                }else{
                    redirect()->route('admin.home');
                }
            }
        } else{
            session()->flash('fail', 'Incorrect Email or Password');
            //remove alert success message
            $this->emit('alert_remove');
        }
    }
    public function render()
    {
        return view('livewire.user-login-form');
    }
}
 