<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;
class SemesterController extends Controller
{
    public function add_semester(){

        return view('users.admin.add_semester');
    }

    public function add_semester_submit(Request $request){
$semesters=new Semester();
$semesters->semester_name=$request->semester_name;
$semesters->advisor_name=$request->advisor_name;
$semesters->save();
return redirect()->back()->with('semester_created','semester Has Been Created Successfully');
    }

    public function semester_data(){
$semesters= semester::latest()->get();
        return view('users.admin.semester_data',compact('semesters'));
    }
}
