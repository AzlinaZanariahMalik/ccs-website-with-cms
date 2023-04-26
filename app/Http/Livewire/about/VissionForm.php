<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\Vision;
class VissionForm extends Component
{
    public $vis; //varialble name for database table
    public $vision; //varialble name for table's fields

    public function mount(){
        $this->vis = Vision::find(1);
        $this->vision = $this->vis->vision;
       
    }
    public function UpdateVisionContent(){
        $this->validate([
            'vision'=>['required','min:100'],
           
      
        ],[
            'vision.required'=>'Enter Vision of the University',
            'vision.min'=>'The Vision Description should be at least 150 words',
            
        ]);
        $update = $this->vis->update([
            'vision'=>$this->vision,
           
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College Vision Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
       
    }
    public function render()
    {
        return view('livewire.about.vission-form');
    }
}
