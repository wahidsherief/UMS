<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NotificationController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'superadmin','middleware'=>['isSuperAdmin','auth','PreventBackHistory']],function(){

    Route::get('dashboard',[SuperAdminController::class,'index'])->name('superadmin.dashboard');
    Route::get('profile',[SuperAdminController::class,'profile'])->name('superadmin.profile');
    Route::get('setting',[SuperAdminController::class,'setting'])->name('superadmin.setting');

});

Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBackHistory']],function(){

    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('setting',[AdminController::class,'setting'])->name('admin.setting');

});

//Teacher

Route::group(['prefix'=>'teacher','middleware'=>['isTeacher','auth','PreventBackHistory']],function(){

    Route::get('dashboard',[TeacherController::class,'index'])->name('teacher.dashboard');
    Route::get('profile',[TeacherController::class,'profile'])->name('teacher.profile');
    Route::get('setting',[TeacherController::class,'setting'])->name('teacher.setting');
    Route::get('notification',[TeacherController::class,'addNotification'])->name('teacher.notification');


    Route::POST('submitnotification',[NotificationController::class,'insertNotification'])->name('insertNotification');

    Route::post('update-profile-info',[TeacherController::class,'updateInfo'])->name('teacher.UpdateInfo');
    Route::post('change-profile-picture',[TeacherController::class,'updatePicture'])->name('teacherPictureUpdate');

    Route::post('change-password',[TeacherController::class,'ChangePassword'])->name('teacherChangePassword');

});

//Student Info
Route::group(['prefix'=>'student','middleware'=>['isStudent','auth','PreventBackHistory']],function(){

    Route::get('dashboard',[StudentController::class,'index'])->name('student.dashboard');
    Route::get('profile',[StudentController::class,'profile'])->name('student.profile');
    Route::get('setting',[StudentController::class,'setting'])->name('student.setting');
    Route::get('notification',[StudentController::class,'notification'])->name('student.notification');


    Route::post('update-profile-info',[StudentController::class,'updateInfo'])->name('student.UpdateInfo');
    Route::post('change-profile-picture',[StudentController::class,'updatePicture'])->name('studentPictureUpdate');

    Route::post('change-password',[StudentController::class,'ChangePassword'])->name('studentChangePassword');

});
