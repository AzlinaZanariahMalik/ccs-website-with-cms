<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News;
use App\Models\NewsImage;
use Livewire\withPagination;
use Illuminate\Support\Facades\Storage;
class NewsManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    //variable
    public $newsitem;

    //delete
    public function deleteNews($newsitem){
        //dd( $newsitem);
        $this->news_id = $newsitem['id'];
        $this->feature_image = $newsitem['feature_image'];
        $this->unique_id = $newsitem['unique_id'];
        $this->dispatchBrowserEvent('openDeleteModal');
      }
      public function delete()
      {
       
         Storage::disk('public')->delete('photos/news/'. $this->feature_image);
        
         //Not Working
        /*-- $images = NewsImage::find($this->unique_id);
     
         foreach ($images->where('image',$this->unique_id) as $item)
         {
            Storage::disk('public')->delete('photos/news/'. $item);
            NewsImage::delete($item);
         }--*/
          
          //pass the variable
          News::destroy($this->news_id);


           //show success message
           session()->flash('success', 'Succesfully Deleted News Article');
          //remove alert success message
          $this->emit('alert_remove');
            
           //close modal
          $this->dispatchBrowserEvent('hideDeleteModal');
  
      }
    public function render()
    {
        return view('livewire.news.news-management',  [
            'newsmanage'=>News::paginate(5)]);
    }
}
    