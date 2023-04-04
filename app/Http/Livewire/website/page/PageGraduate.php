<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\AcademicProgram;
use Livewire\withPagination;
class PageGraduate extends Component
{
    use withPagination;
    public $sortDirection='asc';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.website.page.page-graduate',  [
            'program'=>AcademicProgram::where('program_type', 'like', 'graduate')->orderBy('program_name', $this->sortDirection)->paginate(5)]);
    }
}
  