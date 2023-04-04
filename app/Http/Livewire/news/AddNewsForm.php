<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\News;

 

class AddNewsForm extends Component
{
    use WithFileUploads;
    public $news_title, $post, $feature_image;

    public function CreateNews(){
        $this->validate([
            'news_title'=>['required','max:150'],
            'post'=>['required','min:350'],
            'feature_image'=>['mimes:jpeg,png,jpg,gif' ]
           
        ]); 

        $data = [
            'news_title'=> $this->news_title,
            'post'=> $this->post,
            'user_id'=> auth()->user()->id,
            'status'=> auth()->user()->publish_permission,
            'feature_image'=>$this->feature_image->hashName(),
          
            $this->created_at = now()
        ];
        if(!empty($this->feature_image)){
            $this->feature_image->store('public/photos/news');
        }
 
        //create program
        News::create($data);
        $this->resetForms();

        //show success message
        session()->flash('success', 'Successfully Added News');
        //remove alert success message: NOT WORKING
        $this->emit('alert_remove');
        //function for refresh page
    }
    private function resetForms()
    {
        $this->news_title = null;
        $this->post = null;
        $this->feature_image = null;
      
        

    }
    public function render()
    {
        return view('livewire.news.add-news-form');
    }
} 
 