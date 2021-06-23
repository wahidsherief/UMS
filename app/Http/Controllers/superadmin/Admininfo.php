<?php

namespace App\Http\Controllers\superadmin;
use app\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Admininfo extends Controller
{
    public function addadmin(){
        return view('users.superadmin.add_admin');
    }
    public function alladmin(){
        $role=Auth::user()->role;
        $users = User::orderBy('id', 'DESC')->get();
        return view('users.superadmin.all_admin',compact('users'));
    }

    public function deleteadmin($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back()->with('admin_deleted','Admin account deleted successfully');
    }



    public function addadminsubmit(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:55'],
            'role' => ['required'],
            'department' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $path = 'users/images/';
        $fontPath = public_path('fonts/AppleGaramond.ttf');
        $char = strtoupper($request->name[0]);
        $newAvatarName = rand(12, 3453) . time() . '_avatar.png';
        $dest = $path . $newAvatarName;

        $createAvatar = makeAvatar($fontPath, $dest, $char);
        $picture = $createAvatar == true ? $newAvatarName : '';

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->department = $request->department;
        $user->picture = $picture;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect()->back()->with('success', 'Registration Successful.');
        } else {
            return redirect()->back()->with('error', 'Failed Try again later Thank you!!!');
        }
    }



}
