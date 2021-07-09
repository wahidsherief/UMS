<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function profile()
    {
        return view('users.teacher.profile');
    }

    public function setting()
    {
        return view('users.teacher.setting');
    }

    public function addnotice()
    {
        return view('users.teacher.addnotice');
    }

    public function notice()
    {
        $notice = Notice::with('user')->orderBy('id', 'DESC')->paginate(10);
        return view('users.teacher.notice', compact('notice'));
    }

    public function single_notice($id)
    {
        // $notice=Notice::where('id', $id)->with('user')->first();
        // $pdf=PDF::loadView('users.teacher.download', compact('notice'));
        // return $pdf->download('Question.pdf');
        $notice = Notice::with('user')->where('id', $id)->get();
        return view('users.teacher.single_notice', compact('notice'));
    }

    public function students()
    {
        $role=Auth::user()->role;
        $users = User::orderBy('id', 'DESC')->get();
        return view('users.teacher.students', compact('users'));
    }

    public function full_profile(Request $request, $id)
    {
        $user=User::find(Auth::user()->id);

        $teachers= new Teacher;

        $teachers->department_id=$request->department_id;

        $teachers->firstname=$request->firstname;
        $teachers->lastname=$request->lastname;

        $teachers->status=$request->status;
        $teachers->phone=$request->phone;
        $teachers->address=$request->address;
        $teachers->blood_group=$request->blood_group;
        $user->teacher()->save($teachers);
        return redirect()->route('teacher.data')->with('pending', 'Your Profile is pending');
    }

    public function index()
    {
        $sessions = Session::latest()->first();
        //dd($sessions);
        $departments = Department::all();
        $teachers = Teacher::all();
        $id=Auth::user()->id;
        $teachers=Teacher::where('user_id', $id)->with(['user','department'])->get();
        //dd($teachers);
        return view('users.teacher.index', compact(['departments','teachers','sessions']));
    }

    public function show_teacher_data()
    {
        $departments = Department::all();
        $id=Auth::user()->id;
        $teachers= teacher::where('user_id', $id)->with(['user','department'])->get();
        return redirect()->back()->with('pending', 'Pending', compact(['teachers','departments']));
    }

    public function batch_all_student()
    {
        $auth_id=Auth::user()->id;
        $teacher= Teacher::where('user_id', $auth_id)->first();
        $teacher_id=($teacher->id);
        // dd($teacher_id);
        $batch_advisor=Batch::where('teacher_id', $teacher_id)->first();
        // dd($batch_advisor);
        $batch_id=$batch_advisor->id;
        $my_batch_students=Student::where('batch_id', $batch_id)->with('user')->get();
        return view('users.teacher.my_batch_students_list', compact('my_batch_students'));
    }

    public function my_batch_courses()
    {
        $auth_id=Auth::user()->id;
        $teacher= Teacher::where('user_id', $auth_id)->first();
        $teacher_id=($teacher->id);
        // dd($teacher_id);
        $batch_advisor=Batch::where('teacher_id', $teacher_id)->first();
        // dd($batch_advisor);
        $semester_id=$batch_advisor->semester_id;
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
        $student_details=Student::where('id', $id)->with('user')->first();
        // dd($student_details);
        return view('users.teacher.my_batch_student_profile_details', compact('student_details'));
    }


    public function my_courses_result($session_id, $semester_id, $course_id)
    {
        $course=Course::where('id', $course_id)->first();
        $results=Result::where([['session_id',$session_id],['semester_id',$semester_id],['course_id',$course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        return view('users.teacher.my_course_result_sheet', compact(['results','course']));
    }

    public function my_batch_result_list($semester_id, $course_id)
    {
        $course=Course::where('id', $course_id)->first();
        $results=Result::where([['semester_id',$semester_id],['course_id',$course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        return view('users.teacher.my_batch_result_list', compact(['results','course']));
    }
    public function my_courses_result_export($course_id)
    {
        $course=Course::where('id', $course_id)->first();
        $results=Result::where([['course_id',$course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        $pdf=PDF::loadView('users.teacher.my_course_result_sheet_export', compact(['results','course']));
        return $pdf->download('Course_result.pdf');
        // return view('users.teacher.my_course_result_sheet_export', compact(['results','course']));
    }
    public function my_batch_result_export($course_id)
    {
        $course=Course::where('id', $course_id)->first();
        $results=Result::where([['course_id',$course_id]])->with('session', 'semester', 'course', 'student')->latest()->get();
        // dd($results[0]);
        $pdf=PDF::loadView('users.teacher.my_batch_result_sheet_export', compact(['results','course']));
        return $pdf->download('batch_result.pdf');
        // return view('users.teacher.my_course_result_sheet_export', compact(['results','course']));
    }
}
