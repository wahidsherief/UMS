<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batchdesign;
class activities extends Controller
{
    public function activities(){
        $batchdesigns= Batchdesign::with(['department','semester','course'])->get();
        // dd($students);
        return view('users.teacher.teacher_activities',compact('batchdesigns'));

    }



}
