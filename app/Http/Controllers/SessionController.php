<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    public function add_session()
    {
        $sessions = Session::orderBy('id', 'DESC')->get();

        $latest = Session::orderBy('id', 'DESC')->first()->id;
        // dd($latest);

        return view('users.admin.sessions', compact(['sessions', 'latest']));
    }
    public function update_session($id)
    {
        $session = Session::where('id', $id)->first();
        return view('users.admin.update_session', compact('session'));
    }

    public function add_session_submit(Request $request)
    {
        $sessions = new Session();
        $request->validate(['session_name' => 'required']);
        $sessions->session_name = $request->session_name;
        $sessions->save();
        return redirect()->back()->with('session_created', 'session Has Been Created Successfully');
    }

    public function update_session_submit(Request $request, $id)
    {
        $sessions = Session::find($id);
        $sessions->session_name = $request->session_name;
        $sessions->save();
        return redirect()->route('admin.add_session')->with('session_updated', 'Updated Succcessfully');
    }

    public function delete_session($id)
    {
        $session = Session::where('id', $id)->delete();
        return back()->with('session_deleted', 'Updated Succcessfully');
    }
}
