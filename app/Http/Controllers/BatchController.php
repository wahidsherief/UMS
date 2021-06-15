<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;

class BatchController extends Controller
{
    public function add_batch()
    {

        return view('users.admin.add_batch');
    }

    public function add_batch_submit(Request $request)
    {

        $batches = new Batch();
        $batches->batch_name = $request->batch_name;
        $batches->batch_advisor = $request->batch_advisor;
        $batches->save();
        return redirect()->back()->with('batch_created', 'Batch Has Been Created Successfully');
    }

    public function batch_data()
    {
        $batches = Batch::latest()->get();
        return view('users.admin.batch_data', compact('batches'));
    }
}
