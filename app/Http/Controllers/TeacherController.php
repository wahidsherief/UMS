<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('users.teacher.index');
    }
    public function profile(){
        return view('users.teacher.profile');
    }
    public function setting(){
        return view('users.teacher.setting');
    }
}
