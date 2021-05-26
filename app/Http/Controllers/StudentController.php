<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Filesystem\Filesystem\File;
class StudentController extends Controller
{
    public function index(){
        return view('users.student.index');
    }
    public function profile(){
        return view('users.student.profile');
    }
    public function setting(){
        return view('users.student.setting');
    }
    function updateInfo(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:55'],

            'email' => ['required', 'string', 'email', 'max:255'.Auth::user()->id],


        ]);



$query= User::find(Auth::user()->id)->update([
    'name'=>$request->name,
    'email'=>$request->email,
]);
if($query){
    return redirect()->back()->with('updated','Updated Successful.');
}
else{
    return redirect()->back()->with('error','Failed Try again later Thank you!!!');
}
}

//Update Image
public function updatePicture(Request $request){
$path= 'users/images/';
$file= $request->file('upload_profile_image');
$new_name='UIMG_'.date('Ymd').uniqid().'.jpg';

$upload= $file->move(public_path($path),$new_name);

if(!$upload){
    return response()->json(['status'=>0,'msg'=>'Somgthing Went Worng Try again later']);
}
else{
    $oldPicture= User::find(Auth::user()->id)->getAttributes()['picture'];

    if($oldPicture != ''){
        if(File::exists(public_path($path.$oldPicture))){
            File::delete(public_path($path.$oldPicture));
        }
    }


    $update = User::find(Auth::user()->id)->update(['picture'=>$new_name]);


    if(!$update){
        return response()->json(['status'=>0,'msg'=>'Somgthing Went Worng Try again later']);
    }
    else{
        return response()->json(['status'=>1,'msg'=>'Image Uploaded Successfully']);
    }
}
}

}
