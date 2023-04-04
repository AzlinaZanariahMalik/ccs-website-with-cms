<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Models\Website_setting;


class UserController extends Controller
{
    //create index method

    public function index(Request $request){
        return view('back.pages.home');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function ResetForm(Request $request, $token = null){
        $data = [
            'title'=>'Reset Password'
        ];

        return view('back.pages.auth.reset', $data)->with(['token'=>$token, 'email'=>$request->email]);
    }

 
    public function changeProfilePicture(Request $request){
        $user = User::find(auth('web')->id());
        $path = 'images/user/';
        $file = $request->file('file');
        $old_picture = $user->getAttributes()['picture'];
        $file_path = $path.$old_picture;
        $new_image_name = 'CCSIMG'.$user->id().rand(1,100000).'.jpg';
        

        if($old_picture != null && File::exists(public_path($file_path))){
            File::delete(public_path($file_path));
        }
        $upload = $file->move(public_path($path), $new_picture_name);
        if($upload){
            $user->update([
                'picture'=>$new_picture_new
           ]);
            return response()->json(['status'=> 1, 'msg'=>'Your Profile Picture has been successfully updated.']);

        }else{
            return response()->json(['status'=>0, 'Something went wrong, Please Try Again Later']);
        }

    }
    
    //Website setting logo
    public function LogoUploadStore(Request $request)
    {
    	 $request->validate([
            'image' => 'required|image|mimes:png|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
  
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }
}
