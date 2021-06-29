<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Course;
class ResultController extends Controller
{
    public function add_result($session_id,$student_id,$semester_id,$course_id){
$student=Student::where('id',$student_id)->first();
$semester=Semester::where('id',$semester_id)->first();
$course=Course::where('id',$course_id)->first();
return view('users.teacher.add_result',compact(['student','semester','course','session_id']));

    }

    public function add_result_submit(Request $request,$session_id,$student_id,$semester_id,$course_id){

     $results=new Result();
$results->session_id=$session_id;
$results->student_id=$student_id;
$results->semester_id=$semester_id;
$results->course_id=$course_id;
$results->classtest_1=$request->classtest_1;
$results->classtest_2=$request->classtest_2;
$results->classtest_3=$request->classtest_3;
$results->classtest_4=$request->classtest_4;
$results->attandance=$request->attandance;
$results->part_a=$request->part_a;
$results->part_b=$request->part_b;
$results->save();
return redirect()->back()->with('result_created','Result Has Been Created Successfully');
    }


public function show_result(Request $request){
    $results=Result::with(['session','student','semester','course'])->latest()->get();
//dd($results);
return view('users.teacher.show_result',compact('results'));
}
}
