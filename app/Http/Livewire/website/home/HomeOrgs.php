<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\Organization;
class HomeOrgs extends Component
{
    protected $listeners = [
        'AddedOrganization'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.website.home.home-orgs', [
            'orgs'=>Organization::all()]);
    }
}
 