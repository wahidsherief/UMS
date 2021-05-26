<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('users.admin.index');
    }
    public function profile(){
        return view('users.admin.profile');
    }
    public function setting(){
        return view('users.admin.setting');
    }
}
