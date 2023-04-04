<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\Vision_mission;
class PageVisionMission extends Component
{
    public function render()
    {
        return view('livewire.website.page.page-vision-mission',[
            'homeabout'=>Vision_mission::find(1)]);
    }
}
