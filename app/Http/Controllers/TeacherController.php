<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notice;

use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index()
    {
        return view('users.teacher.index');
    }

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
        $notice = Notice::with('user')->where('id', $id)->get();
        return view('users.teacher.single_notice', compact('notice'));
    }





}
