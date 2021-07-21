<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\question;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\AssignCourses;


class TeacherQuestionController extends Controller
{
    public function add_course_question()
    {
        $auth_id = Auth::user()->id;
        // dd($teacher_id);
        $teacher = Teacher::find($auth_id);
        // dd($teacher);
        $internal_courses = AssignCourses::where('teacher_internal_id', $teacher->id)->with(['semester'])->get();
        $session_id = ($internal_courses[0]->session_id);
        $external_courses = AssignCourses::where('teacher_external_id', $teacher->id)->with(['semester'])->get();
        // dd($AssignCoursess);
        return view('users.teacher.question.courses', compact(['internal_courses', 'external_courses', 'session_id']));
    }
    public function my_question($id)
    {

        $questions = Question::where('user_id', $id)->with(['session', 'user', 'teacher', 'course'])->orderBy('id', 'DESC')->get();
        $courses = Course::get();
        $count = Question::all()->count();
        return view('users.teacher.question.my_question', compact(['questions', 'courses', 'count']));
    }
}
