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
        $batch_advisor = Batch::where('teacher_id', $teacher_id)->first();
        $batch_id = $batch_advisor->id;
        $my_batch_students = Student::where('batch_id', $batch_id)->with('user')->get();
        return view('users.teacher.batch.students', compact('my_batch_students'));
    }
    public function notification()
    {
        $auth_id = Auth::user()->id;
        $teacher = Teacher::where('user_id', $auth_id)->first();
        $teacher_id = ($teacher->id);
        $batch = Batch::where('teacher_id', $teacher_id)->first();
        $courses = AssignCourses::where('semester_id', $batch->semester_id)->with('course')->get();
        $course_count = $courses->count();
        $current_semester_results = Result::where('semester_id', $batch->semester_id)
            ->with(['student', 'course'])->get()->groupBy('student.id');
        $batch_students = Student::with('result')
            ->where('semester_id', $batch->semester_id)
            ->get();

        $batch_totoal_student = $batch_students->count();

        $batch_students_grouped = $batch_students->groupBy('result.student_id');

        return view('users.teacher.batch.notification', compact(['batch_students', 'courses', 'batch_students', 'course_count']));
    }
    public function export_notification()
    {
        $auth_id = Auth::user()->id;
        $teacher = Teacher::where('user_id', $auth_id)->first();
        $teacher_id = ($teacher->id);
        $batch = Batch::where('teacher_id', $teacher_id)->first();
        $courses = AssignCourses::where('semester_id', $batch->semester_id)->with('course')->get();
        $course_count = $courses->count();
        $current_semester_results = Result::where('semester_id', $batch->semester_id)
            ->with(['student', 'course'])->get()->groupBy('student.id');
        $batch_students = Student::with('result')
            ->where('semester_id', $batch->semester_id)
            ->get();

        $batch_totoal_student = $batch_students->count();

        $batch_students_grouped = $batch_students->groupBy('result.student_id');
        $pdf = PDF::loadView('users.teacher.batch.notification_export', compact(['batch_students', 'courses', 'batch_students', 'course_count']))->setPaper('a4', 'landscape');
        return $pdf->download('Course_result.pdf');
    }
}
