<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignCourses;
use App\Models\Teacher;
use App\Models\Course;

class AssignCoursesController extends Controller
{
    public function assign_courses()
    {
        $assign_courses = AssignCourses::with(['department', 'semester', 'course'])->get();
        // dd($assign_courses[0]->semester);
        foreach ($assign_courses as $assign_course) {
            $teacher_internal = Teacher::where('id', $assign_course->teacher_internal_id)->first()->teachers_short_name;
            $teacher_external = Teacher::where('id', $assign_course->teacher_external_id)->first()->teachers_short_name;
            $assign_course->teacher_internal = $teacher_internal;
            $assign_course->teacher_external = $teacher_external;
        }
        //  dd($assign_courses[0]->semester);
        return view('users.admin.assign_courses', compact('assign_courses'));
    }


    public function update_assign_courses($id)
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        $assign_courses = AssignCourses::where('id', $id)->with(['department', 'semester', 'course'])->first();
        //dd($assign_courses);
        $teacher_internal = Teacher::where('id', $assign_courses->teacher_internal_id)->first();
        // dd($teacher_internal);
        $teacher_external = Teacher::where('id', $assign_courses->teacher_external_id)->first();


        return view('users.admin.update_assign_courses', compact(['courses', 'assign_courses', 'teachers', 'teacher_internal', 'teacher_external']));
    }



    public function update_assign_courses_submit(Request $request, $id)
    {
        $assign_courses = AssignCourses::find($id);

        $assign_courses->course_id = $request->course_id;
        $assign_courses->teacher_internal_id = $request->internal;
        $assign_courses->teacher_external_id = $request->external;
        $assign_courses->save();
        return redirect()->route('admin.assign_courses')->with('updated', 'Updated Successfully');
    }
}
