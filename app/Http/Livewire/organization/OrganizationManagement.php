<?php

namespace App\Http\Livewire\Organization;

use Livewire\Component;
use App\Models\Organization;
use Livewire\withPagination;
use Illuminate\Support\Facades\Storage;
class OrganizationManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'AddedOrganization'=>'$refresh'
    ];
     //delete
     public function deleteOrg($org){
       
        $this->org_id = $org['id'];
        $this->org_image = $org['org_image'];
        $this->dispatchBrowserEvent('openDeleteModal');
      }
      public function delete()
      {
       
         Storage::disk('public')->delete('photos/Organization/'. $this->org_image);
        
         //Not Working
        /*-- $images = NewsImage::find($this->unique_id);
     
         foreach ($images->where('image',$this->unique_id) as $item)
         {
            Storage::disk('public')->delete('photos/news/'. $item);
            NewsImage::delete($item);
         }--*/
          
          //pass the variable
          Organization::destroy($this->org_id);


           //show success message
           session()->flash('success', 'Succesfully Deleted Organization');
          //remove alert success message
          $this->emit('alert_remove');
            
           //close modal
          $this->dispatchBrowserEvent('hideDeleteModal');
  
      }
    public function render()
    {
        return view('livewire.organization.organization-management', [
            'organization'=>Organization::paginate(4)]);
    }
}
