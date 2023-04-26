<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Website_setting;
class SubBanner extends Component
{
    use WithFileUploads;
    public $banner;
    public $ban;

    public function mount(){
        $this->banner = Website_setting::find(1);
        $this->ban = $this->banner->website_banner;
    }
    public function updateWebsiteBanner(){
        $this->validate([
            'ban' => 'mimes:jpeg,png,jpg'
        ]);
 
        
        $update = $this->banner->update([
            'website_banner'=>$this->ban->hashName(),
            $this->updated_at = now()
        ]);

        if (!empty($this->ban)) {
            $this->ban->store('public/photos/logo-icon');
        }
 
         
        //show success message
        session()->flash('success', 'College Sub Banner Successfully Saved');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page

    }
    public function render()
    {
        return view('livewire.settings.sub-banner');
    }
}
