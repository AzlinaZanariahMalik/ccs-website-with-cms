<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\Message;
use Carbon\Carbon;
class PageContactForm extends Component
{
    public $name, $email, $message;
    public function SendMessage(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required|min:100',

        ],[
            'name.required'=>'Enter Your Name',
            'email.required'=>'Enter Your Email',
            'message.required'=>'Enter Your Message',
            'message.min'=>'Your Message should at be least 100 words',
        ]);
       
        $data = [
            'name'=> $this->name,
            'email'=> $this->email,
            'message'=> $this->message,
            $this->created_at = now()
        ];

        //create program
        Message::create($data);
        $this->resetForms();
        //show success message
        session()->flash('success', 'Thank You For Sending us a Message We Will Reply to you as soon as possible.');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');

        //function for refresh page
        //$this->emit('refreshHomeAboutCCS');
        
    }
    private function resetForms()
    {
        $this->name = null;
        $this->email = null;
        $this->message = null;

    }
    public function render()
    {
        return view('livewire.website.page.page-contact-form');
    }
}
 