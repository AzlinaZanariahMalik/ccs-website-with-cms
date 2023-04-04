<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserForgotPasswordForm extends Component
{
    public $email;

    public function ForgotHandler(){
        $this->validate([
            'email'=>'required|email|exists:users,email'
        ],[
            'email.require'=>'The :attribute is required',
            'email.email'=>'Invalid Email Address',
            'email.exists'=>'The :attribute is not registered'
        ]);

        $token = base64_encode(Str::random(64));
        DB::table('password_reset_tokens')->insert([
            'email'=>$this->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),      
        ]);

        $user = User::where('email', $this->email)->first();
        $link = route('admin.reset-form',['token'=>$token, 'email'=>$this->email]);
        $body_message = "A Request to reset the password for <b>CCS Content Management System</b> account associated with ".
        $this->email.". <br> You can reset your password by clicking the button below.";
        $body_message.='<br><br>';
        $body_message.='<a href="'.$link.'" target="_blank" style="color:#fff;border-color:#0d3a0d;border-style:solid;border-width:10px 180px;background-color:#0d3a0d;display:inline-block;text-decoration:none;-webkit-text-size-adjust:none;box-sizing:border-box">Reset Password</a>';
        $body_message.='<br><br>';
        $body_message.='Ignore This Email If you did not make a request to reset a password';
        

        $data = array(
            'name'=> $user->name,   
            'body_message'=>$body_message,
        );

        Mail::send('forgot-password-message-form', $data, function($message) use ($user){
            $message->from('noreplyccs@wmsu.edu.ph', 'CCS Content Management');
            $message->to($user->email, $user->name)
                    ->subject('Reset Password');
        });
        
        //$mail_body = view('forgot-password-message-form', $data)->render();

        //$mailConfig = array(
        //    'mail_from_email'=> env('EMAIL_FROM_ADDRESS'),
        //    'mail_from_name'=> env('EMAIL_FROM_NAME'),
        //    'mail_recipient_email'=> $user->email,
        //    'mail_recipient_name'=> $user->name,
        //    'mail_subject'=> 'Reset Password',
        //    'mail_body'=> $mail_body
           

        //);

        //send reset password link to the user email address
        //sendMail($mailConfig);

        $this->email = null;
        session()->flash('success', 'Please Check Your Email, We have Send a Link to Reset your Password.');


    }
    public function render()
    {
        return view('livewire.user-forgot-password-form');
    }
}
