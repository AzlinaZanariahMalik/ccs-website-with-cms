<?php

namespace App\Http\Livewire\Website\Shows;

use Livewire\Component;
use App\Models\News;
class GetNews extends Component
{
    public $news;
    //public $news_title, $post, $feature_image;
    public function mount($id)
    {
       
        $this->news = News::find($id);
      
        
       
    }
    public function render()
    {
        return view('livewire.website.shows.get-news');
    }
}
 