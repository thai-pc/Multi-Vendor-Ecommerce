<?php

use \App\Http\Controllers\AdminController;

Route::middleware('guest')->group(function () {
    Route::get('admin/login', [AdminController::class, 'login']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('admin/profile/store', [AdminController::class, 'profileStore'])->name('admin.profile.store');
    Route::get('admin/change/password', [AdminController::class, 'changePassword'])->name('admin.change.password');
    Route::post('admin/update/password', [AdminController::class, 'updatePassword'])->name('admin.update.password');
});



