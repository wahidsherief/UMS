<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Result;

class CoursesControlller extends Controller
{
    public function single_student_result($session_id, $student_id, $course_id)
    {
        $student_details = Student::where('id', $student_id)->with(['user', 'result'])->first();
        $result = Result::where([['session_id', $session_id], ['student_id', $student_id], ['course_id', $course_id]])->with(['course'])->first();
        // dd($result);
        return view('users.teacher.courses.single_student_result', compact(['student_details', 'result']));
    }
    public function single_student_update_result($session_id, $student_id, $course_id)
    {
        $student_details = Student::where('id', $student_id)->with(['user', 'result'])->first();
        $result = Result::where([['session_id', $session_id], ['student_id', $student_id], ['course_id', $course_id]])->with(['course'])->first();
        // dd($result);
        return view('users.teacher.courses.update_student_result', compact(['student_details', 'result', 'student_id', 'course_id', 'session_id']));
    }

    public function single_student_update_result_submit(Request $request, $session_id, $student_id, $course_id)
    {
        $request->validate(
            [

                'class_test' => 'required|numeric|min:0|max:60',
                'attendance' => 'required|numeric|min:0|max:30',
                'part_a' => 'required|numeric|min:0|max:105',
                'part_b' => 'required|numeric|min:0|max:105',

            ]
        );


        $result = Result::where([['session_id', $session_id], ['student_id', $student_id], ['course_id', $course_id]])->with(['course'])->first();
        // dd($result->id);
        $update_result = Result::find($result->id);
        // dd($update_result);
        $course_credit = $update_result->course->course_credit;

        $class_test = $request->class_test;
        $attendance = $request->attendance;
        $part_a = $request->part_a;
        $part_b = $request->part_b;
        $percentage = (($class_test + $attendance + $part_a + $part_b) / $course_credit);
        $total = ($class_test + $attendance + $part_a + $part_b);

        $number_grade = $this->get_number_grade($percentage);
        $letter_grade = $this->get_letter_grade($percentage);

        $update_result->class_test = $request->class_test;
        $update_result->attendance = $request->attendance;
        $update_result->part_a = $request->part_a;
        $update_result->part_b = $request->part_b;

        $update_result->percentage = $percentage;
        $update_result->total = $total;

        $update_result->n_grade = $number_grade;
        $update_result->l_grade = $letter_grade;
        // dd($update_result);
        $update_result->save();
        return redirect()->route('courses.show_result', [$session_id, $student_id, $course_id])->with('updated', 'success');
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
