<?php

namespace App\Http\Livewire\Organization;

use Livewire\Component;
use App\Models\Organization;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class EditForm extends Component
{
    use WithFileUploads;
    public $org, $organ;
    public $org_name, $org_desc, $org_link, $org_image;
    
    public function mount($id)
    {
            $org =Organization::findOrFail($id);
            $this->org_id = $org['id'];
            $this->org_name = $org['org_name'];
            $this->org_desc = $org['org_desc'];
            $this->org_link = $org['org_link'];
            $this->org_image = $org['org_image'];
       
    }
    //update function
    public function UpdateOrg(){
        //dd( $this->user_id);
        $this->validate([
           
            'org_name'=>['required','max:50'],
            'org_desc'=>['required'],
           
        ],[
            'org_name.required'=>'Enter Title',
            'org_name.max'=>'Title must be equal or less than 50 words',
            'org_desc.required'=>'Enter Description',
        ]);
       
        if($this->org_id){
            $organ = Organization::find($this->org_id);
            $organ->update([
                'org_name'=> $this->org_name,
                'org_desc'=> $this->org_desc,

                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Organization');
             $this->emit('alert_remove'); 

        }
        //show fail message
        session()->flash('fail', 'Something Went Wrong');
        $this->emit('alert_remove');
    }
    public function UpdateOrgImg(){

        
        $this->validate([
            'org_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

      
      

        if($this->org_id){
            $organ = Organization::find($this->org_id);
            $organ->update([
                'org_image'=>$this->org_image->hashName(),
                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated Organization Image');
             $this->emit('alert_remove');
        }  
          if(!empty($this->org_image)){
            $this->org_image->store('public/photos/Organization');
        }
        

        //show success message
        session()->flash('successimg', 'Image Successfully Updated');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function render()
    {
        return view('livewire.organization.edit-form');
    }
}
