<?php

namespace App\Http\Livewire\Program;

use Livewire\Component;
use App\Models\AcademicProgram;
class AddProgram extends Component
{
    public $program_name, $program_abbv, $program_desc, $program_type;
    public function CreateAcademicProgram(){ 
        $this->validate([
            'program_name'=>['required','max:150'],
            'program_abbv'=>['required','max:15'],
            'program_desc'=>['required','min:10'],
            'program_type'=>'required',
            
        ]);  

        $data = [
            'program_name'=> $this->program_name,
            'program_abbv'=> $this->program_abbv,
            'program_desc'=> $this->program_desc,
            'program_type'=> $this->program_type,
            $this->created_at = now()
        ];

        //create program
        AcademicProgram::create($data);
        //close modal 
        $this->dispatchBrowserEvent('closeModal'); 
        $this->resetForms();
        
       
        //show success message
        session()->flash('success', 'Successfully Create Academic Program');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    private function resetForms()
    {
        $this->program_name = null;
        $this->program_abbv = null;
        $this->program_desc = null;
        $this->program_type = null;

    }
    public function render()
    {
        return view('livewire.program.add-program');
    }
}
