<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursetypeController;
//Teacher

Route::group(['prefix' => 'teacher', 'middleware' => ['isTeacher', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
    Route::get('profile', [TeacherController::class, 'profile'])->name('teacher.profile');
    Route::get('setting', [TeacherController::class, 'setting'])->name('teacher.setting');
    Route::get('addnotice', [TeacherController::class, 'addnotice'])->name('teacher.addnotice');
    Route::get('notice', [TeacherController::class, 'notice'])->name('teacher.notice');
    Route::get('notice/{id}', [TeacherController::class, 'single_notice'])->name('teacher.single_notice');

    Route::POST('submitnotice/{id}', [NoticeController::class, 'insertNotice'])->name('insertNotice');
    Route::post('update-profile-info', [TeacherController::class, 'updateInfo'])->name('teacher.UpdateInfo');
    Route::post('change-profile-picture', [TeacherController::class, 'updatePicture'])->name('teacherPictureUpdate');
    Route::post('change-password', [TeacherController::class, 'ChangePassword'])->name('teacherChangePassword');
});

?>
