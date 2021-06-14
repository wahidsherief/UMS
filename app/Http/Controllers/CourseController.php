<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Department;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    public function course_data (){

            $courses= Course::with(['semester','department','batch'])->orderBy('id','DESC')->get();
            // dd($students);
            return view('users.admin.course_data',compact('courses'));
        }


        public function add_course(){
        $departments = Department::all();
        $semesters = Semester::all();
        $batches = Batch::all();
        return view('users.admin.add_course',compact('departments','batches','semesters'));
    }
        public function add_course_submit(Request $request){
            $courses=new Course();
            $courses->department_id=$request->department_id;
            $courses->batch_id=$request->batch_id;
            $courses->semester_id=$request->semester_id;
            $courses->course_name=$request->course_name;
            $courses->course_credit=$request->course_credit;
            $courses->save();
            return redirect()->back()->with('course_created','course Has Been Created Successfully');
                }
}