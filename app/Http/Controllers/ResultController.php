<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Result;
use App\Models\Student;
use App\Models\Session;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\AssignCourses;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{

    public function all_result_submit(Request $request, $session_id, $semester_id, $course_id, $course_credit)
    {
        $student_id = $request->student_id;

        $attendance = $request->attendance;

        $class_test = $request->class_test;
        $part_a = $request->part_a;
        $part_b = $request->part_b;
        for ($i = 0; $i < count($part_a); $i++) {
            $percentage = (($class_test[$i] + $attendance[$i] + $part_a[$i] + $part_b[$i]) / $course_credit);
            $number_grade = $this->get_number_grade($percentage);
            $letter_grade = $this->get_letter_grade($percentage);

            $total = ($class_test[$i] + $attendance[$i] + $part_a[$i] + $part_b[$i]);
            $result = [

                'session_id' => $session_id,
                'semester_id' => $semester_id,
                'course_id' => $course_id,
                'attendance' => $attendance[$i],
                'class_test' => $class_test[$i],
                'part_a' => $part_a[$i],
                'student_id' => $student_id[$i],
                'part_b' => $part_b[$i],
                'percentage' => $percentage,
                'total' => $total,
                'n_grade' => $number_grade,
                'l_grade' => $letter_grade,
            ];
            DB::table('results')->insert($result);
        }
        return redirect()->route('teacher.my_courses_result', [$session_id, $semester_id, $course_id])->with('result_added', "Result has been added");
    }


    public function update_result($session_id, $semester_id, $course_id)
    {
        $semester_students = Student::where('semester_id', $semester_id)->with('user')->orderBy('roll_number', 'ASC')->get();
        //dd($semester_students);
        $course_credit = Course::where('id', $course_id)->first()->course_credit;
        // dd($course_credit);
        $results = Result::where([['session_id', $session_id], ['semester_id', $semester_id], ['course_id', $course_id]])->with('student')->get();
        // dd($result[1]);

        $total_students =  $semester_students->count();
        return view('users.teacher.examination.update_result', compact(['results', 'course_id', 'course_credit', 'semester_id', 'session_id', 'semester_students']));
    }

    public function update_result_submit(Request $request, $session_id, $semester_id, $course_id, $course_credit)
    {
        $student_id = $request->student_id;

        $attendance = $request->attendance;
        $id = $request->id;
        // dd($id);
        $class_test = $request->class_test;
        $part_a = $request->part_a;
        $part_b = $request->part_b;

        for ($i = 0; $i < count($part_a); $i++) {

            $percentage = (($class_test[$i] + $attendance[$i] + $part_a[$i] + $part_b[$i]) / $course_credit);
            $number_grade = $this->get_number_grade($percentage);
            $letter_grade = $this->get_letter_grade($percentage);

            $total = ($class_test[$i] + $attendance[$i] + $part_a[$i] + $part_b[$i]);

            $result = Result::find($id[$i]);

            $result->attendance = $attendance[$i];
            $result->class_test = $class_test[$i];
            $result->part_a = $part_a[$i];
            $result->part_b = $part_b[$i];
            $result->percentage = $percentage;
            $result->total = $total;
            $result->n_grade = $number_grade;
            $result->l_grade = $letter_grade;
            $result->save();
        }
        return redirect()->route('teacher.my_courses_result', [$session_id, $semester_id, $course_id])->with('result_updated', "Result has been Updated");
    }



    public function semester_students($session_id, $semester_id, $course_id)
    {
        $semester_students = Student::where('semester_id', $semester_id)->with('user')->orderBy('roll_number', 'ASC')->get();
        //dd($semester_students);
        $course_credit = Course::where('id', $course_id)->first()->course_credit;
        // dd($course_credit);
        $total_students =  $semester_students->count();
        return view('users.teacher.courses.student_result', compact(['course_id', 'course_credit', 'semester_id', 'session_id', 'semester_students']));
    }


    public function student_profile_details($session_id, $student_id, $course_id)
    {
        $student_details = Student::where('id', $student_id)->with(['user', 'result'])->first();

        $result = Result::where([['student_id', $student_details->id], ['course_id', $course_id]])->first();

        $add_result = 0;
        if ($result === null) {
            $add_result = 1;
        }

        return view('users.teacher.courses.student_profile', compact(['session_id', 'student_id', 'course_id', 'student_details', 'add_result']));
    }

    public function add_result($session_id, $student_id, $semester_id, $course_id)
    {
        $student = Student::where('id', $student_id)->first();
        $semester = Semester::where('id', $semester_id)->first();
        $course = Course::where('id', $course_id)->first();
        return view('users.teacher.add_result', compact(['student', 'semester', 'course', 'session_id']));
    }
    public function add_result_submit(Request $request, $session_id, $student_id, $semester_id, $course_id, $course_credit)
    {

        $request->validate(
            [

                'class_test' => 'required|numeric|min:1|max:60',
                'attendance' => 'required|numeric|min:1|max:30',
                'part_a' => 'required|numeric|min:1|max:105',
                'part_b' => 'required|numeric|min:1|max:105',

            ]
        );



        $courses_data =  Course::where('id', $course_id)->first();
        $course_credit = $courses_data->course_credit;
        $results = new Result();
        $results->session_id = $session_id;
        $results->student_id = $student_id;
        $results->semester_id = $semester_id;
        $results->course_id = $course_id;

        $class_test = $results->class_test = $request->class_test;

        $attendance = $results->attendance = $request->attendance;
        $parta = $results->part_a = $request->part_a;
        $partb =  $results->part_b = $request->part_b;

        $percentage = (($class_test + $attendance + $parta + $partb) / $course_credit);
        $total = ($class_test + $attendance + $parta + $partb);
        $number_grade = $this->get_number_grade($percentage);
        $letter_grade = $this->get_letter_grade($percentage);

        $results->percentage = $percentage;
        $results->total = $total;
        $results->n_grade = $number_grade;
        $results->l_grade = $letter_grade;

        $results->save();
        return redirect()->back()->with('result_created', 'Result Has Been Created Successfully', compact('results'));
    }


    // needs whre clause
    public function show_result_session()
    {
        $sessions = Session::latest()->get();
        return view('users.teacher.session_results', compact('sessions'));
    }


    public function semester_result(Request $request)
    {
        $auth_id = Auth::user()->id;

        $teacher = Teacher::find($auth_id);

        $internal_courses = AssignCourses::where('teacher_internal_id', $teacher->id)->with(['semester'])->get();

        return view('users.teacher.available_session_result', compact(['internal_courses']));
    }

    public function show_result($semester_id)
    {
        $results = Result::where('semester_id', $semester_id)->with(['session', 'student', 'semester', 'course'])->latest()->get();
        $semester = Semester::where('id', $semester_id)->first();

        return view('users.teacher.show_result', compact('results', 'semester'));
    }

    public function student_full_result($id)
    {
        $student_id = $id;

        $student_info = Student::where('id', $student_id)->first();
        $student_results = Result::where('student_id', $student_id)->with(['course', 'semester', 'student'])->latest()->get();

        return view('users.teacher.student_full_result', compact(['student_results', 'student_info']));
    }


    public function accept_my_batch_result(Request $request, $student_id, $course_id)
    {
        $result = Result::where([['student_id', $student_id], ['course_id', $course_id],])->first();

        $result->status = 1;
        $result->save();
        return redirect()->back()->with('accepted', 'result has been accepted');
    }
    public function delete_result($student_id, $course_id)
    {
        Result::where([['student_id', $student_id], ['course_id', $course_id],])->delete();
        return redirect()->back()->with('removed', 'Result Has Been Removed');
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
