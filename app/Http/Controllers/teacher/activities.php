<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batchdesign;
use Illuminate\Support\Facades\Auth;
class activities extends Controller
{
    public function activities(){

        $id=Auth::user()->id;
        $assign_courses= Batchdesign::where('teacher_internal_id',$id)->with(['user','department','semester'])->get();

        $batchdesigns= Batchdesign::with(['department','semester','course'])->get();
        // dd($batchdesigns);
        return view('users.teacher.teacher_internal',compact('assign_courses'));

    }
    public function external_activities(){

        $id=Auth::user()->id;
        $assign_courses= Batchdesign::where('teacher_external_id',$id)->with(['user','department','semester'])->get();

        $batchdesigns= Batchdesign::with(['department','semester','course'])->get();
        // dd($batchdesigns);
        return view('users.teacher.teacher_external',compact('assign_courses'));

    }


}
