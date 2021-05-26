<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(){
        return view('users.superadmin.index');
    }
    public function profile(){
        return view('users.superadmin.profile');
    }
    public function setting(){
        return view('users.superadmin.setting');
    }
}
