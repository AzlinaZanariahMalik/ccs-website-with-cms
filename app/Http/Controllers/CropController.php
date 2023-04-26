<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
class CropController extends Controller
{
    //
    public function index()
    {
        return view('back.pages.profile');
    }
    /*--public function cropImageUploadAjax(Request $request)
    {
        $user = User::find(auth('web')->id());
        $path = 'images/user/';
        $file = $request->file('image');
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
    }--*/

    public function upload(Request $request)
    {
        $input = $request->all();
        $rules = ['imageUpload' => 'required'];
        $messages = [];
        $validator = Validator::make($request->all() , $rules, $messages);
        if ($validator->fails())
        {
            $arr = array( "status" => 400, "msg" => $validator->errors() ->first(), "result" => array());
        }
        else
        {
            try
            {
                if ($input['base64image'] || $input['base64image'] != '0') {
                    
                    $folderPath = public_path('images/');
                    $image_parts = explode(";base64,", $input['base64image']);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    // $file = $folderPath . uniqid() . '.png';
                    $filename = time() . '.'. $image_type;
                    $file =$folderPath.$filename;
                    file_put_contents($file, $image_base64);

                    $Image = new Image;
                    $Image->image = $filename;
                    $Image->save();
                }
                $msg = 'Image upload successfully.';
                \Session::flash('message', $msg );
            }
            catch(\Illuminate\Database\QueryException $ex)
            {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2]))
                {
                    $msg = $ex->errorInfo[2];
                }
                \Session::flash('error', $msg);
                
            }
            catch(Exception $ex)
            {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2]))
                {
                    $msg = $ex->errorInfo[2];
                }
                \Session::flash('error', $msg);
            }
        }
        // $this->index();
        return redirect('/profile');
    }
}
