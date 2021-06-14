<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notice;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('users.admin.index');
    }

    public function profile()
    {
        return view('users.admin.profile');
    }

    public function setting()
    {
        return view('users.admin.setting');
    }

    public function addnotice()
    {
        return view('users.admin.addnotice');
    }

    public function notice()
    {
        $notice = Notice::with('user')->orderBy('id', 'DESC')->paginate(10);
        return view('users.admin.notice', compact('notice'));
    }

    public function single_notice($id)
    {
        $notice = Notice::with('user')->where('id', $id)->get();
        return view('users.admin.single_notice', compact('notice'));
    }

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
            }
        }
    }
    public function pendingstudent(){
        $students= Student::with(['user','department','batch'])->orderBy('id', 'DESC')->get();
        // dd($students);
        return view('users.admin.pendingstudent',compact('students'));
    }


    public function pendingteacher(){
        return view('users.admin.pendingteacher');
    }
public function studentaccountaccept(Request $request, $id){
    $student=User::find($id);
//     ->update([
// $student->'account_status'=$request->1
//     ]);
    // dd($student);
$student->account_status=1;
$student->save();
    return redirect()->back()->with('account_approved','Account Has Been Approved');
}




}
