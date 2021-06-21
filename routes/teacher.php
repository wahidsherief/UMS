<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursetypeController;
//Teacher

Route::group(['prefix' => 'teacher', 'middleware' => ['isTeacher', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
    Route::get('complete-profile', [TeacherController::class, 'pending'])->name('teacher.pending');
    Route::get('profile', [TeacherController::class, 'profile'])->name('teacher.profile');
    Route::get('setting', [TeacherController::class, 'setting'])->name('teacher.setting');
    Route::get('addnotice', [TeacherController::class, 'addnotice'])->name('teacher.addnotice');
    Route::get('notice', [TeacherController::class, 'notice'])->name('teacher.notice');
    Route::get('notice/{id}', [TeacherController::class, 'single_notice'])->name('teacher.single_notice');
    Route::get('teacher_profile', [TeacherController::class, 'show_teacher_data'])->name('teacher.data');

    Route::POST('submitnotice/{id}', [NoticeController::class, 'insertNotice'])->name('insertNotice');

    Route::post('update-profile-info', [ProfileController::class, 'updateInfo'])->name('teacher.UpdateInfo');
    Route::post('change-profile-picture', [ProfileController::class, 'updatePicture'])->name('teacherPictureUpdate');
    Route::post('change-password', [ProfileController::class, 'ChangePassword'])->name('teacherChangePassword');

    Route::post('student_profile/{id}', [TeacherController::class, 'full_profile'])->name('teacher.profile.submit');

});

?>
