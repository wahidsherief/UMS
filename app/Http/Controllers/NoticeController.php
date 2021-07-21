<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\User;

class NoticeController extends Controller
{
    public function insertNotice(Request $request, $id)
    {
        $request->validate(
            [
                'notice_title' => 'required|min:1|max:200',
                'notice_body' => 'required',
                'notice_file' => 'required|mimes:jpeg,jpg,png',

            ]
        );

        $user = User::find(Auth::user()->id);
        $notice = new Notice();


        $notice->notice_title = $request->notice_title;
        $notice->notice_body = $request->notice_body;
        $image = $request->file('notice_file');

        if ($image) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('users/images/notice'), $imageName);
            $notice->notice_file = $imageName;
        }

        $user->notice()->save($notice);

        return back()->with('submitted', 'Post has been submitted');
    }
}
