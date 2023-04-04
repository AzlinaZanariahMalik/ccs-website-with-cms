<?php

namespace App\Http\Livewire\Organization;

use Livewire\Component;
use App\Models\Organization;
use Livewire\withPagination;
class OrganizationManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'AddedOrganization'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.organization.organization-management', [
            'organization'=>Organization::paginate(4)]);
    }
}
