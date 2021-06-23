<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursetypeController;
use App\Http\Controllers\ProfileController;
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
    Route::get('delete-batch/{id}', [AdminController::class, 'deletebatch'])->name('admin.deletebatch');
    Route::get('delete-department/{id}', [AdminController::class, 'deletedepartment'])->name('admin.deletedepartment');
    Route::get('delete-semester/{id}', [AdminController::class, 'deletesemester'])->name('admin.deletesemester');

    Route::get('account-delete/{id}', [AdminController::class, 'teacheraccountdelete'])->name('admin.teacher_account_delete');
    Route::get('saccount-delete/{id}', [AdminController::class, 'studentaccountdelete'])->name('admin.student_account_delete');


    Route::POST('submitnotice/{id}', [NoticeController::class, 'insertNotice'])->name('admin_insertNotice');

    Route::post('update-profile-info', [ProfileController::class, 'updateInfo'])->name('admin.UpdateInfo');
    Route::post('change-profile-picture', [ProfileController::class, 'updatePicture'])->name('adminPictureUpdate');

    Route::post('change-password', [ProfileController::class, 'ChangePassword'])->name('adminChangePassword');



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


Route::post('studentaccountapproved/{id}', [AdminController::class, 'studentaccountaccept'])->name('admin.student_account_approve');
Route::POST('accountapproved/{id}', [AdminController::class, 'teacheraccountaccept'])->name('admin.teacher_account_approve');


});
?>
