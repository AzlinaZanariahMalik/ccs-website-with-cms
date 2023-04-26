<?php

namespace App\Http\Livewire\Website\Shows;

use Livewire\Component;
use App\Models\AcademicProgram;
class GetProgram extends Component
{
    public $prog;
    public function mount($id)
    {
       
        $this->prog = AcademicProgram::find($id);
      
        
       
    }
    public function render()
    {
        return view('livewire.website.shows.get-program');
    }
}
