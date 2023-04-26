<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class NavHeader extends Component
{
    public $admin; //varialble name for database table
    // refresh function
    protected $listeners = [
        'updateNavHeader'=>'$refresh'
    ];
    public function mount(){
        $this->admin = User::find(auth('web')->id());
    }
    public function render()
    {
        return view('livewire.nav-header');
    } 
}
  