<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examination;
use App\Models\Session;

class ExaminationController extends Controller
{
    public function create()
    {
        $examinations = Examination::orderBy('id', 'DESC')->with('session')->get();
        $count = Examination::orderBy('id', 'ASC')->count();
        return view('users.admin.examination', compact(['examinations', 'count']));
    }
    public function submit(Request $request)
    {
        $session_id = Session::orderBy('id', 'DESC')->first()->id;
        $examination = new Examination();
        $request->validate(['name' => 'required']);
        $examination->session_id = $session_id;
        $examination->name = $request->name;
        $examination->status = 0;
        $examination->save();
        if ($examination) {
            return redirect()->back()->with('created', 'created');
        }
    }
    public function start(Request $request, $id)
    {
        $examination = Examination::find($id);
        $examination->status = 1;
        $examination->save();
        if ($examination) {
            return redirect()->back()->with('started', 'started');
        }
    }
    public function end(Request $request, $id)
    {
        $examination = Examination::find($id);
        $examination->status = 2;
        $examination->save();
        if ($examination) {
            return redirect()->back()->with('stopped', 'stopped');
        }
    }
}
