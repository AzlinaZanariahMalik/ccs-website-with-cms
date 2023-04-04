<?php

namespace App\Http\Livewire\Settings;
use Livewire\WithFileUploads;
use App\Models\Website_setting;


use Livewire\Component;

class CollegeLogoForm extends Component
{
    use WithFileUploads;
    public $logo;
    public $website_logo;

    public function mount(){
        $this->logo = Website_setting::find(1);
        $this->website_logo = $this->logo->website_logo;
    }
    public function UpdateLogo(){
        $this->validate([
            'website_logo' => 'mimes:png'
        ],[
            'website_logo.mimes'=>'Logo Must Be a PNG Image',
        ]);
 
        
        $update = $this->logo->update([
            'website_logo'=>$this->website_logo->hashName(),
            $this->updated_at = now()
        ]);

        if (!empty($this->website_logo)) {
            $this->website_logo->store('public/photos/logo-icon');
        }
 
         
        //show success message
        session()->flash('success', 'College Logo Successfully Saved');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page

    }
    public function render()
    {
        
        return view('livewire.settings.college-logo-form');
    }
}
