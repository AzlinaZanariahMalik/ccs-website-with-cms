<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\Announcement;
class HomeAnnounce extends Component
{
    public $sortDirection='desc';
    public function render()
    {
        return view('livewire.website.home.home-announce',[
            'announce'=>Announcement::where('an_for', 'like', 'public')->orderBy('id', $this->sortDirection)->get()]);
    }
}
 