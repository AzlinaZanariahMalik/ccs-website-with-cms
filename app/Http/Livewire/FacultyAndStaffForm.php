<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class FacultyAndStaffForm extends Component
{
    //variable
    public $faculty, $rank, $title, $dept;
    //variable for select id
    public $selectedItem; 
    public $action;
    //assign
    public function AssignFaculty(){
        $this->validate([
            'faculty'=>'required',
            'rank'=>'required',
            'title'=>'required',
           
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
            } else{
                User::where('id', $this->faculty)->update([
                'rank'=>$this->rank,
                'title'=>$this->title,
                'department_id'=>$this->dept,
                                
                ]);
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
                                
                ]);
        //show success message
        session()->flash('success', 'Successfully Assign Faculty');
        //remove alert 
        $this->emit('alert_remove');
        }

        /*--if($this->rank == '1' || $this->rank == '2')  {
            if(User::where('rank', 'like', '1')->exists() || User::where('rank', 'like', '2')->exists()) {
                session()->flash('fail', 'Order Ranking is Not Available');
                //remove alert 
                $this->emit('alert_remove');
            } else{
                User::where('id', $this->faculty)->update([
                'rank'=>$this->rank,
                'title'=>$this->title,
                'department_id'=>$this->dept,
                                
                ]);
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
                                
                ]);
        //show success message
        session()->flash('success', 'Successfully Assign Faculty');
        //remove alert 
        $this->emit('alert_remove');
        }--*/
        
        

       
        $this->resetForms();
       
        //remove alert 
        $this->emit('alert_remove');
        //function for refresh page
    }
     
    //select id
    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
       //initial state
       if($action == 'delete'){
         //pass the variable
         User::where('id', $this->selectedItem)->update([
            'rank'=>$this->rank = null,
            'title'=>$this->title = null,
            'department_id'=>$this->dept = null,
        ]);
    }
        
    }
  
    private function resetForms()
    {
        $this->faculty = null;
        $this->rank = null;
        $this->title = null;
        $this->dept = null;

    }
 
    public function render()
    {
        return view('livewire.faculty-and-staff-form',
        ['users'=>User::all()]);
    }
}
  