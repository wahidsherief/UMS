<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Department;
use App\Models\Batch;
use Illuminate\Auth\Events\Validated;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Filesystem\Filesystem\File;
class StudentController extends Controller
{



    public function profile(){
        return view('users.student.profile');
    }
    public function setting(){
        return view('users.student.setting');
    }


    public function notice(){
        $notice= Notice::with('user')->orderBy('id','DESC')->paginate(10);
        return view('users.student.notice',compact('notice'));
    }

    public function single_notice($id){
        $notice= Notice::with('user')->where('id',$id)->get();
        return view('users.student.single_notice',compact('notice'));
    }



//Student Full Profile
public function full_profile(Request $request, $id){
    $user=User::find(Auth::user()->id);

$students= new Student;

$students->department_id=$request->department_id;
$students->batch_id=$request->batch_id;

$students->firstname=$request->firstname;
$students->lastname=$request->lastname;


$students->roll_number=$request->roll_number;
$students->registration_number=$request->registration_number;
$students->phone=$request->phone;
$students->address=$request->address;
$students->blood_group=$request->blood_group;
$students->hsc_gpa=$request->hsc_gpa;
$students->ssc_gpa=$request->ssc_gpa;
$students->jsc_gpa=$request->jsc_gpa;
$students->psc_gpa=$request->ssc_gpa;
$user->student()->save($students);
return redirect()->back()->with('pending','Your Profile is pending');

}

public function show_student_data(){
$id=Auth::user()->id;
    $students= Student::where('user_id',$id)->with(['user','department','batch'])->get();
    return view('users.student.student_data',compact('students'));
}


public function index(){
    $departments = Department::all();
    $batches = Batch::all();
    return view('users.student.index',compact('departments','batches'));
}

}
