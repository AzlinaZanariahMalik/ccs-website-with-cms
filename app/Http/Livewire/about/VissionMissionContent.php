<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\Vision_Mission;
class VissionMissionContent extends Component
{
    
    public $vismin; //varialble name for database table
    public $vision, $mission; //varialble name for table's fields

    public function mount(){
        $this->vismin = Vision_Mission::find(1);
        $this->vision = $this->vismin->vision;
        $this->mission = $this->vismin->mission;
    }
    public function UpdateVisionMissionContent(){
        $this->validate([
            'vision'=>['required','min:100'],
            'mission'=>['required','min:100'],
      
        ],[
            'vision.required'=>'Enter Vision of the University',
            'vision.min'=>'The Vision Description should be at least 150 words',
            'mission.required'=>'Enter Vision of the University',
            'mission.min'=>'The Mission Description should be at least 150 words',
        ]);
        $update = $this->vismin->update([
            'vision'=>$this->vision,
            'mission'=>$this->mission,
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College Vision Mission Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
       
    }
    public function render()
    {
        return view('livewire.about.vission-mission-content');
    }
}
