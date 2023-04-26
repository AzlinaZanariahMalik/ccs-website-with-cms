<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News;
use App\Models\NewsImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class EditNews extends Component
{
    use WithFileUploads;
    public $news, $news_title, $status, $post, $feature_image, $images = [];
    public $news_id, $newsImages;
    //public $news_title, $post, $feature_image;

    protected $listeners = [
        'updateDeleteImage'=>'$refresh',
        'updateMultipleImages'=>'$refresh',
    ];
    public function mount($id)
    { 
        $news = News::findOrFail($id);
        $this->news_id = $news->id;
        $this->news_title = $news->news_title;
        $this->post = $news->post;
        $this->feature_image = $news->feature_image;
        $this->newsImages = NewsImage::where('news_unique_id',$news->unique_id)->get();
       
    } 
    public function UpdateNews(){
        $this->validate([
            'news_title'=>['required','max:150'],
            'post'=>['required','min:150'],
            
           
        ]); 

        $news = News::where('id', $this->news_id)->first();
        $news->news_title = $this->news_title;
        $news->post = $this->post;
        
       

        $this->updated_at = Carbon::now();
        
        
        if(!empty($this->images)){
            foreach($this->images as $key=> $image){
                $pimage = new NewsImage();
                $pimage->news_unique_id = $news->unique_id;
            
                $imageName = Carbon::now()->timestamp . $key . '.' .$this->images[$key]->extension();
                $this->images[$key]->storeAs('public/photos/news', $imageName);
                $pimage->image = $imageName;
                $pimage->save();
                

            }
           
         }
        
        //create news
        $news->update();
        $this->emit('updateMultipleImages');
        
 
       
       

        //show success message
        session()->flash('success', 'Successfully Updated News');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function UpdateImage(){
        $this->validate([
            'feature_image'=>['mimes:jpeg,png,jpg,gif' ],
        ]); 

        $news = News::where('id', $this->news_id)->first();
        $news->feature_image = $this->feature_image->hashName();
       
        
        $this->updated_at = Carbon::now();
        
        
        if(!empty($this->feature_image)){
            
            $this->feature_image->store('public/photos/news');

        }
        

        //create news
        $news->update();

        
 
       
       

        //show success message
        session()->flash('successimg', 'Successfully Updated Featured Image News');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function deleteImage($id)
    {
        $image = NewsImage::where('id', $id)->first();
        $filename = $image->getAttributes()['image'];
        Storage::disk('public')->delete('photos/news/'.$filename);
        $image->delete();


        //show success message
        session()->flash('success', 'Successfully Delete Image');
        //remove alert success message
        $this->emit('alert_remove');
        $this->emit('updateDeleteImage');
       
    }
    public function render()
    {
        return view('livewire.news.edit-news');
    }
}
 