<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function updateInfo(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:55'],

            'email' => ['required', 'string', 'email', 'max:255' . Auth::user()->id],
        ]);

        $query = User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        if ($query) {
            return redirect()->back()->with('updated', 'Updated Successful.');
        } else {
            return redirect()->back()->with('error', 'Failed Try again later Thank you!!!');
        }
    }

    //Update Image
    public function updatePicture(Request $request)
    {
        $path = 'users/images/';
        $file = $request->file('upload_profile_image');
        $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

        $upload = $file->move(public_path($path), $new_name);

        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Somgthing Went Worng Try again later']);
        } else {
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

            if ($oldPicture != '') {
                if (\File::exists(public_path($path . $oldPicture))) {
                    \File::delete(public_path($path . $oldPicture));
                }
            }

            $update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Somgthing Went Worng Try again later']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Image Uploaded Successfully']);
            }
        }
    }

    //change password
    public function ChangePassword(Request $request)
    {
 //Validate form
        $validator = \Validator::make($request->all(), [
            'oldpassword' => [
                'required', function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::user()->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:3|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Enter your current password',
            'oldpassword.min' => 'Old password must have atleast 8 characters',
            'oldpassword.max' => 'Old password must not be greater than 30 characters',
            'newpassword.required' => 'Enter new password',
            'newpassword.min' => 'New password must have atleast 8 characters',
            'newpassword.max' => 'New password must not be greater than 30 characters',
            'cnewpassword.required' => 'ReEnter your new password',
            'cnewpassword.same' => 'New password and Confirm new password must match'
        ]);

        if (!$validator->passes()) {
            return redirect()->back()->with('error_password_update', 'Something went wrong try again later');
        } else {
            $update = User::find(Auth::user()->id)->update(['password' => \Hash::make($request->newpassword)]);

            if (!$update) {
                return redirect()->back()->with('error_password_update', 'Something went wrong try again later');
            } else {
                return redirect()->back()->with('success_password_update', 'Password Updated Successfully.');
            }}}

}
