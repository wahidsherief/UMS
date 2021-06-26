<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\activity;
use Illuminate\Http\Request;

class Activities extends Controller
{
    public function add_activities(){
return view('users.admin.add_activities');
    }

    public function activities_data(){

        $activities= Activity::latest()->get();
        // dd($students);
        return view('users.admin.activities',compact('activities'));
    }

    public function add_activities_submit(Request $request){
        $activities = new Activity();
        $activities->activity_name= $request->activity_name;
        $activities->save();
        return redirect()->back()->with('activity_added', 'Activity Has Been Created Successfully');

            }
    public function show_activities(){

    }
}
