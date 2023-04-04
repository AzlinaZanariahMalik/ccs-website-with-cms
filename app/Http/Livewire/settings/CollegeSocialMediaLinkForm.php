<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\CollegeSocialMediaLink;

class CollegeSocialMediaLinkForm extends Component
{
    public $college_social_link; //varialble name for database table
    public $college_fb, $college_twit; //varialble name for table's fields 

    public function mount(){
        $this->college_social_link = CollegeSocialMediaLink::find(1);
        $this->college_fb = $this->college_social_link->college_fblink;
        $this->college_twit = $this->college_social_link->college_twitterlink;
    }
    public function UpdateCollegeSocialLink(){
        $this->validate([
            'college_fb'=>'nullable|url',
            'college_twit'=>'nullable|url',
      
        ],[
            'college_fb.url'=>'Enter a valid Facebook Link',
            'college_twit.url'=>'Enter a valid Twitter Link',
        ]);
        $update = $this->college_social_link->update([
            'college_fblink'=>$this->college_fb,
            'college_twitterlink'=>$this->college_twit,
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College Social Media Link Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
       
    }

    public function render()
    {
        return view('livewire.settings.college-social-media-link-form');
    }
}
