<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\Goal;

class PageGoal extends Component
{
    public function render()
    {
        return view('livewire.website.page.page-goal', [
            'homeabout'=>Goal::find(1)]);
    }
}
 