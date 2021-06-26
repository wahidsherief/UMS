<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batchdesign;
use App\Models\Teacher;
use App\Models\Course;

class BatchdesignController extends Controller
{
    public function show_batch_design()
    {
        $assign_courses = Batchdesign::with(['department', 'semester', 'course'])->get();
        // dd($assign_courses);
        foreach ($assign_courses as $assign_course){
            $teacher_internal = Teacher::where('id', $assign_course->teacher_internal_id)->first()->teachers_short_name;

            $teacher_external = Teacher::where('id', $assign_course->teacher_external_id)->first()->teachers_short_name;
            $assign_course->teacher_internal = $teacher_internal;
            $assign_course->teacher_external = $teacher_external;
        }
        // dd($assign_courses);


        return view('users.admin.show_batchdesign', compact('assign_courses'));
    }


    public function update_batch_design($id)
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        $assign_courses = Batchdesign::where('id', $id)->with(['department', 'semester', 'course'])->first();
//dd($assign_courses);
            $teacher_internal = Teacher::where('id', $assign_courses->teacher_internal_id)->first();
           // dd($teacher_internal);
            $teacher_external = Teacher::where('id', $assign_courses->teacher_external_id)->first();


        return view('users.admin.update_batchdesign', compact(['courses','assign_courses','teachers','teacher_internal','teacher_external']));
    }



    public function update_batch_design_submit(Request $request, $id)
    {
        $batchdesign = Batchdesign::find($id);

        $batchdesign->course_id = $request->course_id;
        $batchdesign->teacher_internal_id = $request->internal;
        $batchdesign->teacher_external_id = $request->external;
        $batchdesign->save();
        return redirect()->route('admin.show.batch.design')->with('updated', 'Updated Successfully');
    }
}
