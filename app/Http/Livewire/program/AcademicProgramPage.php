<?php

namespace App\Http\Livewire\Program;

use Livewire\Component;
use App\Models\AcademicProgram;
use Livewire\withPagination;

class AcademicProgramPage extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $action;
    public $selectedItem; 

    //get the current selected id
    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
       
        //initial state
        if($action == 'delete'){
            //show modal
            $this->dispatchBrowserEvent('openDeleteModal');
        }
    }
    public function delete()
    {
        //pass the variable
        AcademicProgram::destroy($this->selectedItem);
        $this->dispatchBrowserEvent('closeDeleteModal');
    }
    
    public function render()
    {
        return view('livewire.program.academic-program-page', [
        'academicprogram'=>AcademicProgram::paginate(4)],
    );
    }
}
