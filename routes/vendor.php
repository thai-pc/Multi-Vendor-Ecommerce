<?php

use \App\Http\Controllers\VendorController;

Route::middleware(['auth', 'role:vendor'])->group(function (){
    Route::get('vendor/dashboard', [VendorController::class, 'VendorDashboard'])->name('vendor.dashboard');
});