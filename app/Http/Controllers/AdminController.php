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
