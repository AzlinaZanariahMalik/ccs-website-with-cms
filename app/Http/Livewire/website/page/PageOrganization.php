<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\organization;
use Livewire\withPagination;

class PageOrganization extends Component
{
    use withPagination;
    public $sortDirection='asc';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.website.page.page-organization',  [
            'organization'=>organization::orderBy('org_name', $this->sortDirection)->paginate(5)]);
    }
}
