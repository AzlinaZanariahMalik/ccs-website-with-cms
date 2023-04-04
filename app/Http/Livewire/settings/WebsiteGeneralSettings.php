<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\Website_setting;

class WebsiteGeneralSettings extends Component
{
    public $settings; //varialble name for database table
    public $website_name, $website_abbv; //varialble name for table's fields

    public function mount(){
        $this->settings = Website_setting::find(1);
        $this->website_name = $this->settings->website_name;
        $this->website_abbv = $this->settings->website_abbv_name;
    }
    public function updateWebsiteGeneralSettings(){
       $this->validate([
        'website_name'=>['required', 'min:2'],
        'website_abbv'=>['required', 'min:2']
       ],[
 
        'website_name.required'=>'Website Name is Required',
        'website_name.min'=>'There might be a mistake, the name you entered is too short',
        'website_abbv.required'=>'Website Name abbrevation is Required',
        'website_abbv.min'=>'There might be a mistake, the abbrevation name you entered is 1 letter',
        

    ]);
    $update = $this->settings->update([
        'website_name'=>$this->website_name,
        'website_abbv_name'=>$this->website_abbv,
        $this->updated_at = now()
    ]);
   
    //show success message
    session()->flash('success', 'Changes Successfully Updated');
    //remove alert success message: NOT WORKING
    $this->emit('alert_remove');
    //function for refresh page
    $this->emit('updateWebsiteSettings');
    }
    public function render()
    {
        return view('livewire.settings.website-general-settings');
    }
}
