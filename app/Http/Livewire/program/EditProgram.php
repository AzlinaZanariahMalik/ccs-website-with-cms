<?php

namespace App\Http\Livewire\Program;

use Livewire\Component;
use App\Models\AcademicProgram;
use Carbon\Carbon;
class EditProgram extends Component
{
    public $prog, $aprog;
    public $program_name, $program_abbv, $program_desc, $program_type;
    public function mount($id)
    {
            $prog = AcademicProgram::findOrFail($id);
            $this->program_id = $prog['id'];
            $this->program_name = $prog['program_name'];
            $this->program_abbv = $prog['program_abbv'];
            $this->program_desc = $prog['program_desc'];
            $this->program_type = $prog['program_type'];
       
    }
    //update function
    public function UpdateAcademicProgram(){
        //dd( $this->user_id);
        $this->validate([
           
            'program_name'=>['required','max:150'],
            'program_abbv'=>['required','max:15'],
            'program_desc'=>['required','min:10'],
            'program_type'=>'required',
        ]);
       
        if($this->program_id){
            $aprog = AcademicProgram::find($this->program_id);
            $aprog->update([
                'program_name'=> $this->program_name,
                'program_abbv'=> $this->program_abbv,
                'program_desc'=> $this->program_desc,
                'program_type'=> $this->program_type,
                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Program');
             $this->emit('alert_remove');
          
             

        }
        //show fail message
        session()->flash('fail', 'Something Went Wrong');
        $this->emit('alert_remove');
    }
    public function render()
    {
        return view('livewire.program.edit-program');
    }
}
