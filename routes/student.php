<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursetypeController;
use App\Http\Controllers\ProfileController;

Route::group(['prefix' => 'student', 'middleware' => ['isStudent', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::group(['middleware' => 'isAccountStatus'], function () {
        Route::get('profile', [StudentController::class, 'profile'])->name('student.profile');
        Route::get('setting', [StudentController::class, 'setting'])->name('student.setting');
        Route::get('notice', [StudentController::class, 'notice'])->name('student.notice');
        Route::get('notice/{id}', [StudentController::class, 'single_notice'])->name('student.single_notice');
        Route::get('student_profile', [StudentController::class, 'show_student_data'])->name('student.data');

        Route::post('update-profile-info', [ProfileController::class, 'updateInfo'])->name('student.UpdateInfo');
        Route::post('change-profile-picture', [ProfileController::class, 'updatePicture'])->name('studentPictureUpdate');
        Route::post('change-password', [ProfileController::class, 'ChangePassword'])->name('studentChangePassword');

        Route::post('student_profile/{id}', [StudentController::class, 'full_profile'])->name('student.profile.submit');

        //result
        Route::get('result', [StudentController::class, 'result'])->name('result');
    });
});
