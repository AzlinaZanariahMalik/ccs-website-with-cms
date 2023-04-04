<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\DeanCorner;
class PageDeanCorner extends Component
{
    public function render()
    {
        return view('livewire.website.page.page-dean-corner',[
            'dean'=>DeanCorner::find(1)]);
    }
}
