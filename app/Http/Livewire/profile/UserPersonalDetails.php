<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\User;

class UserPersonalDetails extends Component
{
    public $admin; //varialble name for database table
    public $name, $extended_name, $username, $designation; //varialble name for table's fields

    public function mount(){
        $this->admin = User::find(auth('web')->id());
        $this->name = $this->admin->name;
        $this->extended_name = $this->admin->extended_name;
        $this->username = $this->admin->username;
        $this->email = $this->admin->email;
        $this->designation = $this->admin->designation;
        $this->title = $this->admin->title;
        $this->department = $this->admin->department;

    }
    public function UpdatePersonalDetails(){
        $this->validate([
            'name'=>'required|string',
            'username'=>'required|unique:users,username,'.auth('web')->id()

        ]);
        User::where('id', auth('web')->id())->update([
            'name'=>$this->name,
            'extended_name'=>$this->extended_name,
            'username'=>$this->username,
            'designation'=>$this->designation,
     
        ]);
        //show success message
        session()->flash('success', 'Personal Details Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
        $this->emit('updateUserProfileHeader');
        $this->emit('updateNavHeader');
    }
    public function render()
    {
        return view('livewire.profile.user-personal-details');
    }
}
