<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\User;
use Auth;
class NoticeController extends Controller
{
public function insertNotice(Request $request, $id){


    $user= User::find(Auth::user()->id);
$notice= new Notice();
       $notice->notice_title=$request->notice_title;
       $notice->notice_body=$request->notice_body;
    $image=$request->file('notice_file');
    $imageName= time(). '.'.$image->extension();
    $image->move(public_path('users/images/notice'),$imageName);
    $notice->notice_file=$imageName;
    $user->notice()->save($notice);


       return back()->with('submitted','Post has been submitted');

          }

        }
