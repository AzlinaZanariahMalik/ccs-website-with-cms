<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\withFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class FacultyAndStaffForm extends Component
{
     use WithFileUploads;
    //variable
    public $faculty, $rank, $title, $dept, $picture;
    //variable for select id
    public $selectedItem; 
    public $action;

    protected $listeners = [
        'resetForms'
    ];

    public function resetForms(){
        $this->faculty = $this->rank = $this->title = $this->dept = $this->picture = null;
        $this->resetErrorBag(); //remove error message fields 
    }
 
    //assign
    public function AssignFaculty(){
        $this->validate([
            'faculty'=>'required',
            'rank'=>'required',
            'title'=>'required',
            'picture'=>'nullable|sometimes|image|mimes:jpeg,png,jpg',
             
        ],[
            'faculty.required'=>'Please Choose a Faculty User',
            'rank.required'=>'Please Select Order Ranking of a  Faculty',
            'title.required'=>'Title is required',
           
        ]);

        if($this->rank == '1')  {
            if(User::where('rank', 'like', '1')->exists()) {
                session()->flash('fail', 'Order Ranking is Not Available');
                //remove alert 
                $this->emit('alert_remove');
                 //close modal
                 $this->dispatchBrowserEvent('hide_user_modal');
            } else{
                User::where('id', $this->faculty)->update([
                'rank'=>$this->rank,
                'title'=>$this->title,
                'department_id'=>$this->dept,
                //'picture'=>,

               
                                
                ]);
                 $user = User::where('id', $this->faculty);

               
                if(!empty($this->picture)){
                    $user->picture = $this->picture->hashName(); 
                    $this->picture->store('public/photos/user');
                }
                 //reset forms
                 $this->name = $this->email = $this->username = $this->user_type = $this->publish_permission = null;
                 //close modal
                 $this->dispatchBrowserEvent('hide_user_modal');
                //show success message
                session()->flash('success', 'Successfully Assign Faculty');
                //remove alert 
                $this->emit('alert_remove');

            }
        }else{
           
            User::where('id', $this->faculty)->update([
                'rank'=>$this->rank,
                'title'=>$this->title,
                'department_id'=>$this->dept,
                //'picture'=>$this->picture->hashName(),
                
                                
                ]);
             
              
                
                if(!empty($this->picture)){
                    User::where('id', $this->faculty)->update([
                        'picture'=>$this->picture->hashName(),              
                        ]);
                    $this->picture->store('public/photos/user');
                }
         //reset forms
         $this->name = $this->email = $this->username = $this->user_type = $this->publish_permission = null;
         //close modal
         $this->dispatchBrowserEvent('hide_user_modal');
        //show success message
        session()->flash('success', 'Successfully Assign Faculty');
        //remove alert 
        $this->emit('alert_remove');
        }

        $this->resetForms();
        
        //remove alert 
        $this->emit('alert_remove');
        //function for refresh page
    }

   


    //select id and delete assign faculty title and rank
    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
       
       //initial state
       if($action == 'delete'){
         
        
         User::where('id', $this->selectedItem)->update([
            'rank'=>$this->rank = null,
            'title'=>$this->title = null,
            'department_id'=>$this->dept = null,
            'picture'=>$this->picture = null,   
        ]); Storage::disk('public')->delete('photos/user/'. $this->picture);
       
         //show success message
         session()->flash('success', 'Successfully Remove Faculty from Organizational Chart');
         //remove alert 
         $this->emit('alert_remove');

    }
        
    }
  
 
    public function render()
    {
        return view('livewire.faculty-and-staff-form',
        ['users'=>User::all()]);
    }
}
  