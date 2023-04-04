<?php

namespace App\Http\Livewire\Certificate;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\certificate;
use Carbon\Carbon;

class CertificationsForm extends Component
{
    use WithFileUploads;
    public $cert_name, $cert_desc, $cert_image, $cert_link;

    public function CreateCertification(){
        $this->validate([
           
            'cert_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

        $data = [
            
            'cert_image'=>$this->cert_image->hashName(),
          
            $this->created_at = Carbon::now()
        ];
        if(!empty($this->cert_image)){
            $this->cert_image->store('public/photos/Certification');
        }
 
        //create program
        certificate::create($data);
        $this->resetForms();
 
        //show success message
        session()->flash('success', 'Successfully Added Certification');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
        $this->emit('AddedCertification');
    }
    private function resetForms()
    {
       
        $this->cert_image = null;
      
        

    }
    public function render()
    {
        return view('livewire.certificate.certifications-form');
    }
}
