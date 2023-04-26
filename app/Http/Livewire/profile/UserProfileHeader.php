<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\User;
use Livewire\withFileUploads;
use Carbon\Carbon;
class UserProfileHeader extends Component
{

    use WithFileUploads;
    public $admin, $picture; //variable name for database table
    public $user;
     //refresh function
     protected $listeners = [
        'updateUserProfileHeader'=>'$refresh'
    ];
    public function mount(){
        $this->admin = User::find(auth('web')->id());
    }
    public function AddPicture(){
        $this->validate([
            'picture'=>'required|mimes:jpeg,png,jpg',
           
        ],[
            'picture.required'=>'Image File is Empty',
            
        ]); 
       
        if($this->admin){
            $user = User::find($this->admin);
            $user->update([
                'picture'=>$this->picture->hashName(),
                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Announcement Image');
             $this->emit('alert_remove');
        }  
          if(!empty($this->picture)){
            $this->picture->store('images/user');
        }
        
    
     
        //show success message
        session()->flash('success', 'Picture Successfully Updated');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }

    public function render()
    {
        return view('livewire.profile.user-profile-header');
    }
}
 