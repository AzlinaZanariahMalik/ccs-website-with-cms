<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\CollegeBanner;
 
class BannerCms extends Component
{
    use WithFileUploads;
    public $banner;
    public $banner_tagline, $banner_image;
   
    public function mount(){
        $this->banner = CollegeBanner::find(1);
        $this->banner_tagline = $this->banner->banner_tagline;
        $this->banner_image = $this->banner->banner_image;
    }

    public function UpdateBanner(){

        
        $this->validate([
            'banner_tagline'=>['required','max:20'],
            'banner_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

        $data = [
            'banner_tagline'=> $this->banner_tagline,
            'banner_image'=>$this->banner_image->hashName(),
          
            $this->updated_at = now()
        ];
        if(!empty($this->banner_image)){
            $this->banner_image->store('public/photos/banner');
        }

        $update = $this->banner->update([
            'banner_tagline'=> $this->banner_tagline,
            'banner_image'=>$this->banner_image->hashName(),
            $this->updated_at = now()
        ]);
 
        
        

        //show success message
        session()->flash('success', 'Banner Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
    }
   
    public function render()
    {
        return view('livewire.banner-cms');
    }
}

