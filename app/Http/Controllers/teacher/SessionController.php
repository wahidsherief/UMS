<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Result;
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

    public function student_details($session_id, $semester_id, $course_id)
    {
        $course=Course::where('id', $course_id)->first();
        $semester=Semester::where('id', $semester_id)->first();
        // dd($course);
        $semester_students = Student::where('semester_id', $semester_id)->orderBy('id', 'ASC')->get();
        // dd($semester_students);
        foreach ($semester_students as $semester_student) {
            {
                $student_id=$semester_student->id;
               // dd($student_id);
            $existing_result=Result::where([ ['student_id', $student_id],['course_id', $course_id], ])->first();
           // dd($existing_result);
        }
            return view('users.teacher.semester_students_details', compact(['semester_students','course','semester','session_id']));
        }
    }

    public function my_courses()
    {
        $auth_id = Auth::user()->id;
        // dd($teacher_id);
        $teacher = Teacher::find($auth_id);
        // dd($teacher);
        $internal_courses = AssignCourses::where('teacher_internal_id', $teacher->id)->with(['semester'])->get();
        $session_id=($internal_courses[0]->session_id);

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

    public function my_batch()
    {
        $auth_id = Auth::user()->id;
        // dd($teacher_id);
        $teacher = Teacher::find($auth_id);
        //  dd($teacher->teachers_short_name);
        $my_batch=Batch::where('teacher_id', $teacher->id)->first();
        //dd($my_batch->id);
        $my_batch_students=Student::where('batch_id', $my_batch->id)->get();
        return view('users.teacher.my_batch', compact(['my_batch_students','my_batch']));
    }
}
