<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class TeacherNoticeController extends Controller
{
    public function my_notice($id)
    {
        $notices = Notice::where('user_id', $id)->with('user')->latest()->paginate(10);
        $count = Notice::all()->count();
        return view('users.teacher.notice.my_notice', compact(['notices', 'count']));
    }
    public function notice_delete($id)
    {
        Notice::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Notice Has Been Removed');
    }
}
