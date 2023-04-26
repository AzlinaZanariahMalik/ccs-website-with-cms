<?php

namespace App\Http\Livewire\Website\Alumni;

use Livewire\Component;
use App\Models\Alumni;
use App\Models\AlumniStudentInfo;
use App\Models\AlumniEmploymentInfo;
use App\Models\AlumniSurvey;
class AlumniForm extends Component
{
  
    public $EmpStatus = NULL;

  
    public function subAlumniForm()
    {
        
    }
    public function render()
    {
        return view('livewire.website.alumni.alumni-form');
    }
}
