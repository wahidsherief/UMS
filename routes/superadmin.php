<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\superadmin\Admininfo;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'superadmin', 'middleware' => ['isSuperAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('profile', [SuperAdminController::class, 'profile'])->name('superadmin.profile');
    Route::get('setting', [SuperAdminController::class, 'setting'])->name('superadmin.setting');

    //Admin Info
    Route::get('all-admin', [Admininfo::class, 'alladmin'])->name('superadmin.all.admin');
    Route::get('add-admin', [Admininfo::class, 'addadmin'])->name('superadmin.add.admin');
    Route::get('delete-admin/{id}', [Admininfo::class, 'deleteadmin'])->name('superadmin.deleteadmin');
    Route::POST('add-admin', [Admininfo::class, 'addadminsubmit'])->name('superadmin.add.admin');


    // Department parts

Route::get('department', [DepartmentController::class, 'add_department'])->name('add.department');
Route::get('departments', [DepartmentController::class, 'department_data'])->name('department_data');
Route::get('delete-department/{id}', [DepartmentController::class, 'delete_department'])->name('delete_department');
Route::post('department', [DepartmentController::class, 'add_department_submit'])->name('add.department.submit');

});

?>
