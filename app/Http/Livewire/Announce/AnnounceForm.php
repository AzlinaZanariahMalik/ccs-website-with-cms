<?php

namespace App\Http\Livewire\Announce;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\withFileUploads;
use Carbon\Carbon;
class AnnounceForm extends Component
{
    use WithFileUploads;
    public $an_title, $an_for, $an_desc, $an_image;

    public function CreateAnnouncement(){
        $this->validate([
            'an_title'=>['required','max:50'],
            'an_desc'=>['required'],
            'an_for'=>['required'],
            'an_image'=>'nullable|sometimes|image|mimes:jpeg,png,jpg',

        ],[
            'an_title.required'=>'Enter Title',
            'an_title.max'=>'Title must be equal or less than 50 words',
            'an_desc.required'=>'Enter Description',
            'an_for.required'=>'Choose For What type of Announcement is For',
            'an_image.mimes'=>'File type must be either jpeg,png,jpg',
        ]); 

        $an = new Announcement();
        $an->an_title = $this->an_title; 
        $an->an_desc = $this->an_desc;
        $an->an_for = $this->an_for;
        $an->an_user = auth()->user()->id;
        
        $this->created_at = Carbon::now();
        
        
        if(!empty($this->an_image)){
            $an->an_image = $this->an_image->hashName();
            $this->an_image->store('public/photos/announce');
        }
       
        //create an
        $an->save();


        $this->resetForms();

        //show success message
        session()->flash('success', 'Successfully Added Announcement');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    private function resetForms()
    {
        $this->an_title = null;
        $this->an_for = null;
        $this->an_desc = null;
        $this->an_image = null;
     
      
        

    }
    public function render()
    {
        return view('livewire.announce.announce-form');
    }
}
