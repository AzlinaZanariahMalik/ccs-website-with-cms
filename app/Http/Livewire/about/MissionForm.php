<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\Mission;
class MissionForm extends Component
{
    public $min; //varialble name for database table
    public $mission; //varialble name for table's fields

    public function mount(){
        $this->min = Mission::find(1);
        $this->mission = $this->min->mission;
    }
    public function UpdateMissionContent(){
        $this->validate([
            'mission'=>['required','min:100'],
      
        ],[
            'mission.required'=>'Enter Vision of the University',
            'mission.min'=>'The Mission Description should be at least 150 words',
        ]);
        $update = $this->min->update([
            'mission'=>$this->mission,
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College Mission Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
       
    }
    public function render()
    {
        return view('livewire.about.mission-form');
    }
}
