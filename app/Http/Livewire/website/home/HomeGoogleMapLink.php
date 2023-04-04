<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\CollegeGoogleMapLink;
class HomeGoogleMapLink extends Component
{
    public $college; //varialble name for database table
    public $college_googlemap; //varialble name for table's fields 

    public function mount(){
        $this->college = CollegeGoogleMapLink::find(1);
        $this->college_googlemap = $this->college->college_googlemap;
    }
    public function render()
    {
        return view('livewire.website.home.home-google-map-link');
    }
}
 