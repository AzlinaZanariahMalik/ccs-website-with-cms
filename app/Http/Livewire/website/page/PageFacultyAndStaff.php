<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\User;
class PageFacultyAndStaff extends Component
{
    public function render()
    {
        return view('livewire.website.page.page-faculty-and-staff', ['users'=>User::all()]);
    }
} 
 