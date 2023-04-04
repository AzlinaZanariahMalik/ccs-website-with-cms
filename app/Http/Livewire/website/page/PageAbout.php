<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\About;
class PageAbout extends Component
{
    public function render()
    {
        return view('livewire.website.page.page-about',[
            'homeabout'=>About::find(1)]);
    }
}
 
