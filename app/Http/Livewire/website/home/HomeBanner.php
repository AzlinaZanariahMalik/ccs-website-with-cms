<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\CollegeBanner;
class HomeBanner extends Component
{
    public $sortDirection='desc';
    public function render()
    {
        return view('livewire.website.home.home-banner',[
            'banner'=>CollegeBanner::orderBy('id', $this->sortDirection)->get()]);
    }
}
 