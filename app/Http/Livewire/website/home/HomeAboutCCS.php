<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\About;
class HomeAboutCCS extends Component
{ 

    //public $homeabout; varialble name for database table
   
    protected $listeners = [
        'refreshHomeAboutCCS' =>'$refresh'
    ]; 
   
   
    /*public function mount(){
        $this->homeabout = About::find(1);
     
    }*/
    public function render()
    { 
        return view('livewire.website.home.home-about-c-c-s',[
            'homeabout'=>About::find(1)] );
    }
}
 