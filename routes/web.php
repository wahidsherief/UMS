<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;


use Illuminate\Support\Facades\Auth;

Auth::routes();



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Superadmin Functionality

Route::group(['prefix' => 'superadmin', 'middleware' => ['isSuperAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('profile', [SuperAdminController::class, 'profile'])->name('superadmin.profile');
    Route::get('setting', [SuperAdminController::class, 'setting'])->name('superadmin.setting');
});


