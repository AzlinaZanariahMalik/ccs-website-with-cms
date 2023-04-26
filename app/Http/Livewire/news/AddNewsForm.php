<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use Livewire\withFileUploads;
use App\Models\News;
use App\Models\NewsImage;
use Carbon\Carbon;
 

class AddNewsForm extends Component
{
    use WithFileUploads;
    public $news_title, $post, $feature_image, $images = [];

    public function CreateNews(){
        $this->validate([
            'news_title'=>['required','max:150'],
            'post'=>['required','min:150'],
            'feature_image'=>['mimes:jpeg,png,jpg,gif' ],
            

           
        ]); 

        $uniqID = Carbon::now()->timestamp .uniqid();

        $news = new News();
        $news->unique_id = $uniqID;
        $news->user_id = auth()->user()->id;
        $news->news_title = $this->news_title;
        $news->post = $this->post;
        $news->status = auth()->user()->publish_permission;
        $news->feature_image = $this->feature_image->hashName();
        $this->created_at = Carbon::now();
        
        
        if(!empty($this->feature_image)){
            $this->feature_image->store('public/photos/news');
        }
        foreach($this->images as $key=> $image){
            $pimage = new NewsImage();
            $pimage->news_unique_id = $uniqID;
           
            $imageName = Carbon::now()->timestamp . $key . '.' .$this->images[$key]->extension();
            $this->images[$key]->storeAs('public/photos/news', $imageName);
            $pimage->image = $imageName;
            $pimage->save();
            

        }

        //create news
        $news->save();

        
 
       
        $this->resetForms();

        //show success message
        session()->flash('success', 'Successfully Added News');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    private function resetForms()
    {
        $this->news_title = null;
        $this->post = null;
        $this->feature_image = null;
        $this->images = null;
      
        

    }
    public function render()
    {
        return view('livewire.news.add-news-form');
    }
} 
 