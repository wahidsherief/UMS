<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\teacher\SessionController;
use App\Http\Controllers\teacher\activities;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursetypeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\teacher\MyBatchController;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

//Teacher

Route::group(['prefix' => 'teacher', 'middleware' => ['isTeacher', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
    Route::group(['middleware' => 'isAccountStatus'], function () {
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

        Route::get('all-student', [TeacherController::class, 'students'])->name('teacher.students');

        Route::get('assign-courses', [AssignCoursesController::class, 'assign_courses'])->name('teacher.assign_courses');
        Route::get('sessions', [SessionController::class, 'session'])->name('teacher.sessions');

        Route::get('my-courses', [SessionController::class, 'my_courses'])->name('teacher.my_courses');

        Route::get('student-details/{session_id}{semester_id}/{course_id}', [SessionController::class, 'student_details'])->name('teacher.student_details');
        Route::get('results/{session_id}/{student_id}/{semester_id}/{course_id}', [ResultController::class, 'add_result'])->name('add.result');
        Route::POST('results/{session_id}/{student_id}/{semester_id}/{course_id}/{course_credit}', [ResultController::class, 'add_result_submit'])->name('submit.result');

        Route::get('semester', [ResultController::class, 'semester_result'])->name('teacher.semester_result');
        Route::get('session_result/{semester_id}', [ResultController::class, 'show_result'])->name('show_result');
        Route::get('show-result', [ResultController::class, 'show_result_session'])->name('teacher.session_result');
        Route::POST('accept-result/{student_id}/{course_id}', [ResultController::class, 'accept_my_batch_result'])->name('accept_my_batch_result');


        Route::get('My-batch', [SessionController::class, 'my_batch'])->name('teacher.my_batch');
        Route::get('Student-result/{id}', [ResultController::class, 'student_full_result'])->name('student_semester_result');
        Route::get('remove/{student_id}/{course_id}}', [ResultController::class, 'delete_result'])->name('advisor.delete_result');

        // My Batch details
        Route::get('my-batch-students', [MyBatchController::class, 'students'])->name('MyBatchController.students');
        Route::get('my-batch-notification', [MyBatchController::class, 'notification'])->name('MyBatchController.notification');
        Route::get('my-batch-students/{id}', [TeacherController::class, 'my_batch_student_profile'])->name('teacher.my_batch_student_profile');

        Route::get('my-batch-courses', [TeacherController::class, 'my_batch_courses'])->name('teacher.my_batch_courses');
        Route::get('my-result-list/{semester_id}/{course_id}', [TeacherController::class, 'my_batch_result_list'])->name('teacher.my_batch_result_list');
        Route::get('export-results/{course_id}', [TeacherController::class, 'my_batch_result_export'])->name('teacher.my_batch_result_export');

        //As Internal Semester Result
        Route::get('my-course-result/{session_id}/{semester_id}/{course_id}', [TeacherController::class, 'my_courses_result'])->name('teacher.my_courses_result');
        Route::get('export-result/{course_id}', [TeacherController::class, 'my_courses_result_export'])->name('teacher.my_course_result_export');

        //Question
        Route::get('upload-question/{session_id}/{course_id}', [QuestionController::class, 'upload_question'])->name('teacher.upload_question');
        Route::POST('upload-question-submit/{session_id}/{course_id}', [QuestionController::class, 'upload_question_submit'])->name('upload_question_submit');
        Route::get('questions', [QuestionController::class, 'show_question'])->name('teacher.show_questions');
        Route::get('download-question/{id}', [QuestionController::class, 'download'])->name('teacher.question_download');
        Route::get('search-question', [QuestionController::class, 'search'])->name('question.search');

        //result

        Route::get('student-list-result/{session_id}/{semester_id}/{course_id}', [ResultController::class, 'result_student_list'])->name('result.my_course_student');
    });
});
