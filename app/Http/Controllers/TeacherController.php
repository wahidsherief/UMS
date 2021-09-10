<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Session;
use App\Models\Department;
use App\Models\Publication;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Result;
use App\Models\AssignCourses;
use \PDF;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function profile()
    {
        $user_id = Auth::user()->id;
        $publication = Publication::where('user_id', $user_id)->first();
        $publication_count = Publication::where('user_id', $user_id)->count();
        // dd($publication);
        $teacher = Teacher::where('user_id', $user_id)->with('user')->first();
        return view('users.teacher.profile', compact(['teacher', 'publication', 'publication_count']));
    }
    public function teacher_about(Request $request)
    {
        $teacher_id = $request->teacher_id;
        $teacher = Teacher::find($teacher_id);
        $teacher->about = $request->about;
        $teacher->save();
        return redirect()->back()->with('about_added', 'About has been added');
    }
    public function setting()
    {
        return view('users.teacher.setting');
    }

    public function addnotice()
    {
        return view('users.teacher.addnotice');
    }
    public function publication(Request $request)
    {
        $user_id = Auth::user()->id;
        $teacher_id = Teacher::where('user_id', $user_id)->with('user')->first();

        $publication = new Publication;
        $publication->user_id = $user_id;
        $publication->teacher_id = $teacher_id->id;
        // dd($publication);
        $publication->title = $request->title;
        $publication->link = $request->link;
        $image = $request->file('publication_file');
        // dd($image);
        if ($image) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('users/publication'), $imageName);
            $publication->file = $imageName;
        }

        $publication->save();

        return redirect()->back()->with('publication', 'success');
    }
    public function publication_file($id)
    {
        $data = Publication::where('id', $id)->with(['user', 'teacher'])->first();

        //  dd($data);
        return view('users.teacher.publication_file', compact('data'));
    }


    public function notice()
    {
        $notice = Notice::with('user')->orderBy('id', 'DESC')->paginate(10);
        $count = Notice::all()->count();
        //dd($count);
        return view('users.teacher.notice', compact(['notice', 'count']));
    }

    public function single_notice($id)
    {
        // $notice=Notice::where('id', $id)->with('user')->first();
        // $pdf=PDF::loadView('users.teacher.download', compact('notice'));
        // return $pdf->download('Question.pdf');
        $notice = Notice::with('user')->where('id', $id)->first();
        // dd($notice);
        return view('users.teacher.single_notice', compact('notice'));
    }

    public function students()
    {
        $role = Auth::user()->role;
        $users = User::orderBy('id', 'DESC')->get();
        return view('users.teacher.students', compact('users'));
    }

    public function teacher_profile_submit(Request $request, $id)
    {

        // dd($id);
        $user = User::find(Auth::user()->id);
        // dd($user->id);
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'teachers_short_name' => 'required|max:3',
            'status' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric|unique:teachers',
            'blood_group' => 'required|max:3',
            'masters_institution' => 'required',
            'bachelor_institution' => 'required',
            'address' => 'required',
            'about' => 'required',
        ]);
        $teachers = new Teacher;
        $teachers->user_id = $user->id;
        $teachers->firstname = $request->firstname;
        $teachers->lastname = $request->lastname;
        $teachers->teachers_short_name = $request->teachers_short_name;
        $teachers->status = $request->status;
        $teachers->phone = $request->phone;
        $teachers->gender = $request->gender;
        $teachers->blood_group = $request->blood_group;
        $teachers->address = $request->address;
        $teachers->about = $request->about;
        $teachers->masters_institution = $request->masters_institution;
        $teachers->bachelor_institution = $request->bachelor_institution;
        $teachers->save();
        return redirect()->route('teacher.data')->with('pending', 'Your Profile is pending');
    }

    public function index()
    {
        $sessions = Session::latest()->first();
        //dd($sessions);
        $departments = Department::all();
        $teachers = Teacher::all();
        $id = Auth::user()->id;
        $teachers = Teacher::where('user_id', $id)->with(['user', 'department'])->get();

        $notice = Notice::with('user')->orderBy('id', 'DESC')->paginate(5);
        $count_notice = Notice::all()->count();
        $count_user = User::all()->count();
        $count_teacher = Teacher::all()->count();
        $count_student = Student::all()->count();
        $count_course = Course::all()->count();
        //dd($count);

        //dd($teachers);
        return view('users.teacher.index', compact(['departments', 'teachers', 'sessions', 'notice', 'count_notice', 'count_user', 'count_teacher', 'count_student', 'count_course',]));
    }

    public function show_teacher_data()
    {
        $departments = Department::all();
        $id = Auth::user()->id;
        $teachers = teacher::where('user_id', $id)->with(['user', 'department'])->get();
        return redirect()->back()->with('pending', 'Pending', compact(['teachers', 'departments']));
    }



    public function my_batch_courses()
    {
        $auth_id = Auth::user()->id;
        $teacher = Teacher::where('user_id', $auth_id)->first();
        $teacher_id = ($teacher->id);
        // dd($teacher_id);
        $batch_advisor = Batch::where('teacher_id', $teacher_id)->first();
        // dd($batch_advisor);
        $semester_id = $batch_advisor->semester_id;
        // dd($semester_id);
        $assign_courses = AssignCourses::where('semester_id', $semester_id)->with(['course'])->get();
        // dd($assign_courses);
        foreach ($assign_courses as $assign_course) {
            $teacher_internal = Teacher::where('id', $assign_course->teacher_internal_id)->first()->teachers_short_name;
            $assign_course->teacher_internal = $teacher_internal;
        }
        //dd($assign_courses[0]);
        return view('users.teacher.my_batch_course_list', compact('assign_courses'));
    }




    public function my_batch_student_profile($id)
    {
        $student_details = Student::where('id', $id)->with('user')->first();
        // dd($student_details);
        return view('users.teacher.my_batch_student_profile_details', compact('student_details'));
    }


    public function my_courses_result($session_id, $semester_id, $course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $results = Result::where([['session_id', $session_id], ['semester_id', $semester_id], ['course_id', $course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        $result_added = Result::where([['session_id', $session_id], ['semester_id', $semester_id], ['course_id', $course_id]])->count();

        // dd(count($result_added));
        return view('users.teacher.my_course_result_sheet', compact(['results', 'result_added', 'course', 'session_id', 'semester_id']));
    }

    public function my_batch_result_list($semester_id, $course_id)
    {
        $course = Course::where('id', $course_id)->first();

        $results = Result::where([['semester_id', $semester_id], ['course_id', $course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        return view('users.teacher.my_batch_result_list', compact(['results', 'course']));
    }
    public function my_courses_result_export($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $results = Result::where([['course_id', $course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        $pdf = PDF::loadView('users.teacher.my_course_result_sheet_export', compact(['results', 'course']))->setPaper('a4', 'landscape');
        return $pdf->download('Course_result.pdf');
        // return view('users.teacher.my_course_result_sheet_export', compact(['results','course']));
    }

    public function my_batch_result_export($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $results = Result::where([['course_id', $course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        $pdf = PDF::loadView('users.teacher.my_batch_result_sheet_export', compact(['results', 'course']));
        return $pdf->download('batch_result.pdf');
        // return view('users.teacher.my_course_result_sheet_export', compact(['results','course']));
    }


    public function password()
    {
        return view('users.teacher.settings.password');
    }

    public function terms()
    {
        return view('users.teacher.settings.terms');
    }

    public function privacy()
    {
        return view('users.teacher.settings.privacy');
    }
    public function coming_soon()
    {
        return view('users.teacher.events.coming_soon');
    }
}
