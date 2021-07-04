<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Teacher;

use App\Models\Semester;

class BatchController extends Controller
{
    public function add_batch()
    {
        $semesters=Semester::latest()->get();
        $teachers=Teacher::latest()->get();
        $batches = Batch::latest()->with('semester', 'teacher')->get();
        return view('users.admin.add_batch', compact(['batches','semesters','teachers']));
    }

    public function update_batch($id)
    {
        $batches = Batch::where('id', $id)->with('semester', 'teacher')->first();
        $semesters=Semester::latest()->get();
        $teachers=Teacher::latest()->get();

        return view('users.admin.update_batch', compact(['batches','semesters','teachers']));
    }

    public function add_batch_submit(Request $request)
    {
        $batches = new Batch();
        $batches->semester_id = $request->semester_id;
        $batches->teacher_id= $request->batch_advisor;
        $batches->batch_name = $request->batch_name;
        $batches->save();
        return redirect()->back()->with('batch_created', 'Batch Has Been Created Successfully');
    }

    public function update_batch_submit(Request $request, $id)
    {
        $batches=Batch::find($id);
        $batches->semester_id = $request->semester_id;
        $batches->teacher_id= $request->batch_advisor;
        $batches->batch_name = $request->batch_name;
        $batches->save();
        return redirect()->route('add.batch')->with('batch_updated', 'Account Has Been Approved');
    }
    public function deletebatch($id)
    {
        Batch::where('id', $id)->delete();
        return redirect()->back()->with('batch_deleted', 'Notice Has Been Removed');
    }
}
