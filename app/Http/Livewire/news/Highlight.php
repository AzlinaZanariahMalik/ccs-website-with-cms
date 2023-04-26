<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News;
class Highlight extends Component
{
    public $news;
    public $selectedItem; 
    public $action;
    public function AssignNews(){
        $this->validate([
            'news'=>'required',
        ],[
            'news.required'=>'Please Choose a News',
    
        ]);
        $highlight = 'true';
        if(News::where('highlight', 'like', 'true')->exists()) {
            session()->flash('fail', 'Please Remove the current assign news first.');
            //remove alert 
            $this->emit('alert_remove');
        } else{
        News::where('id', $this->news)->update([
            'highlight'=>$highlight,
        ]);
         //show success message
         session()->flash('success', 'Successfully Assign Faculty');
         //remove alert 
         $this->emit('alert_remove');
        }
       
        $this->resetForms();
    }
    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
       //initial state
       if($action == 'delete'){
         //pass the variable
         News::where('id', $this->selectedItem)->update([
            'highlight'=>$this->highlight = null,
            
        ]);
         //show success message
         session()->flash('success', 'Successfully Remove News from Highlight News');
         //remove alert 
         $this->emit('alert_remove');

    }
        
    }
  
    private function resetForms()
    {
        $this->news = null;
       

    }
 
    public function render()
    {
        return view('livewire.news.highlight',[
            'newsmanage'=>News::where('highlight', 'like', 'true')->get()]);
    }
}
