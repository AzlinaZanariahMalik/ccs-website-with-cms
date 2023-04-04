<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserChangePasswordForm extends Component
{
    public $current_password, $new_password, $confirm_new_password; //varialble name for table's fields

    public function userChangePassword(){
        $this->validate([
            'current_password'=>[
                'required', function($attribute, $value, $fail){
                    if(!Hash::check($value, User::find(auth('web')->id())->password)){
                        return $fail(_('The Current Password you have enter is incorrect'));
                    }
                },
            ],
            'new_password'=>[
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ],
            'confirm_new_password'=>['required','same:new_password'],
        ],[
            'current_password.required'=>'Enter your Password',
            'new_password.required'=>'Enter New Password',
            'new_password.min'=>'The Password should be at least 8 characters long',
            'new_password.regex'=>'The Password should be at least 8 characters long, with at least upper and lower case letter, numbers and symbols like !? $ % &',
            'confirm_new_password.required'=>'Confirm Password is Required',
            'confirm_new_password.same'=>'The Confirm Password and New Password Did Not Match',


        ]);

        $query = User::find(auth('web')->id())->update([
            'password'=>Hash::make($this->new_password)
        ]);

        if($query){
            //show success message
            session()->flash('success', 'Successfully Change Password');
            $this->current_password = $this->new_password = $this->confirm_new_password = null;
            //remove alert success message: NOT WORKING
            $this->emit('alert_remove');
        }else{
            //show error message
            session()->flash('fail', 'Something Went Wrong, Please try again later');
        }

       
    }

   
    public function render()
    {
        return view('livewire.profile.user-change-password-form');
    }
}
