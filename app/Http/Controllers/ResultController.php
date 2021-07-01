<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;
use App\Models\Session;
use App\Models\Semester;
use App\Models\Course;

class ResultController extends Controller
{
    public function add_result($session_id, $student_id, $semester_id, $course_id)
    {
        $student = Student::where('id', $student_id)->first();
        $semester = Semester::where('id', $semester_id)->first();
        $course = Course::where('id', $course_id)->first();
        return view('users.teacher.add_result', compact(['student', 'semester', 'course', 'session_id']));
    }
    public function add_result_submit(Request $request, $session_id, $student_id, $semester_id, $course_id, $course_credit)
    {

        $courses_data =  Course::where('id', $course_id)->first();
        //dd($courses_data);
        $course_credit = $courses_data->course_credit;
        //dd($course_credit);


        $results = new Result();
        $results->session_id = $session_id;
        $results->student_id = $student_id;
        $results->semester_id = $semester_id;
        $results->course_id = $course_id;
        // dd($details);

        //dd($marks);
        //dd($results);
        $ct1 = $results->classtest_1 = $request->classtest_1;
        $ct2 =  $results->classtest_2 = $request->classtest_2;
        $ct3 =  $results->classtest_3 = $request->classtest_3;
        $ct4 =  $results->classtest_4 = $request->classtest_4;
        $attendance = $results->attendance = $request->attendance;
        $parta = $results->part_a = $request->part_a;
        $partb =  $results->part_b = $request->part_b;

        $percentage = (($ct1 + $ct2 + $ct3 + $ct4 + $attendance + $parta + $partb) / $course_credit);

        if ($percentage < 40) {
            $n_grade = 0.0;
            $l_grade = 'F';
        } else if ($percentage >= 40 && $percentage < 45) {
            $n_grade = 2.00;
            $l_grade = 'D';
        } else if ($percentage >= 45 && $percentage < 50) {
            $n_grade = 2.25;
            $l_grade = 'C';
        } else if ($percentage >= 50 && $percentage < 55) {
            $n_grade = 2.50;
            $l_grade = 'C+';
        } else if ($percentage >= 55 && $percentage < 60) {
            $n_grade = 2.75;
            $l_grade = 'B-';
        } else if ($percentage >= 60 && $percentage < 65) {
            $n_grade = 3.00;
            $l_grade = 'B';
        } else if ($percentage >= 65 && $percentage < 70) {
            $n_grade = 3.25;
            $l_grade = 'B+';
        } else if ($percentage >= 70 && $percentage < 75) {
            $n_grade = 3.50;
            $l_grade = 'A-';
        } else if ($percentage >= 75 && $percentage < 80) {
            $n_grade = 3.75;
            $l_grade = 'A';
        } else if ($percentage >= 80) {
            $n_grade = 4.0;
            $l_grade = 'A+';
        } else {
            $n_grade = "enter Corrent Marks";
            $l_grade = "enter Corrent Marks";
        }
        //dd($percentage);
        //dd($n_grade);
        //dd($l_grade);


        $results->percentage = $percentage;
        $results->n_grade = $n_grade;
        $results->l_grade = $l_grade;

        $results->save();

        //dd($course_code);





        // dd($result_calculation);
        return redirect()->route('show.result')->with('result_created', 'Result Has Been Created Successfully', compact('results'));
    }


// needs whre clause
    public function show_result_session()
    {

    $sessions = Session::latest()->get();
        return view('users.teacher.session_results', compact('sessions'));
    }


    public function semester_result(Request $request, $session_id)
    {
        $semesters = Semester::latest()->get();

        //dd($results);
        return view('users.teacher.available_session_result', compact('semesters'));
    }

    public function show_result($semester_id)
    {
        $results = Result::where('semester_id',$semester_id)->with(['session', 'student', 'semester', 'course'])->latest()->get();
$semester=Semester::where('id',$semester_id)->first();
        //dd($results);
        return view('users.teacher.show_result', compact('results','semester'));
    }

}
