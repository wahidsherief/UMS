<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\BatchController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend

Route::view('/', 'website.index')->name('index');
Route::view('/about', 'website.about')->name('about');
Route::view('/courses', 'website.courses')->name('courses');
Route::view('/news', 'website.news')->name('news');
Route::view('/contact', 'website.contact')->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Superadmin Functionality

Route::group(['prefix' => 'superadmin', 'middleware' => ['isSuperAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('profile', [SuperAdminController::class, 'profile'])->name('superadmin.profile');
    Route::get('setting', [SuperAdminController::class, 'setting'])->name('superadmin.setting');
});

// Admin functionality
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('setting', [AdminController::class, 'setting'])->name('admin.setting');
    Route::get('addnotice', [AdminController::class, 'addnotice'])->name('admin.addnotice');
    Route::get('notice', [AdminController::class, 'notice'])->name('admin.notice');
    Route::get('notice/{id}', [AdminController::class, 'single_notice'])->name('admin.single_notice');

    Route::POST('submitnotice/{id}', [NoticeController::class, 'insertNotice'])->name('admin_insertNotice');
    Route::post('update-profile-info', [TeacherController::class, 'updateInfo'])->name('admin.UpdateInfo');
    Route::post('change-profile-picture', [TeacherController::class, 'updatePicture'])->name('adminPictureUpdate');

    Route::post('change-password', [TeacherController::class, 'ChangePassword'])->name('adminChangePassword');


// Department parts

Route::get('department', [DepartmentController::class, 'add_department'])->name('add.department');
Route::get('departments', [DepartmentController::class, 'department_data'])->name('department_data');

Route::post('department', [DepartmentController::class, 'add_department_submit'])->name('add.department.submit');

// Batch parts

Route::get('batch', [BatchController::class, 'add_batch'])->name('add.batch');
Route::get('batches', [BatchController::class, 'batch_data'])->name('batch_data');

Route::post('batch', [BatchController::class, 'add_batch_submit'])->name('add.batch.submit');


});

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

//Student Info
Route::group(['prefix' => 'student', 'middleware' => ['isStudent', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::get('profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::get('setting', [StudentController::class, 'setting'])->name('student.setting');
    Route::get('notice', [StudentController::class, 'notice'])->name('student.notice');
    Route::get('notice/{id}', [StudentController::class, 'single_notice'])->name('student.single_notice');

    Route::post('update-profile-info', [StudentController::class, 'updateInfo'])->name('student.UpdateInfo');
    Route::post('change-profile-picture', [StudentController::class, 'updatePicture'])->name('studentPictureUpdate');

    Route::post('change-password', [StudentController::class, 'ChangePassword'])->name('studentChangePassword');

    Route::post('student_profile/{id}', [StudentController::class, 'full_profile'])->name('student.profile.submit');

    Route::get('student_profile', [StudentController::class, 'show_student_data'])->name('student.profile');





});
