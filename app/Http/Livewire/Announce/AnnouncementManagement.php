<?php

namespace App\Http\Livewire\Announce;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\withPagination;
class AnnouncementManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    //delete
   public function deleteannounce($an){
    $this->an_id = $an['id'];
    $this->dispatchBrowserEvent('openDeleteModal');
  }
  public function delete()
  {
      //pass the variable
      Announcement::destroy($this->an_id);

       //show success message
       session()->flash('success', 'Succesfully Deleted Announcement');
        
       //close modal
      $this->dispatchBrowserEvent('hideDeleteModal');

  }
    public function render()
    {
        return view('livewire.announce.announcement-management' ,[
            'announce'=>Announcement::paginate(4)]);
    }
}
