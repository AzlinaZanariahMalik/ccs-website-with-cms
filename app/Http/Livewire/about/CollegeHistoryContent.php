<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\History;

class CollegeHistoryContent extends Component
{
    use WithFileUploads;
    public $history;
    public $dean_desc, $dean_image;
   
    public function mount(){
        $this->history = History::find(1);
        $this->history_desc = $this->history->history_desc;
        $this->history_image = $this->history->history_image;
    }

    public function UpdateHistory(){

        
        $this->validate([
            'history_desc'=>['required','min:150'],
            'history_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

        $data = [
            'history_desc'=> $this->history_desc,
            'history_image'=>$this->history_image->hashName(),
          
            $this->updated_at = now()
        ];
        if(!empty($this->history_image)){
            $this->history_image->store('public/photos/history');
        }

        $update = $this->history->update([
            'history_desc'=> $this->history_desc,
            'history_image'=>$this->history_image->hashName(),
            $this->updated_at = now()
        ]);
 
        
        

        //show success message
        session()->flash('success', 'History Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function render()
    {
        return view('livewire.about.college-history-content');
    }
}
 