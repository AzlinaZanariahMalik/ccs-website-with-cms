<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\AcademicProgram;
class HomeAcedemicProgram extends Component
{
    public function render()
    {
        return view('livewire.website.home.home-acedemic-program', [
            'academicprogram'=>AcademicProgram::all()]);
    }
}
