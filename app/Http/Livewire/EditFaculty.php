<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class EditFaculty extends Component
{
    use WithFileUploads;
    public $admin; //varialble name for database table
    public $name, $extended_name, $username, $designation, $qualification; //varialble name for table's fields

    public function mount($id){
        $admin = User::findOrFail($id);
        $this->user_id = $admin['id'];
        $this->name = $admin['name'];
        $this->extended_name = $admin['extended_name'];
        $this->username = $admin['username'];
        $this->email = $admin['email'];;
        $this->designation = $admin['designation'];;
        $this->title = $admin['title'];;
        $this->department = $admin['department'];;
        $this->qualification = $admin['qualification'];;
        $this->picture = $admin['picture'];;

    }
    public function UpdatePersonalDetails(){
        $this->validate([
            'name'=>'required|string',
            

        ]);
        if($this->user_id){
        $users = User::find($this->user_id);
        $users->update([
            'name'=>$this->name,
            'extended_name'=>$this->extended_name,
            'designation'=>$this->designation,
            'qualification'=>$this->qualification,
     
        ]);
       }
        //show success message
        session()->flash('success', 'Personal Details Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
        $this->emit('updateUserProfileHeader');
        $this->emit('updateNavHeader');
    }
    public function UpdateUserImg(){

        
        $this->validate([
            'picture'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

      
      

        if($this->user_id){
            $users = User::find($this->user_id);
            $users->update([
                'picture'=>$this->picture->hashName(),
                $this->updated_at = Carbon::now()
            ]);
             
        }  
          if(!empty($this->picture)){
            $this->picture->store('public/photos/user');
        }
        

        //show success message
        session()->flash('successimg', ' Successfully Updated User Profile');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function render()
    {
        return view('livewire.edit-faculty');
    }
}
