<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notice;
use App\Models\Session;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Department;
use App\Models\Result;
use App\Models\Batch;
use App\Models\question;
use App\Models\Course;
use Illuminate\Auth\Events\Validated;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Filesystem\Filesystem\File;

class StudentController extends Controller
{
    public function profile()
    {
        $user_id = Auth::user()->id;
        $student = Student::where('user_id', $user_id)->with('user')->first();
        return view('users.student.profile', compact(['student']));
    }
    public function setting()
    {
        return view('users.student.setting');
    }


    public function notice()
    {
        $notice = Notice::with('user')->orderBy('id', 'DESC')->paginate(5);
        // dd($notice);
        return view('users.student.notice', compact('notice'));
    }

    public function single_notice($id)
    {
        $notice = Notice::with('user')->where('id', $id)->first();
        // dd($notice);
        return view('users.student.single_notice', compact('notice'));
    }



    //Student Full Profile
    public function student_full_information(Request $request)
    {

        $request->validate([
            'batch_id' => 'required',
            'firstname' => 'required | min:2|max:30',
            'lastname' => 'required| min:2|max:30',
            'roll_number' => 'required|numeric',
            'registration_number' => 'required|numeric',
            'phone' => 'required|numeric',
            'birthday' => 'required',
            'gender' => 'required',
            'skill' => 'required',
            'address' => 'required',
            'about' => 'required|min:50|max:200',
            'blood_group' => 'required',
            'hsc_gpa' => 'required|numeric|min:1|max:5',
            'ssc_gpa' => 'required|numeric|min:1|max:5',
            'jsc_gpa' => 'required|numeric|min:1|max:5',
            'psc_gpa' => 'required|numeric|min:1|max:5',
        ]);
        $batch_id = $request->batch_id;
        $semester_id = Batch::where('id', $batch_id)->first();
        $user = Auth::user()->id;
        $students = new Student;

        $students->user_id = $user;
        $students->batch_id = $request->batch_id;
        $students->semester_id = $semester_id->id;
        $students->firstname = $request->firstname;
        $students->lastname = $request->lastname;
        $students->roll_number = $request->roll_number;
        $students->registration_number = $request->registration_number;
        $students->gender = $request->gender;
        $students->phone = $request->phone;
        $students->birthday = $request->birthday;
        $students->skill = $request->skill;
        $students->about = $request->about;
        $students->address = $request->address;
        $students->blood_group = $request->blood_group;
        $students->hsc_gpa = $request->hsc_gpa;
        $students->ssc_gpa = $request->ssc_gpa;
        $students->jsc_gpa = $request->jsc_gpa;
        $students->psc_gpa = $request->ssc_gpa;
        // dd($students);
        $students->save();
        return redirect()->back()->with('pending', 'Your Profile is pending');
    }

    public function show_student_data()
    {
        $id = Auth::user()->id;
        $students = Student::where('user_id', $id)->with(['user', 'department', 'batch'])->get();
        return view('users.student.student_data', compact('students'));
    }


    public function index()
    {
        $id = Auth::user()->id;
        $student = Student::where('user_id', $id)->first();
        $departments = Department::all();
        $batches = Batch::all();
        $sessions = Session::latest()->first();
        //dd($sessions);
        $departments = Department::all();
        $teachers = Teacher::all();
        $id = Auth::user()->id;
        $student = Student::where('user_id', $id)->with(['user'])->first();
        $no_student = 0;
        if ($student == null) {
            $no_student = 1;
        }

        $notice = Notice::with('user')->orderBy('id', 'DESC')->paginate(5);
        $count_notice = Notice::all()->count();
        $count_user = User::all()->count();
        $count_teacher = Teacher::all()->count();
        $count_student = Student::all()->count();
        $count_course = Course::all()->count();
        //dd($count);

        //dd($teachers);
        return view('users.student.index', compact(['student', 'no_student', 'batches', 'teachers', 'sessions', 'notice', 'count_notice', 'count_user', 'count_teacher', 'count_student', 'count_course',]));
    }
    //Check
    public function result()
    {
        $id = Auth::user()->id;
        $student = Student::where('user_id', $id)->first();
        $main = Student::find($student)->first();
        // dd($main);
        //dd($student);
        $results = Result::where('student_id', $main->id)->with('course')->get();
        return view('users.student.result', compact('results'));
        // dd($result);
    }
    public function show_question()
    {
        $questions = Question::with(['session', 'user', 'teacher', 'course'])->orderBy('id', 'DESC')->get();

        $courses = Course::get();
        return view('users.student.show_question', compact(['questions', 'courses']));
    }
    public function download($id)
    {
        $data = Question::where('id', $id)->with(['user', 'teacher', 'course', 'session'])->first();

        //  dd($data);
        return view('users.student.show_single_question', compact('data'));
    }
    public function search()
    {
        $search_text = $_GET['query'];
        $courses = Course::get();
        // dd($search_text);
        $questions = Question::where('course_id', 'LIKE', '%' . $search_text . '%')->with(['session', 'user', 'teacher', 'course'])->get();

        return view('users.teacher.search_data', compact(['questions', 'courses']));
    }
}
