<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\DeanCorner;
class HomeDeanCorner extends Component
{
    public $dean;
    public $dean_title, $dean_desc, $dean_image;

    public function mount(){
        $this->dean = DeanCorner::find(1);
        $this->dean_title = $this->dean->dean_title;
        $this->dean_desc = $this->dean->dean_desc;
        $this->dean_image = $this->dean->dean_image;
    }
    public function render()
    {
        return view('livewire.website.home.home-dean-corner');
    }
}
 