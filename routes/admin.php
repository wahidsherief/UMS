<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursetypeController;
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
Route::post('batch', [BatchController::class, 'add_batch_submit'])->name('batch.submit');

// Semester parts

Route::get('semester', [SemesterController::class, 'add_semester'])->name('add.semester');
Route::get('semesters', [SemesterController::class, 'semester_data'])->name('semester_data');

Route::post('semesters', [SemesterController::class, 'add_semester_submit'])->name('add.semester.submit');

// Courses parts

Route::get('course', [CourseController::class, 'add_course'])->name('add.course');
Route::get('courses', [CourseController::class, 'course_data'])->name('course_data');

Route::post('course', [CourseController::class, 'add_course_submit'])->name('add.course.submit');

//Coursetype parts


Route::get('coursetype', [CoursetypeController::class, 'add_coursetype'])->name('add.coursetype');
Route::get('coursetypes', [CoursetypeController::class, 'coursetype_data'])->name('coursetype_data');
Route::post('coursetype', [CoursetypeController::class, 'add_coursetype_submit'])->name('add.course.submit');
//pending account

Route::get('studentaccount', [AdminController::class, 'pendingstudent'])->name('admin.pending.student');
Route::get('teacheraccount', [AdminController::class, 'pendingteacher'])->name('admin.pending.teacher');


Route::post('accountapproved/{id}', [AdminController::class, 'studentaccountaccept'])->name('admin.student_account_approve');


});
?>
