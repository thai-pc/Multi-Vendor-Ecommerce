<?php

use \App\Http\Controllers\AdminController;

Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});

