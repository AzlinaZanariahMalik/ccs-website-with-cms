<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\Department;
use Livewire\withPagination;
class PageDepartment extends Component
{
    use withPagination;
    public $sortDirection='asc';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.website.page.page-department',  [
            'department'=>Department::orderBy('dept_name', $this->sortDirection)->paginate(5)]);
    }
}
