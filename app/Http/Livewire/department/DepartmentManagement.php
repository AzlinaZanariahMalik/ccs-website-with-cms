<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;
use Livewire\withPagination;
class DepartmentManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'AddedDepartment'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.department-management', [
            'department'=>Department::paginate(4)]);
    }
}
 