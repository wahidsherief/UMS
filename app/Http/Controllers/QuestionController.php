<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Question;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Response;

class QuestionController extends Controller
{
    public function upload_question($session_id, $course_id)
    {
        //  dd($teacher);
        $session_id=$session_id;
        //dd($session_id);
        $course_id=$course_id;
        //dd($course_id);
        return view('users.teacher.add_question', compact(['session_id','course_id']));
    }
    public function upload_question_submit(Request $request, $session_id, $course_id)
    {
        $auth_id = Auth::user()->id;
        // dd($teacher_id);
        $teacher = Teacher::find($auth_id);

        $question = new Question();

        $question->session_id = $session_id;
        $question->user_id = $auth_id;
        $question->teacher_id =$teacher->id;
        $question->course_id =$course_id;
        $question->question_type =$request->question_type;
        $question->question_category =$request->question_category;



        $image = $request->file('question_file');

        if ($image) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('users/questions'), $imageName);
            $question->question_file = $imageName;
        }
        $question->save();
        return redirect()->back()->with('success', "Question uploaded successfully");
    }

    public function show_question()
    {
        $questions = Question::with(['session','user','teacher','course'])->orderBy('id', 'DESC')->get();
        //   dd($questions);
        $courses=Course::get();
        return view('users.teacher.show_question', compact(['questions','courses']));
    }
    
    public function download($id)
    {
        $data=Question::where('id', $id)->with(['user','teacher','course','session'])->first();

        //  dd($data);
        return view('users.teacher.show_single_question', compact('data'));
    }
    public function search()
    {
        $search_text = $_GET['query'];
        $courses=Course::get();
        // dd($search_text);
        $questions = Question::where('course_id', 'LIKE', '%'.$search_text.'%')->with(['session','user','teacher','course'])->get();

        return view('users.teacher.search_data', compact(['questions','courses']));
    }
}
