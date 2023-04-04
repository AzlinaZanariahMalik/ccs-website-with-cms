<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\User;

class UserProfileHeader extends Component
{
    public $admin; //variable name for database table
     //refresh function
     protected $listeners = [
        'updateUserProfileHeader'=>'$refresh'
    ];
    public function mount(){
        $this->admin = User::find(auth('web')->id());
    }
    public function render()
    {
        return view('livewire.profile.user-profile-header');
    }
}
 