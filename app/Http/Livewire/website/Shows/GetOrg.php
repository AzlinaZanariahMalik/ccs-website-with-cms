<?php

namespace App\Http\Livewire\Website\Shows;

use Livewire\Component;
use App\Models\Organization;
class GetOrg extends Component
{
    public $org;
    public function mount($id)
    {
       
        $this->org = Organization::find($id);
      
        
       
    }
    public function render()
    {
        return view('livewire.website.shows.get-org');
    }
}
