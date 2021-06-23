<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Hash;
class SuperAdminController extends Controller
{
    public function index()
    {
        return view('users.superadmin.index');
    }

    public function profile()
    {
        return view('users.superadmin.profile');
    }

    public function setting()
    {
        return view('users.superadmin.setting');
    }

}
