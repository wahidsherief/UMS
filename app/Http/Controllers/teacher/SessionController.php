<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Semester;
use App\Models\Session;
use App\Models\AssignCourses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function session()
    {
        $sessions = Session::latest()->get();
        return view('users.teacher.sessions', compact('sessions'));
    }

    public function student_details($session_id,$semester_id,$course_id)
    {
$course=Course::where('id',$course_id)->first();
$semester=Semester::where('id',$semester_id)->first();
// dd($course);
        $semester_students = Student::where('semester_id', $semester_id)->orderBy('id', 'ASC')->get();
        return view('users.teacher.semester_students_details', compact(['semester_students','course','semester','session_id']));
    }

    public function internal_activities($session_id)
    {

        $auth_id = Auth::user()->id;
        // dd($teacher_id);
        $teacher = Teacher::find($auth_id);
        //dd($teacher);
        $internal_courses = AssignCourses::where('teacher_internal_id', $teacher->id)->with(['semester'])->get();
        // dd($internal_courses);
        $external_courses = AssignCourses::where('teacher_external_id', $teacher->id)->with(['semester'])->get();

        // dd($AssignCoursess);
        return view('users.teacher.teacher_internal', compact(['internal_courses', 'external_courses','session_id']));
    }
    public function external_activities()
    {

        $id = Auth::user()->id;
        $assign_courses = AssignCourses::where('teacher_external_id', $id)->with(['user', 'department', 'semester'])->get();

        $AssignCoursess = AssignCourses::with(['department', 'semester', 'course'])->get();
        // dd($AssignCoursess);
        return view('users.teacher.teacher_external', compact('assign_courses'));
    }
}
