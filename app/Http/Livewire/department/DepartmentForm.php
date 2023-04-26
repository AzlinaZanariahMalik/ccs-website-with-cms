<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\Department;
use Carbon\Carbon;

class DepartmentForm extends Component
{

    use WithFileUploads;
    public $dept_name, $dept_desc, $dept_image, $dept_link;

    public function CreateDepartment(){
        $this->validate([
            'dept_name'=>['required'],
            'dept_desc'=>['required','min:50'],
            'dept_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

        $data = [
            'dept_name'=> $this->dept_name,
            'dept_desc'=> $this->dept_desc,
            'dept_link'=> $this->dept_link,
            'dept_image'=>$this->dept_image->hashName(),
          
            $this->created_at = Carbon::now()
        ];
        if(!empty($this->dept_image)){
            $this->dept_image->store('public/photos/department');
        }
 
        //create program
        Department::create($data);
        $this->resetForms();
 
        //show success message
        session()->flash('success', 'Successfully Added Department');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
        $this->emit('AddedDepartment');
    }
    
    private function resetForms()
    {
        $this->dept_name = null;
        $this->dept_desc = null;
        $this->dept_link = null;
        $this->dept_image = null;
      
        

    }
    public function render()
    {
        return view('livewire.department.department-form');
    }
}
