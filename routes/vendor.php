<?php

use \App\Http\Controllers\VendorController;

Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('vendor/dashboard', [VendorController::class, 'index'])->name('vendor.dashboard');
    Route::get('vendor/logout', [VendorController::class, 'destroy'])->name('vendor.logout');
    Route::get('vendor/profile', [VendorController::class, 'profile'])->name('vendor.profile');
    Route::post('vendor/profile/store', [VendorController::class, 'profileStore'])->name('vendor.profile.store');
    Route::get('vendor/change/password', [VendorController::class, 'changePassword'])->name('vendor.change.password');
    Route::post('vendor/update/password', [VendorController::class, 'updatePassword'])->name('update.password');
});

Route::middleware('guest')->group(function () {
    Route::get('vendor/login', [VendorController::class, 'login']);
});
