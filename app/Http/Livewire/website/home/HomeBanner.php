<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\CollegeBanner;
class HomeBanner extends Component
{
    public function mount(){
        $this->banner = CollegeBanner::find(1);
        $this->banner_tagline = $this->banner->banner_tagline;
        $this->banner_image = $this->banner->banner_image;
    }
    public function render()
    {
        return view('livewire.website.home.home-banner');
    }
}
 