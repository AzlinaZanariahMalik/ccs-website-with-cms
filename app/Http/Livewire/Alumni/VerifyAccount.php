<?php

namespace App\Http\Livewire\Alumni;

use Livewire\Component;
use App\Models\Alumni;
use Livewire\withPagination;
use Carbon\Carbon;
class VerifyAccount extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $sortDirection='desc';

    public $checkedStudent = [];

    public function verifyAlumni(){
       
      
        $ver = 'verified';
       
        foreach($this->checkedStudent as $key=>$item){
            $data = array(
                 'verify_status'=> $ver,
                'updated_at'=> Carbon::now()
            );
           Alumni::where('id', $this->checkedStudent[$key])->update($data);
           
             //show success message
             session()->flash('success', 'Succesfully Verified Accounts');
             $this->emit('alert_remove'); 
        }
    }

    public function render()
    {
        return view('livewire.alumni.verify-account',[
            'alumni'=>Alumni::where('verify_status', 'like', 'unverified')->orderBy('id', $this->sortDirection)->paginate(5)]);
    }
}
