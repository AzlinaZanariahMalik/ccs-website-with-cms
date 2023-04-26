<?php

namespace App\Http\Livewire\Alumni;

use Livewire\Component;
use App\Models\Alumni;
use Livewire\withPagination;
class UserManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $sortDirection='desc';
    public function render()
    {
        return view('livewire.alumni.user-management',[
            'alumni'=>Alumni::orderBy('id', $this->sortDirection)->paginate(5)]);
    }
}
