<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class NotificationController extends Controller
{
    public function insertNotification(Request $request){
        $notification= new Notification();
        $notification->name=Auth::user()->name;
        $notification->picture=Auth::user()->picture;
        $notification->title=$request->title;
        $notification->post_body=$request->post_body;
        $notification->save();
        return back()->with('submitted','Post has been submitted');
           }
}
