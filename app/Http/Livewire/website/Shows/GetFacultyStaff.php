<?php

namespace App\Http\Livewire\Website\Shows;

use Livewire\Component;
use App\Models\User;
class GetFacultyStaff extends Component
{
    public $users;
    public function mount($id)
    {
       
        $this->users = User::find($id);
      
        
       
    }
    public function render()
    {
        return view('livewire.website.shows.get-faculty-staff');
    }
}
 