<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProfileController;

Route::group(['prefix' => 'student', 'middleware' => ['isStudent', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::post('student_profile-submit', [StudentController::class, 'student_full_information'])->name('student_full_information_submit');
    Route::get('student_profile', [StudentController::class, 'show_student_data'])->name('student.data');

    Route::group(['middleware' => 'isAccountStatus'], function () {
        Route::get('profile', [StudentController::class, 'profile'])->name('student.profile');
        Route::get('setting', [StudentController::class, 'setting'])->name('student.setting');
        Route::get('notice', [StudentController::class, 'notice'])->name('student.notice');
        Route::get('notice/{id}', [StudentController::class, 'single_notice'])->name('student.single_notice');
        Route::view('/student-password', 'users.student.password')->name('student_password');


        Route::post('update-profile-info', [ProfileController::class, 'updateInfo'])->name('student.UpdateInfo');
        Route::post('change-profile-picture', [ProfileController::class, 'updatePicture'])->name('studentPictureUpdate');
        Route::post('change-password', [ProfileController::class, 'ChangePassword'])->name('studentChangePassword');


        //result
        Route::get('result', [StudentController::class, 'result'])->name('result');

        Route::get('questions', [StudentController::class, 'show_question'])->name('student.show_questions');
        Route::get('download-question/{id}', [StudentController::class, 'download'])->name('student.question_download');
        Route::get('search-question', [StudentController::class, 'search'])->name('question.student.search');
    });
});
