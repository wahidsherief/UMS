<?php

namespace App\Http\Controllers;

use App\Models\Coursetype;
use Illuminate\Http\Request;

class CoursetypeController extends Controller
{
    public function add_coursetype()
    {
        return view('users.admin.add_coursetype');
    }

    public function add_coursetype_submit(Request $request)
    {


        $request->validate(
            [
                'course_type' => 'required|'
            ]
        );
        $Coursetypes = new Coursetype();
        $Coursetypes->course_type = $request->course_type;
        $Coursetypes->save();
        return redirect()->back()->with('coursetype_created', 'Course Type Has Been Created Successfully');
    }

    public function coursetype_data()
    {
        $coursetypes = Coursetype::latest()->get();
        return view('users.admin.coursetype_data', compact('coursetypes'));
    }
    public function delete($id)
    {
        Coursetype::find($id)->delete();
        return redirect()->back()->with('deleted', 'deleted');
    }
}
