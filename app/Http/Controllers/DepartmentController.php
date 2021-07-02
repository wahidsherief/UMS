<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function add_department()
    {
        return view('users.superadmin.add_department');
    }
    public function delete_department($id)
    {
        Department::where('id', $id)->delete();
        return redirect()->back()->with('notice_deleted', 'Notice Has Been Removed');
    }
    public function add_department_submit(Request $request)
    {
        $departments=new Department();
        $departments->department_name=$request->department_name;
        $departments->department_head=$request->department_head;
        $departments->save();
        return redirect()->back()->with('department_created', 'Department Has Been Created Successfully');
    }

    public function department_data()
    {
        $departments= Department::latest()->paginate(10);
        return view('users.superadmin.department_data', compact('departments'));
    }
}
