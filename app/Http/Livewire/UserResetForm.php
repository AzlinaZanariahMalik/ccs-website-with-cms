<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserResetForm extends Component
{
    public $email, $token, $new_password, $confirm_password;

    public function mount(){
        $this->email = request()->email;
        $this->token = request()->token;
    }
    public function ResetPasswordHandler(){
        $this->validate([
            'email'=>'required|email|exists:users,email|regex:/(.*)wmsu\.edu\.ph$/i',
            'new_password'=>[
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ],
            'confirm_password'=>['required','same:new_password'],
        ],[
            'email.required'=>'Enter Your Email Address',
            'email.exists'=>'Email Does Not Exist',
            'email.email'=>'Invalid Email Address', 
            'email.regex'=>'We only accept WMSU email address', 
            'new_password.required'=>'Enter New Password',
            'new_password.min'=>'The Password should be at least 8 characters long',
            'new_password.regex'=>'The Password should be at least 8 characters long, with at least upper and lower case letter, numbers and symbols like !? $ % &',
            'confirm_password.required'=>'Confirm Password is Required',
            'confirm_password.same'=>'The Confirm Password and New Password Did Not Match'


        ]);

        $check_token = DB::table('password_reset_tokens')->where([
            'email'=>$this->email,
            'token'=>$this->token,
        ])->first();

        if(!$check_token){
            //show fail message
            session()->flash('fail', 'Invalid Token');
        }else{
            User::where('email', $this->email)->update([
                'password'=>Hash::make($this->new_password)
            ]);
            DB::table('password_reset_tokens')->where([
                'email'=>$this->email
            ])->delete();

            $success_token = Str::random(64);
            //show success message
            session()->flash('success', 'Your Password Has been Succesfully Updated');

            $this->redirectRoute('admin.login', ['tkn'=>$success_token,'UEmail'=>$this->email]);
        }

    }
    public function render()
    {
        return view('livewire.user-reset-form');
    }
}
