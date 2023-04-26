<?php

namespace App\Http\Livewire\Website\Shows;

use Livewire\Component;
use App\Models\Department;
class GetDept extends Component
{
    public $dept;
    public function mount($id)
    {
       
        $this->dept = Department::find($id);
      
        
       
    }
    public function render()
    {
        return view('livewire.website.shows.get-dept');
    }
}
