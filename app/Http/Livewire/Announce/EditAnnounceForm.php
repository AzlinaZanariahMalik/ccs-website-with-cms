<?php

namespace App\Http\Livewire\Announce;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class EditAnnounceForm extends Component
{

    use WithFileUploads;
    public $an, $anno;
    public $an_title, $an_desc, $an_for, $an_image;
    
    public function mount($id)
    {
            $an = Announcement::findOrFail($id);
            $this->an_id = $an['id'];
            $this->an_title = $an['an_title'];
            $this->an_desc = $an['an_desc'];
            $this->an_for = $an['an_for'];
            $this->an_image = $an['an_image'];
       
    }
    //update function
    public function UpdateAnnounce(){
        //dd( $this->user_id);
        $this->validate([
           
            'an_title'=>['required','max:50'],
            'an_desc'=>['required'],
            'an_for'=>['required'],
        ],[
            'an_title.required'=>'Enter Title',
            'an_title.max'=>'Title must be equal or less than 50 words',
            'an_desc.required'=>'Enter Description',
            'an_for.required'=>'Choose For What type of Announcement is For',
        ]);
       
        if($this->an_id){
            $anno = Announcement::find($this->an_id);
            $anno->update([
                'an_title'=> $this->an_title,
                'an_desc'=> $this->an_desc,
                'an_for'=> $this->an_for,
               
                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Announcement');
             $this->emit('alert_remove'); 

        }
        //show fail message
        session()->flash('fail', 'Something Went Wrong');
        $this->emit('alert_remove');
    }
    public function UpdateAnnounceImg(){

        
        $this->validate([
            'an_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

      
      

        if($this->an_id){
            $anno = Announcement::find($this->an_id);
            $anno->update([
                'an_image'=>$this->an_image->hashName(),
                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Announcement Image');
             $this->emit('alert_remove');
        }  
          if(!empty($this->an_image)){
            $this->an_image->store('public/photos/announce');
        }
        

        //show success message
        session()->flash('successimg', 'Image Announcement Successfully Updated');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function render()
    {
        return view('livewire.announce.edit-announce-form');
    }
}
