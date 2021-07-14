<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Session;
use App\Models\Department;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Result;
use App\Models\AssignCourses;
use \PDF;
use Illuminate\Http\Request;

class MyBatchController extends Controller
{
    public function students()
    {
        $auth_id = Auth::user()->id;
        $teacher = Teacher::where('user_id', $auth_id)->first();
        $teacher_id = ($teacher->id);
        // dd($teacher_id);
        $batch_advisor = Batch::where('teacher_id', $teacher_id)->first();
        // dd($batch_advisor);
        $batch_id = $batch_advisor->id;
        $my_batch_students = Student::where('batch_id', $batch_id)->with('user')->get();
        return view('users.teacher.my_batch.students', compact('my_batch_students'));
    }
    public function notification()
    {

        $auth_id = Auth::user()->id;
        $teacher = Teacher::where('user_id', $auth_id)->first();
        $teacher_id = ($teacher->id);
        $batch_advisor = Batch::where('teacher_id', $teacher_id)->first();
        $batch_id = $batch_advisor->id;
        $my_batch_semester_id = $batch_advisor->semester_id;
        $courses = AssignCourses::where('semester_id', $my_batch_semester_id)->with('course')->get();
        $my_batch_semester_result = Result::where('semester_id', $my_batch_semester_id)->with(['student', 'course'])->latest()->get();;

        $my_batch_students = Student::where('batch_id', $batch_id)->get();
        // dd($my_batch_students[1]->id);

        foreach ($my_batch_students as $my_batch_student) {
            $student_id = ($my_batch_student->id);
            $available_courses = Result::where('student_id', $student_id)->with('course')->get();
        }
        // dd($available_courses);
        return view('users.teacher.my_batch.notification', compact(['my_batch_semester_result', 'courses', 'my_batch_students', 'available_courses']));
    }
}
