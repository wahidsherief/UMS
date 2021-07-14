<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursetypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssignCoursesController;

// Admin functionality
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('setting', [AdminController::class, 'setting'])->name('admin.setting');
    Route::get('addnotice', [AdminController::class, 'addnotice'])->name('admin.addnotice');
    Route::get('notice', [AdminController::class, 'notice'])->name('admin.notice');
    Route::get('notice/{id}', [AdminController::class, 'single_notice'])->name('admin.single_notice');

    //delete operation
    Route::get('delete-notice/{id}', [AdminController::class, 'deletenotice'])->name('admin.deletenotice');

    Route::get('account-delete/{id}', [AdminController::class, 'teacheraccountdelete'])->name('admin.teacher_account_delete');
    Route::get('saccount-delete/{id}', [AdminController::class, 'studentaccountdelete'])->name('admin.student_account_delete');


    Route::POST('submitnotice/{id}', [NoticeController::class, 'insertNotice'])->name('admin_insertNotice');

    Route::post('update-profile-info', [ProfileController::class, 'updateInfo'])->name('admin.UpdateInfo');
    Route::post('change-profile-picture', [ProfileController::class, 'updatePicture'])->name('adminPictureUpdate');

    Route::post('change-password', [ProfileController::class, 'ChangePassword'])->name('adminChangePassword');



    // Batch parts

    Route::get('batch', [BatchController::class, 'add_batch'])->name('add.batch');
    Route::get('update-batch/{id}', [BatchController::class, 'update_batch'])->name('update.batch');
    Route::POST('update-batch/{id}', [BatchController::class, 'update_batch_submit'])->name('update.batch');
    Route::post('batch', [BatchController::class, 'add_batch_submit'])->name('batch.submit');
    Route::get('delete-batch/{id}', [BatchController::class, 'deletebatch'])->name('delete.batch');

    // Semester parts

    Route::get('semester', [SemesterController::class, 'add_semester'])->name('add.semester');
    Route::get('update-semester/{id}', [SemesterController::class, 'update_semester'])->name('update.semester');
    Route::POST('update-semester/{id}', [SemesterController::class, 'update_semester_submit'])->name('update.semester');
    Route::POST('semester', [SemesterController::class, 'add_semester_submit'])->name('add.semester.submit');
    Route::get('delete-semester/{id}', [SemesterController::class, 'deletesemester'])->name('delete.semester');

    // Courses parts

    Route::get('course', [CourseController::class, 'add_course'])->name('add.course');
    Route::get('courses', [CourseController::class, 'course_data'])->name('course_data');

    Route::POST('course', [CourseController::class, 'add_course_submit'])->name('add.course.submit');

    //Coursetype parts


    Route::get('coursetype', [CoursetypeController::class, 'add_coursetype'])->name('add.coursetype');
    Route::get('coursetypes', [CoursetypeController::class, 'coursetype_data'])->name('coursetype_data');
    //Route::post('coursetype', [CoursetypeController::class, 'add_coursetype_submit'])->name('add.course.submit');
    //pending account

    Route::get('studentaccount', [AdminController::class, 'pendingstudent'])->name('admin.pending.student');
    Route::get('teacheraccount', [AdminController::class, 'pendingteacher'])->name('admin.pending.teacher');


    Route::post('studentaccountapproved/{id}', [AdminController::class, 'studentaccountaccept'])->name('admin.student_account_approve');
    Route::POST('accountapproved/{id}', [AdminController::class, 'teacheraccountaccept'])->name('admin.teacher_account_approve');


    //Session Information
    //Create
    Route::get('session', [SessionController::class, 'add_session'])->name('admin.add_session');
    Route::POST('session', [SessionController::class, 'add_session_submit'])->name('admin.add.session.submit');
    //update
    Route::get('update-session/{id}', [SessionController::class, 'update_session'])->name('admin.update_session');
    Route::POST('update-session/{id}', [SessionController::class, 'update_session_submit'])->name('admin.update_session.submit');
    //delete
    Route::get('delete-session/{id}', [SessionController::class, 'delete_session'])->name('admin.delete_session');



    Route::get('Assign-courses', [AssignCoursesController::class, 'assign_courses'])->name('admin.assign_courses');
    Route::get('update-activity/{id}', [AssignCoursesController::class, 'update_assign_courses'])->name('admin.assign_courses_update');
    Route::POST('update-activity/{id}', [AssignCoursesController::class, 'update_assign_courses_submit'])->name('admin.assign_courses_update.submit');
});
