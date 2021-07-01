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

        $ct1 = $results->classtest_1 = $request->classtest_1;
        $ct2 =  $results->classtest_2 = $request->classtest_2;
        $ct3 =  $results->classtest_3 = $request->classtest_3;
        $ct4 =  $results->classtest_4 = $request->classtest_4;
        
        $attendance = $results->attendance = $request->attendance;
        $parta = $results->part_a = $request->part_a;
        $partb =  $results->part_b = $request->part_b;

        $percentage = (($ct1 + $ct2 + $ct3 + $ct4 + $attendance + $parta + $partb) / $course_credit);

        $number_grade = $this->get_number_grade($percentage);
        $letter_grade = $this->get_letter_grade($percentage);

        $results->percentage = $percentage;
        $results->n_grade = $number_grade;
        $results->l_grade = $letter_grade;

        $results->save();
        return redirect()->route('show_result')->with('result_created', 'Result Has Been Created Successfully', compact('results'));
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
        $results = Result::where('semester_id', $semester_id)->with(['session', 'student', 'semester', 'course'])->latest()->get();
        $semester=Semester::where('id', $semester_id)->first();
        //dd($results);
        return view('users.teacher.show_result', compact('results', 'semester'));
    }

    private function get_number_grade($percentage)
    {
        if ($percentage < 40) {
            return $n_grade = 0.0;
        } elseif ($percentage >= 40 && $percentage < 45) {
            return $n_grade = 2.00;
        } elseif ($percentage >= 45 && $percentage < 50) {
            return $n_grade = 2.25;
        } elseif ($percentage >= 50 && $percentage < 55) {
            return $n_grade = 2.50;
        } elseif ($percentage >= 55 && $percentage < 60) {
            return $n_grade = 2.75;
        } elseif ($percentage >= 60 && $percentage < 65) {
            return $n_grade = 3.00;
        } elseif ($percentage >= 65 && $percentage < 70) {
            return $n_grade = 3.25;
        } elseif ($percentage >= 70 && $percentage < 75) {
            return $n_grade = 3.50;
        } elseif ($percentage >= 75 && $percentage < 80) {
            return $n_grade = 3.75;
        } elseif ($percentage >= 80) {
            return $n_grade = 4.0;
        } else {
            return null;
        }
    }

    private function get_letter_grade($percentage)
    {
        if ($percentage < 40) {
            return $l_grade = 'F';
        } elseif ($percentage >= 40 && $percentage < 45) {
            return $l_grade = 'D';
        } elseif ($percentage >= 45 && $percentage < 50) {
            return $l_grade = 'C';
        } elseif ($percentage >= 50 && $percentage < 55) {
            return $l_grade = 'C+';
        } elseif ($percentage >= 55 && $percentage < 60) {
            return $l_grade = 'B-';
        } elseif ($percentage >= 60 && $percentage < 65) {
            return $l_grade = 'B';
        } elseif ($percentage >= 65 && $percentage < 70) {
            return $l_grade = 'B+';
        } elseif ($percentage >= 70 && $percentage < 75) {
            return $l_grade = 'A-';
        } elseif ($percentage >= 75 && $percentage < 80) {
            return $l_grade = 'A';
        } elseif ($percentage >= 80) {
            return $l_grade = 'A+';
        } else {
            return null;
        }
    }
}
