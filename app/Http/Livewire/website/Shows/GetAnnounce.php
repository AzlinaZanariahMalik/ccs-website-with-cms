<?php

namespace App\Http\Livewire\Website\Shows;

use Livewire\Component;
use App\Models\Announcement;
class GetAnnounce extends Component
{
    public $an;
    //public $news_title, $post, $feature_image;
    public function mount($id)
    {
       
        $this->an = Announcement::find($id);
      
        
       
    }
    public function render()
    {
        return view('livewire.website.shows.get-announce');
    }
}
