<?php

namespace App\Http\Livewire\Organization;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\Organization;
use Carbon\Carbon;
class OrganizationForm extends Component
{
    use WithFileUploads;
    public $org_name, $org_desc, $org_image, $org_link;

    public function CreateOrganization(){
        $this->validate([
            'org_name'=>['required'],
            'org_desc'=>['required','min:150'],
            'org_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

        $data = [
            'org_name'=> $this->org_name,
            'org_desc'=> $this->org_desc,
            'org_link'=> $this->org_link,
            'org_image'=>$this->org_image->hashName(),
          
            $this->created_at = Carbon::now()
        ];
        if(!empty($this->org_image)){
            $this->org_image->store('public/photos/Organization');
        }
 
        //create program
        Organization::create($data);
        $this->resetForms();
 
        //show success message
        session()->flash('success', 'Successfully Added Organization');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
        $this->emit('AddedOrganization');
    }
    private function resetForms()
    {
        $this->org_name = null;
        $this->org_desc = null;
        $this->org_link = null;
        $this->org_image = null;
      
        

    }
    public function render()
    {
        return view('livewire.organization.organization-form');
    }
}
 