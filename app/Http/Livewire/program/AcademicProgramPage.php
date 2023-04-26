<?php

namespace App\Http\Livewire\Program;

use Livewire\Component;
use App\Models\AcademicProgram;
use Livewire\withPagination;

class AcademicProgramPage extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $program;
    public $program_id;

   //delete
   public function deleteprogram($program){
    $this->program_id = $program['id'];
    $this->dispatchBrowserEvent('openDeleteModal');
  }
  public function delete()
  {
      //pass the variable
      AcademicProgram::destroy($this->program_id);

       //show success message
       session()->flash('success', 'Succesfully Deleted program');
        
       //close modal
      $this->dispatchBrowserEvent('hideDeleteModal');

  }
    public function render()
    {
        return view('livewire.program.academic-program-page', [
        'academicprogram'=>AcademicProgram::paginate(4)],
    );
    }
}

