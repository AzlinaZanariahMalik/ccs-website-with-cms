<?php

namespace App\Http\Livewire\Announce;

use Livewire\Component;
use App\Models\Announcement;
class ForFaculty extends Component
{
    public $sortDirection='desc';
    public function render()
    {
        return view('livewire.announce.for-faculty',[
            'announce'=>Announcement::where('an_for', 'like', 'faculty')->orderBy('id', $this->sortDirection)->get()]);
    }
}
 