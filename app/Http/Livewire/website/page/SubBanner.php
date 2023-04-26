<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\Website_setting;
class SubBanner extends Component
{
    public function render()
    {
        return view('livewire.website.page.sub-banner',[
            'banner'=>Website_setting::find(1)]);
    }
}
