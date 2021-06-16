<?php

namespace App\Http\Controllers;
use App\Models\Coursetype;
use Illuminate\Http\Request;

class CoursetypeController extends Controller
{
    public function add_coursetype(){
        return view('users.admin.add_coursetype');
    }

    public function add_coursetype_submit(Request $request){
        $Coursetypes=new Coursetype();
        $Coursetypes->course_type=$request->course_type;
        $Coursetypes->save();
        return redirect()->back()->with('coursetype_created','Department Has Been Created Successfully');
            }

    public function coursetype_data(){
                $coursetypes= Coursetype::latest()->get();
                        return view('users.admin.coursetype_data',compact('coursetypes'));
                    }

}
