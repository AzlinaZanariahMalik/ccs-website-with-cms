<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\DeanCorner;

class DeansCornerCMS extends Component
{
    use WithFileUploads;
    public $dean;
    public $dean_title, $dean_desc, $dean_image;
   
    public function mount(){
        $this->dean = DeanCorner::find(1);
        $this->dean_title = $this->dean->dean_title;
        $this->dean_desc = $this->dean->dean_desc;
        $this->dean_image = $this->dean->dean_image;
    }

    public function UpdateDeanCorner(){

        
        $this->validate([
            'dean_title'=>['required','max:20'],
            'dean_desc'=>['required','min:50'],
            'dean_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

        $data = [
            'dean_title'=> $this->dean_title,
            'dean_desc'=> $this->dean_desc,
            'dean_image'=>$this->dean_image->hashName(),
          
            $this->updated_at = now()
        ];
        if(!empty($this->dean_image)){
            $this->dean_image->store('public/photos/dean');
        }

        $update = $this->dean->update([
            'dean_title'=> $this->dean_title,
            'dean_desc'=> $this->dean_desc,
            'dean_image'=>$this->dean_image->hashName(),
            $this->updated_at = now()
        ]);
 
        
        

        //show success message
        session()->flash('success', 'Deans Corner Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function render()
    {
        return view('livewire.deans-corner-c-m-s');
    }
}
  