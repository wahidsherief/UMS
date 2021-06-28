<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Batch;
use App\Models\AssignCourses;
use Illuminate\Support\Facades\Auth;
class activities extends Controller
{
    public function activities(){

        $id=Auth::user()->id;
       // dd($teacher_id);
        $internal_courses= AssignCourses::where('teacher_internal_id',$id)->with(['user','department','semester'])->get();
        $external_courses= AssignCourses::where('teacher_external_id',$id)->with(['user','department','semester'])->get();

        // dd($AssignCoursess);
        return view('users.teacher.teacher_internal',compact(['internal_courses','external_courses']));

    }
    public function external_activities(){

        $id=Auth::user()->id;
        $assign_courses= AssignCourses::where('teacher_external_id',$id)->with(['user','department','semester'])->get();

        $AssignCoursess= AssignCourses::with(['department','semester','course'])->get();
        // dd($AssignCoursess);
        return view('users.teacher.teacher_external',compact('assign_courses'));

    }

    public function student_details($id){
        $batch=Batch::first();

$semester_students=Student::where('semester_id',$id)->orderBy('id','ASC')->get();
return view('users.teacher.semester_students_details',compact(['semester_students','batch']));

    }


}
