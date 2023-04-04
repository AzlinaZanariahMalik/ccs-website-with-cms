<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\History;
class PageHistory extends Component
{
    public function render()
    {
        return view('livewire.website.page.page-history',[
            'history'=>History::find(1)]);
    }
}
