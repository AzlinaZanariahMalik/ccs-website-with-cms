<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use App\Models\Department;
use Livewire\withPagination;
use Illuminate\Support\Facades\Storage;
class DepartmentManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'AddedDepartment'=>'$refresh'
    ];
    //delete
    public function deleteDept($dept){
       
        $this->dept_id = $dept['id'];
        $this->dept_image = $dept['dept_image'];
        $this->dispatchBrowserEvent('openDeleteModal');
      }
      public function delete()
      {
       
         Storage::disk('public')->delete('photos/department/'. $this->dept_image);
        
         //Not Working
        /*-- $images = NewsImage::find($this->unique_id);
     
         foreach ($images->where('image',$this->unique_id) as $item)
         {
            Storage::disk('public')->delete('photos/news/'. $item);
            NewsImage::delete($item);
         }--*/
          
          //pass the variable
          Department::destroy($this->dept_id);


           //show success message
           session()->flash('success', 'Succesfully Deleted Department');
          //remove alert success message
          $this->emit('alert_remove');
            
           //close modal
          $this->dispatchBrowserEvent('hideDeleteModal');
  
      }
    public function render()
    {
        return view('livewire.department.department-management', [
            'department'=>Department::paginate(4)]);
    }
}
 