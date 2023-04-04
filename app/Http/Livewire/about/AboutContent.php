<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\About;

class AboutContent extends Component
{
    public $about_content;
    public $about;

    public function mount(){
        $this->about_content = About::find(1);
        $this->about = $this->about_content->about;
    }
    public function UpdateAboutContent(){
        $this->validate([
            'about'=>['required','min:150'],
      
        ],[
            'about.required'=>'Enter College About Description',
            'about.min'=>'The About Description should be at least 150 words',
        ]);
        $update = $this->about_content->update([
            'about'=>$this->about,
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College About Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');

        //function for refresh page
        $this->emit('refreshHomeAboutCCS');
       
    }
    public function render()
    {
        return view('livewire.about.about-content');
    }
}
