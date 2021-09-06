<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\PendingAccount;
use App\Mail\RejectAccount;
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
        Notice::where('id', $id)->delete();
        return redirect()->back()->with('notice_deleted', 'Notice Has Been Removed');
    }

    public function deletedepartment($id)
    {
        Department::where('id', $id)->delete();
        return redirect()->back()->with('notice_deleted', 'Notice Has Been Removed');
    }

    public function pendingstudent()
    {

        $students = Student::with(['user', 'semester', 'batch'])->orderBy('id', 'DESC')->get();
        // dd($students);
        return view('users.admin.pendingstudent', compact('students'));
    }

    public function pendingteacher()
    {
        $teachers = Teacher::with(['user', 'department'])->orderBy('id', 'DESC')->get();
        $count_account = User::where([['role', 3], ['account_status', 0]])->count();
        // dd($count_account);
        return view('users.admin.pendingteacher', compact(['teachers', 'count_account']));
    }
    public function pending_account_details($id)
    {
        $user = User::find($id);
        if ($user->role == 3) {

            $teacher = Teacher::where('user_id', $id)->with(['user'])->first();
            return view('users.admin.pending_teacher_details', compact('teacher'));
        } elseif ($user->role == 4) {
            $student = Student::where('user_id', $id)->with(['user'])->first();

            return view('users.admin.pending_user.pending_student_details', compact('student'));
        }
    }



    public function studentaccountaccept(Request $request, $id)
    {
        $student = User::find($id);
        //     ->update([
        // $student->'account_status'=$request->1
        //     ]);
        // dd($student);
        $student->account_status = 1;
        $student->save();

        // $email = $student->email;
        // $accept = [];
        // Mail::to($email)->send(new PendingAccount($accept));

        return redirect()->route('admin.pending_accounts')->with('account_approved', 'Account Has Been Approved');
    }

    public function teacheraccountaccept(Request $request, $id)
    {
        $teacher = User::find($id);
        //     ->update([
        // $student->'account_status'=$request->1
        //     ]);
        // dd($student);

        $teacher->account_status = 1;
        $teacher->save();
        return redirect()->route('admin.pending.teacher')->with('account_approved', 'Account Has Been Approved');
    }

    public function teacheraccountdelete($id)
    {
        Teacher::where('id', $id)->delete();


        return redirect()->back()->with('request_removed', 'Request Has Been Removed');
    }
    public function studentaccountdelete($id)
    {
        $student = Student::where('id', $id)->first();
        $user_id = $student->user_id;
        $student_userid = User::find($user_id);
        $email = $student_userid->email;
        // dd($email);
        $reject = [];
        Mail::to($email)->send(new RejectAccount($reject));
        $student->delete();
        return redirect()->back()->with('request_removed', 'Request Has Been Removed');
    }
    public function pendingaccounts()
    {
        $users = User::where('account_status', 0)->latest()->get();
        $count_users = User::where('account_status', 0)->count();
        // dd($count_users);
        return view('users.admin.pending_accounts', compact(['users', 'count_users']));
    }


    public function student_details($id)
    {
        $student_details = Student::where('id', $id)->with('user')->first();
        return view('users.admin.pending_user.student_profile', compact('student_details'));
    }
    public function teacher_details($id)
    {
        $teacher_details = Teacher::where('id', $id)->with('user')->first();
        return view('users.admin.pending_user.teacher_profile', compact('teacher_details'));
    }

    public function teachers()
    {
        $teachers = Teacher::latest()->with('user')->get();
        return view('users.admin.teachers', compact('teachers'));
    }
    public function students()
    {
        $students = Student::latest()->with('user')->get();
        return view('users.admin.students', compact('students'));
    }
    public function events()
    {
        return view('users.admin.events.show_events');
    }

    public function password()
    {
        return view('users.admin.settings.password');
    }

    public function terms()
    {
        return view('users.admin.settings.terms');
    }

    public function privacy()
    {
        return view('users.admin.settings.privacy');
    }
}
