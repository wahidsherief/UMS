<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterController extends Controller
{


    public function add_semester_submit(Request $request)
    {
        $semesters = new Semester();
        $semesters->semester_name = $request->semester_name;
        $semesters->save();
        return redirect()->back()->with('semester_created', 'semester Has Been Created Successfully');
    }

    public function add_semester()
    {
        $semesters = semester::latest()->get();
        return view('users.admin.add_semester', compact('semesters'));
    }

    public function update_semester($id)
    {
        $semesters = Semester::where('id', $id)->first();
        return view('users.admin.update_semester', compact('semesters'));
    }
    public function update_semester_submit(Request $request, $id)
    {
        $semesters = Semester::find($id);
        $semesters->semester_name = $request->semester_name;
        $semesters->save();
        return redirect()->route('add.semester')->with('semester_updated', 'Updated Succcessfully');
    }
    public function deletesemester($id)
    {
        Semester::where('id', $id)->delete();
        return redirect()->back()->with('semester_deleted', 'Notice Has Been Removed');
    }
}
