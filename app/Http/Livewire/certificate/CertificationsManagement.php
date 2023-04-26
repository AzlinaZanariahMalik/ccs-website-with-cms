<?php

namespace App\Http\Livewire\Certificate;

use Livewire\Component;
use App\Models\certificate;
use Livewire\withPagination;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class CertificationsManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'AddedCertification'=>'$refresh'
    ];
    //delete
    public function deleteCert($cert){
        $this->cert_id = $cert['id'];
        $this->cert_image = $cert['cert_image'];
        $this->dispatchBrowserEvent('openDeleteModal');
      }
      public function delete()
      {
       
        Storage::disk('public')->delete('photos/Certification/'.$this->cert_image);
        //pass the variable
        certificate::destroy($this->cert_id);
        //show success message
        session()->flash('success', 'Succesfully Deleted Certification');
         //remove alert success message
        $this->emit('alert_remove');    
        //close modal
        $this->dispatchBrowserEvent('hideDeleteModal');
      }
    public function render()
    {
        return view('livewire.certificate.certifications-management', [
            'certification'=>certificate::paginate(4)]);
    }
}
   