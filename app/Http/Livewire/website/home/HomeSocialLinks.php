<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\CollegeSocialMediaLink;
class HomeSocialLinks extends Component
{
    public $slink; //varialble name for database table
    public $college_fblink, $college_twitterlink; //varialble name for table's fields 

    public function mount(){
        $this->slink = CollegeSocialMediaLink::find(1);
        $this->college_fblink = $this->slink->college_fblink;
        $this->college_twitterlink = $this->slink->college_twitterlink;
    }
    public function render()
    {
        return view('livewire.website.home.home-social-links');
    }
}
 