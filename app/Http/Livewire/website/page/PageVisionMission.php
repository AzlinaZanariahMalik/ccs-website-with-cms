<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\Vision;
use App\Models\Mission;
class PageVisionMission extends Component
{
    public $vis, $min;
    public function mount(){
        $this->vis = Vision::find(1);
        $this->min = Mission::find(1);
    }

    public function render()
    {
        return view('livewire.website.page.page-vision-mission');
    }
}
