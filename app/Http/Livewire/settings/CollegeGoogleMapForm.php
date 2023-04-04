<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\CollegeGoogleMapLink;

class CollegeGoogleMapForm extends Component
{
    public $college_google_map; //varialble name for database table
    public $college_maplink; //varialble name for table's fields 

     // refresh function and get data from database
     protected $listeners = [
        'updateGoogleMapCMS'=>'$refresh'
    ];
    public function mount(){
        $this->college_google_map = CollegeGoogleMapLink::find(1);
        $this->college_maplink = $this->college_google_map->college_googlemap;
    }
    public function UpdateCollegeGoogleMap(){
        $this->validate([
            'college_maplink'=>'required|url',
      
        ],[
            'college_maplink.required'=>'The College Google Map is required',
            'college_maplink.url'=>'Enter a valid Google Map Link',
        ]);

        $update = $this->college_google_map->update([
            'college_googlemap'=>$this->college_maplink,
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College Google Map Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page and update display
        $this->emit('updateGoogleMapCMS');
       
    }

    public function render()
    {
        return view('livewire.settings.college-google-map-form');
    }
}
