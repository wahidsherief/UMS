<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\Notice;

use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{

    public function profile()
    {
        return view('users.teacher.profile');
    }

    public function setting()
    {
        return view('users.teacher.setting');
    }

    public function addnotice()
    {
        return view('users.teacher.addnotice');
    }

    public function notice()
    {
        $notice = Notice::with('user')->orderBy('id', 'DESC')->paginate(10);
        return view('users.teacher.notice', compact('notice'));
    }

    public function single_notice($id)
    {
        $notice = Notice::with('user')->where('id', $id)->get();
        return view('users.teacher.single_notice', compact('notice'));
    }

    public function students(){
        $role=Auth::user()->role;
        $users = User::orderBy('id', 'DESC')->get();
        return view('users.teacher.students',compact('users'));
    }

//teacher Full Profile
public function full_profile(Request $request, $id){
    $user=User::find(Auth::user()->id);

$teachers= new Teacher;

$teachers->department_id=$request->department_id;

$teachers->firstname=$request->firstname;
$teachers->lastname=$request->lastname;

$teachers->status=$request->status;
$teachers->phone=$request->phone;
$teachers->address=$request->address;
$teachers->blood_group=$request->blood_group;
$user->teacher()->save($teachers);
return redirect()->route('teacher.data')->with('pending','Your Profile is pending');

}

public function index(){
    $departments = Department::all();
    $id=Auth::user()->id;
    $teachers=Teacher::where('user_id',$id)->with(['user','department'])->get();
    return view('users.teacher.index',compact(['departments','teachers']));
}

 public function show_teacher_data(){
    $departments = Department::all();
 $id=Auth::user()->id;
    $teachers= teacher::where('user_id',$id)->with(['user','department'])->get();
    // dd($teachers);
    return redirect()->back()->with('pending','Pending',compact(['teachers','departments']));
}


}
