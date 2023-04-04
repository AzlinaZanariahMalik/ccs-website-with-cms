<?php

namespace App\Http\Livewire\Users; 

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
//Generate Random Pass
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;
use Illuminate\Support\Facades\Mail;
use Livewire\withPagination;

class UsersManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    //variable
    public $name, $email, $username, $user_type, $publish_permission, $designation;

    //searching
    public $search;
    public $perPage = 5; //define the set page to 5
   
    public $status;
    public $user;
    public $user_id;

    protected $listeners = [
        'resetForms'
    ];

    public function resetForms(){
        $this->name = $this->email = $this->username = $this->user_type = $this->publish_permission = null;
        $this->resetErrorBag(); //remove error message fields 
    }
 
    public function addUsers(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email|regex:/(.*)wmsu\.edu\.ph$/i',
            'username'=>'required|unique:users,username|min:6|max:15',
            'user_type'=>'required',
            'publish_permission'=>'required',
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.unique'=>'Email is not available',
            'email.regex'=>'The Only Email Address accepted is WMSU email address',
            'email.email'=>'Invalid Email Address',
            'username.required'=>'Username is required',
            'user_type.required'=>'Please Choose User Type',
            'publish_permission.required'=>'Please Choose User Publish Permission',
        ]);

        //check the internet connection
        if($this->isOnline()){
            //send link
                //generate password
                $generate_password = Random::generate(8);
                //intert database
                $user = new User();
                $user->name = $this->name;
                $user->email = $this->email;
                $user->username = $this->username;
                $user->designation = $this->designation;
                $user->password = Hash::make($generate_password);
                $user->user_type = $this->user_type;
                $user->publish_permission = $this->publish_permission;
                $user->created_at = Carbon::now();
                $saved = $user->save();  

                $data = array(
                    'name' => $this->name,
                    'email' => $this->email,
                    'username' => $this->username,
                    'password'=> $generate_password,
                    'url' => route('admin.profile'),
                );

                $user_email = $this->email;
                $user_name = $this->name;

                if($saved){

                    Mail::send('new-user-email-message-form', $data, function($message) use ($user_email, $user_name){
                        $message->from('azgiraffe401@gmail.com', 'CCS Content Management System');
                        $message->to($user_email,$user_name)
                                ->subject('CCS CMS Account');
                    });
                    //show success message
                    session()->flash('success', 'New User has been succesfully added');
                    //reset forms
                    $this->name = $this->email = $this->username = $this->user_type = $this->publish_permission = null;
                    //close modal
                    $this->dispatchBrowserEvent('hide_add_user_modal');

                }else{
                    //show fail message
                    session()->flash('fail', 'Please Try Again Later');
                }
 
        } else{
            //show offline message
            session()->flash('offline', 'You are Offline, Please Check Your Internet Connection and try again');
        }
    }
 
    //mount data yo edit form
    public function editUser($user){
        //dd(['open', $user]); 
        $this->user_id = $user['id'];
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->username = $user['username'];
        $this->designation = $user['designation'];
        $this->user_type = $user['user_type']['id'];
        $this->publish_permission = $user['publish_permission'];
       //open edit modal
      $this->dispatchBrowserEvent('openEditModal');
    }

    //update function
    public function updateUsers(){
        //dd( $this->user_id);
        $this->validate([
           
            'name'=>'required',
            'email'=>'required|email|ends_with:wmsu.edu.ph|unique:users,email,'.$this->user_id,
            'username'=>'required|min:6|max:15|unique:users,username,'.$this->user_id,
            'user_type'=>'required',
            'publish_permission'=>'required',
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.unique'=>'Email is not available',
            'email.ends_with'=>'The Only Email Address accepted is WMSU email address',
            'email.email'=>'Invalid Email Address',
            'username.required'=>'Username is required',
            'user_type.required'=>'Please Choose User Type',
            'publish_permission.required'=>'Please Choose User Publish Permission',
        ]);
       
        if($this->user_id){
            $user = User::find($this->user_id);
            $user->update([
                'name'=>$this->name,
                'email'=>$this->email,
                'username'=>$this->username,
                'designation'=>$this->designation,
                'user_type'=>$this->user_type,
                'publish_permission'=>$this->publish_permission,
                $this->updated_at = Carbon::now()
            ]);
             //show success message
             session()->flash('success', 'Succesfully Updated User');
          
             //close modal
             $this->dispatchBrowserEvent('hideEditModal');

        }
    }
    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site,'r')){
            return true;
        } else {
            return false;
        }
    }
    public function render()
    {
        return view('livewire.users.users-management',[
            'users'=>User::search(trim($this->search))
            ->paginate($this->perPage),
        ]);
    }
}
 