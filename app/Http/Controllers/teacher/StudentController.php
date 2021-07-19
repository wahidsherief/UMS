<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function all_students($id)
    {
        $students = Student::where('semester_id', $id)->with('user')->orderBy('roll_number', 'ASC')->get();
        // dd($students);
        return view('users.teacher.courses.all_students', compact(['students']));
    }
    public function my_batch_student_profile($id)
    {
        $student_details = Student::where('id', $id)->with('user')->first();
        // dd($student_details);
        return view('users.teacher.courses.student_full_profile', compact('student_details'));
    }
}
