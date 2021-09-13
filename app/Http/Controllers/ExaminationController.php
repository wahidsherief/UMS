<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examination;
use App\Models\Session;
use App\Models\Teacher;
use App\Models\AssignCourses;
use Illuminate\Support\Facades\Auth;

class ExaminationController extends Controller
{
    public function create()
    {
        $examinations = Examination::orderBy('id', 'DESC')->with('session')->get();
        $count = Examination::orderBy('id', 'ASC')->count();
        return view('users.admin.examination', compact(['examinations', 'count']));
    }
    public function submit(Request $request)
    {
        $session_id = Session::orderBy('id', 'DESC')->first()->id;
        $examination = new Examination();
        $request->validate(['name' => 'required']);
        $examination->session_id = $session_id;
        $examination->name = $request->name;
        $examination->status = 0;
        $examination->save();
        if ($examination) {
            return redirect()->back()->with('created', 'created');
        }
    }
    public function start(Request $request, $id)
    {
        $examination = Examination::find($id);
        $examination->status = 1;
        $examination->save();
        if ($examination) {
            return redirect()->back()->with('started', 'started');
        }
    }
    public function end(Request $request, $id)
    {
        $examination = Examination::find($id);
        $examination->status = 2;
        $examination->save();
        if ($examination) {
            return redirect()->back()->with('stopped', 'stopped');
        }
    }
    public function current_exam()
    {
        $current_examination_count = Examination::where('status', 1)->count();

        $current_examination = Examination::where('status', 1)->first();
        // dd($current_examination);
        $auth_id = Auth::user()->id;
        // dd($teacher_id);
        $teacher = Teacher::find($auth_id);
        // dd($teacher);
        $internal_courses = AssignCourses::where('teacher_internal_id', $teacher->id)->with(['semester'])->get();
        $session_id = ($internal_courses[0]->session_id);
        $external_courses = AssignCourses::where('teacher_external_id', $teacher->id)->with(['semester'])->get();
        // dd($AssignCoursess);
        return view('users.teacher.examination.current_exam', compact(['internal_courses', 'current_examination', 'current_examination_count', 'external_courses', 'session_id']));
    }
    public function previous_exam()
    {
        $previous_examination = Examination::where('status', 2)->with('session')->get();
        $previous_examination_count = $previous_examination->count();

        return view('users.teacher.examination.previous_examination', compact(['previous_examination', 'previous_examination_count']));
    }
}
