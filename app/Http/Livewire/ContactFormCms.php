<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;

class ContactFormCms extends Component
{
    public $contactForm;
    public $college_address, $college_email, $college_telephone, $college_mobile;
    public function mount(){
        $this->contactForm = ContactForm::find(1);
        $this->college_address = $this->contactForm->college_address;
        $this->college_email = $this->contactForm->college_email;
        $this->college_telephone = $this->contactForm->college_telephone;
        $this->college_mobile = $this->contactForm->college_mobile;
    }
    public function updateContact(){
        $this->validate([
            'college_address'=>'required',
            'college_email'=>'required|email',
            'college_telephone'=>'required',
            'college_mobile'=>'required',
      
        ]);
        $update = $this->contactForm->update([
            'college_address'=>$this->college_address,
            'college_email'=>$this->college_email,
            'college_telephone'=>$this->college_telephone,
            'college_mobile'=>$this->college_mobile,
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College About Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');

        //function for refresh page
       
       
    }
    public function render()
    {
        return view('livewire.contact-form-cms');
    }
}
 