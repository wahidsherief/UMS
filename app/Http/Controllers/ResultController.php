<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;
class ResultController extends Controller
{
    public function add_result(){
$student=Student::first();
return view('users.teacher.add_result');

    }

    public function add_result_submit(Request $request){

     $results=new Result();


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
    $results=Result::latest()->get();

return view('users.teacher.show_result',compact('results'));
}
}
