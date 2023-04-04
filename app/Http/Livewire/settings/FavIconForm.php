<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Website_setting;
class FavIconForm extends Component
{
    use WithFileUploads;
    public $icon;
    public $website_icon;

    public function mount(){
        $this->icon = Website_setting::find(1);
        $this->website_icon = $this->icon->website_icon;
    }
    public function UpdateIcon(){
        $this->validate([
            'website_icon' => 'mimes:png'
        ],[
            'website_icon.mimes'=>'Logo Must Be a PNG Image',
        ]);
 
        
        $update = $this->icon->update([
            'website_icon'=>$this->website_icon->hashName(),
            $this->updated_at = now()
        ]);

        if (!empty($this->website_icon)) {
            $this->website_icon->store('public/photos/logo-icon');
        }
 
         
        //show success message
        session()->flash('success', 'College Icon Successfully Saved');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page

    }
    public function render()
    {
        return view('livewire.settings.fav-icon-form');
    }
}
 