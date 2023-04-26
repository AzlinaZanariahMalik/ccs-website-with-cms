<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fiform;
use Livewire\withFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Livewire\withPagination;
class DlForm extends Component
{
    use WithFileUploads;
    public $fname, $ffile;
    public $sortDirection='desc';
    use withPagination;
    protected $listeners = [
        'resetForms'
    ]; 

    public function resetForms(){
        $this->fname =$this->ffile = null;
        $this->resetErrorBag(); //remove error message fields 
    } 
    public function AddFile(){
        $this->validate([
            'fname'=>'required|max:50',
            'ffile'=>'required|file|max:2048',
           
        ],[
            'fname.required'=>'Enter File Name',
            'fname.max'=>'File Name is Maximum 50 words',

            'ffile.mimes'=>'File Not Supported. Only pdf, doc and docx is accepted',
        ]); 
       
        $file = new FiForm();
        $file->fname = $this->fname;
        $file->ffile = $this->ffile->hashName();
        $this->created_at = Carbon::now();

        if(!empty($this->ffile)){
            $this->ffile->store('public/files');
        }

        //create news
        $file->save();
      
       //reset forms
       $this->fname =$this->ffile = null;
       //close modal
        
        //close modal
        $this->dispatchBrowserEvent('hide_add_modal');
        //show success message
        session()->flash('success', 'Banner Successfully Added');
        //remove alert success message
        $this->emit('alert_remove');
        //function for refresh page
    }
    public function export($ban)
    {
       
        $this->file_id = $ban['id'];
        $this->fname = $ban['fname'];
        $filename = $this->ffile = $ban['ffile'];
        //dd(file_exists(storage_path('files/'.$filename)));
        return Storage::disk('public')->download('files/'.$filename);
        if (Storage::disk('public')->exists('files/'.$filename)) 
        { $url = Storage::url('public/files/' . $filename); 
            return redirect($url); 
        }

    }
    //delete
    public function deleteFile($ban){
        $this->file_id = $ban['id'];
        $this->fname = $ban['fname'];
        $this->ffile = $ban['ffile'];
        $this->dispatchBrowserEvent('openDeleteModal');
      }
      public function delete()
      {
         
        Storage::disk('public')->delete('files/'.$this->ffile);
        //pass the variable
        Fiform::destroy($this->file_id);
        //show success message
        session()->flash('success', 'Succesfully Deleted File');
         //remove alert success message
        $this->emit('alert_remove');    
        //close modal
        $this->dispatchBrowserEvent('hideDeleteModal');
      }

    public function render()
    {
        return view('livewire.dl-form',[
            'file'=>Fiform::orderBy('id', $this->sortDirection)->paginate(4)]);
    }
}
