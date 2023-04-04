<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\Vision_Mission;
class Mission extends Component
{
    
    public $vismin; //varialble name for database table
    public $mission; //varialble name for table's fields

    public function mount(){
        $this->vismin = Vision_Mission::find(1);
        $this->mission = $this->vismin->mission;
    }
    public function UpdateMissionContent(){
        $this->validate([
            'mission'=>['required','min:100'],
      
        ],[
            'mission.required'=>'Enter Vision of the University',
            'mission.min'=>'The Mission Description should be at least 150 words',
        ]);
        $update = $this->vismin->update([
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
        return view('livewire.about.mission');
    }
}
