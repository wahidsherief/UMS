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
        $batch = Batch::where('teacher_id', $teacher_id)->first();

        $courses = AssignCourses::where('semester_id', $batch->semester_id)->with('course')->get();
        $course_count = $courses->count();

        $current_semester_results = Result::where('semester_id', $batch->semester_id)->with(['student', 'course'])->get()->groupBy('student.id');
        // dd($current_semester_results);
        // $batch_students = Student::where('semester_id', $batch->semester_id)->with('result')->get();

        $batch_students = Student::with('result')
            ->where('semester_id', $batch->semester_id)
            ->get();


        $batch_totoal_student = $batch_students->count();
        // dd($batch_totoal_student);
        // $count = $batch_students[1]->result->count();
        // dd($count);
        // dd($batch_students);
        $batch_students_grouped = $batch_students->groupBy('result.student_id');
        // dd($batch_students_grouped);
        // dd($batch_students_grouped->all());

        return view('users.teacher.my_batch.notification', compact(['batch_students', 'courses', 'batch_students', 'course_count']));





        // dd($current_semester_results);
        // $i = 0;
        // foreach ($current_semester_results as $current_semester_result) {
        //     echo $current_semester_result[$i]->student->roll_number . '/n';
        //     $i++;
        // }
        // dd();
        // dd($current_semester_results);


        // foreach ($batch_students as $batch_student) {
        //     $student_id = ($batch_student->);
        //     $available_courses = Result::where('student_id', $student_id)->with('course')->first();
        // }
        //dd($available_courses);


    }
}
