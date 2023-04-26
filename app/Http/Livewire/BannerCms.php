<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\CollegeBanner;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\withPagination;
class BannerCms extends Component
{
    use WithFileUploads;
   
    public $banner_image;
    public $old_image, $new_image;
    public $sortDirection='desc';
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'resetForms'
    ];
   
    public function resetForms(){
        $this->banner_image = null;
        $this->resetErrorBag(); //remove error message fields 
    }
 
   
    public function AddBanner(){
        $this->validate([
            'banner_image'=>'required|mimes:jpeg,png,jpg|dimensions:width=1920,height=556',
           
        ],[
            'banner_image.required'=>'Enter Image File',
            'banner_image.dimensions'=>'Blur Image Detected, Desired width is 1920px and height is 556px',
        ]); 
       
        $banner = new CollegeBanner();
        $banner->banner_image = $this->banner_image->hashName();
        $this->created_at = Carbon::now();

        if(!empty($this->banner_image)){
            $this->banner_image->store('public/photos/banner');
        }

        //create news
        $banner->save();
     
        //reset forms
        $this->banner_image = null;
        //close modal
        $this->dispatchBrowserEvent('hide_add_modal');
        //show success message
        session()->flash('success', 'Banner Successfully Added');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }

  

  
    //delete
    public function deleteBanner($ban){
        $this->banner_id = $ban['id'];
        $this->banner_image = $ban['banner_image'];
        $this->dispatchBrowserEvent('openDeleteModal');
      }
      public function delete()
      {
       
        Storage::disk('public')->delete('photos/banner/'.$this->banner_image);
        //pass the variable
        CollegeBanner::destroy($this->banner_id);
        //show success message
        session()->flash('success', 'Succesfully Deleted Banner');
         //remove alert success message
        $this->emit('alert_remove');    
        //close modal
        $this->dispatchBrowserEvent('hideDeleteModal');
      }
   
    public function render()
    {
        return view('livewire.banner-cms',[
            'banner'=>CollegeBanner::orderBy('id', $this->sortDirection)->paginate(4)]);
    }
}

