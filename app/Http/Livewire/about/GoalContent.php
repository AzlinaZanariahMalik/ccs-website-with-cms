<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use App\Models\Goal;

class GoalContent extends Component
{
    public $goal_content; //varialble name for database table
    public $goal; //varialble name for table's fields

    public function mount(){
        $this->goal_content = Goal::find(1);
        $this->goal = $this->goal_content->goal;
    }
    public function UpdateGoalContent(){
        $this->validate([
            'goal'=>['required','min:150'],
      
        ],[
            'goal.required'=>'Enter College Goal Description',
            'goal.min'=>'The Goal Description should be at least 150 words',
        ]);
        $update = $this->goal_content->update([
            'goal'=>$this->goal,
            $this->updated_at = now()
        ]);
       
        //show success message
        session()->flash('success', 'College Goal Successfully Updated');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
       
    }
    public function render()
    {
        return view('livewire.about.goal-content');
    }
}
