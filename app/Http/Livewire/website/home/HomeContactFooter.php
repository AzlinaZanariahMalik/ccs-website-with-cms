<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\ContactForm;

class HomeContactFooter extends Component
{
    public $contact;
    public $college_address, $college_email, $college_telephone, $college_mobile;
    public function mount(){
        $this->contact = ContactForm::find(1);
        $this->college_address = $this->contact->college_address;
        $this->college_email = $this->contact->college_email;
        $this->college_telephone = $this->contact->college_telephone;
        $this->college_mobile = $this->contact->college_mobile;
    }
    public function render()
    {
        return view('livewire.website.home.home-contact-footer');
    }
}
 