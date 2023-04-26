<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use App\Models\Department;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class DeptEditForm extends Component
{
    use WithFileUploads;
    public $dept, $depart;
    public $dept_name, $dept_desc, $dept_link, $dept_image;
    
    public function mount($id)
    {
            $dept =department::findOrFail($id);
            $this->dept_id = $dept['id'];
            $this->dept_name = $dept['dept_name'];
            $this->dept_desc = $dept['dept_desc'];
            $this->dept_link = $dept['dept_link'];
            $this->dept_image = $dept['dept_image'];
       
    }
    //update function
    public function UpdateDept(){
        //dd( $this->user_id);
        $this->validate([
           
            'dept_name'=>['required','max:50'],
            'dept_desc'=>['required'],
           
        ],[
            'dept_name.required'=>'Enter Title',
            'dept_name.max'=>'Title must be equal or less than 50 words',
            'dept_desc.required'=>'Enter Description',
        ]);
       
        if($this->dept_id){
            $depart = Department::find($this->dept_id);
            $depart->update([
                'dept_name'=> $this->dept_name,
                'dept_desc'=> $this->dept_desc,

                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Department');
             $this->emit('alert_remove'); 

        }
        //show fail message
        session()->flash('fail', 'Something Went Wrong');
        $this->emit('alert_remove');
    }
    public function UpdateDeptImg(){

        
        $this->validate([
            'dept_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

      
      

        if($this->dept_id){
            $depart = Department::find($this->dept_id);
            $depart->update([
                'dept_image'=>$this->dept_image->hashName(),
                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Department Image');
             $this->emit('alert_remove');
        }  
          if(!empty($this->dept_image)){
            $this->dept_image->store('public/photos/department');
        }
        

        //show success message
        session()->flash('successimg', 'Image Successfully Updated');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function render()
    {
        return view('livewire.department.dept-edit-form');
    }
}
