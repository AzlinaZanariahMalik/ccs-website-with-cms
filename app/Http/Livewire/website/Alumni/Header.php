<?php

namespace App\Http\Livewire\Website\Alumni;

use Livewire\Component;
use App\Models\Alumni;
class Header extends Component
{
    public $alumni; //varialble name for database table
   
   
    public function mount(){
        $this->alumni = Alumni::find(auth('alu')->id());
    }
    public function render()
    {
        return view('livewire.website.alumni.header');
    }
}
