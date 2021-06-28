<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Batch;
use App\Models\Department;
use App\Models\Semester;
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
        $notice = Notice::with('user')->where('id', $id)->first();
        return view('users.admin.single_notice', compact('notice'));
    }
    public function deletenotice($id)
    {
        Notice::where('id',$id)->delete();
        return redirect()->back()->with('notice_deleted','Notice Has Been Removed');
    }

    public function deletedepartment($id)
    {
        Department::where('id',$id)->delete();
        return redirect()->back()->with('notice_deleted','Notice Has Been Removed');
    }















    public function pendingstudent(){
        $students= Student::with(['user','department','batch'])->orderBy('id', 'DESC')->get();
        // dd($students);
        return view('users.admin.pendingstudent',compact('students'));
    }


    public function pendingteacher(){
        $teachers= Teacher::with(['user','department'])->orderBy('id', 'DESC')->get();
        return view('users.admin.pendingteacher',compact('teachers'));
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

public function teacheraccountaccept(Request $request, $id){
    $teacher=User::find($id);
//     ->update([
// $student->'account_status'=$request->1
//     ]);
    // dd($student);
$teacher->account_status=1;
$teacher->save();
    return redirect()->back()->with('account_approved','Account Has Been Approved');
}

public function teacheraccountdelete($id){
   Teacher::where('id',$id)->delete();
    return redirect()->back()->with('request_removed','Request Has Been Removed');
}
public function studentaccountdelete($id){
    Student::where('id',$id)->delete();
     return redirect()->back()->with('request_removed','Request Has Been Removed');
 }
}
